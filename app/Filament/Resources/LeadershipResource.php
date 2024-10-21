<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeadershipResource\Pages;
use App\Filament\Resources\LeadershipResource\RelationManagers;
use App\Models\Leadership;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LeadershipResource extends Resource
{
    protected static ?string $model = Leadership::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('position')
                    ->required()
                    ->label('Lavozimi')
                    ->maxLength(255),
                Forms\Components\TextInput::make('full_name')
                    ->required()
                    ->label("To'liq ism sharifi")
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->required('png', 'jpg')
                    ->label('Rasm'),
                Forms\Components\TextInput::make('nationality')
                    ->required()
                    ->label('Millati'),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->label('Telefon raqami')
                    ->maxLength(255),
                Forms\Components\TextInput::make('birth_date_place')
                    ->required()
                    ->label("Tug'ilgan yili va joyi"),
                Forms\Components\TextInput::make('info')
                    ->required()
                    ->label('Ma`lumoti')
                    ->maxLength(255),
                Forms\Components\TextInput::make('partisanship')
                    ->label('Partiyaligi')
                    ->required(),
                Forms\Components\TextInput::make('family_info')
                    ->required()
                    ->maxLength(255)
                    ->label('Oilaviy holati'),
                Forms\Components\TextInput::make('reception_days')
                    ->required()
                    ->maxLength(255)
                    ->label('Qabul qilish vaqti'),
                Repeater::make('work_activities')
                    ->schema([
                        Forms\Components\TextInput::make('work_activity_date')
                            ->required()->label('mehnat faoliyati yillari'),
                        Forms\Components\TextInput::make('work_activity_position')
                            ->label('mehnat faoliyati lavozimlari')
                            ->required(),
                    ])
                    ->minItems(1)
                    ->maxItems(10)
                    ->columns(2)
                    ->required()
                    ->label('Mehnat faoliyati'),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable()
                    ->label("To'liq ism sharifi"),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable()
                    ->label('Telefon raqami'),
                Tables\Columns\TextColumn::make('info')
                    ->wrap()
                    ->label('Ma`lumoti')
                    ->searchable(),
                Tables\Columns\TextColumn::make('reception_days')
                    ->searchable()
                    ->label('Qabul qilish vaqti'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLeaderships::route('/'),
            'create' => Pages\CreateLeadership::route('/create'),
            'edit' => Pages\EditLeadership::route('/{record}/edit'),
        ];
    }
}
