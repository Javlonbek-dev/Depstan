<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeadershipResource\Pages;
use App\Filament\Resources\LeadershipResource\RelationManagers;
use App\Models\Leadership;
use Filament\Forms;
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
                    ->maxLength(255),
                Forms\Components\TextInput::make('full_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->required('png', 'jpg'),
                Forms\Components\TextInput::make('nationality')
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('birth_date')
                    ->required(),
                Forms\Components\TextInput::make('info')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('work_activity')
                    ->required(),
                Forms\Components\TextInput::make('family_info')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('reception_days')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birth_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('info')
                    ->searchable(),
                Tables\Columns\TextColumn::make('family_info')
                    ->searchable(),
                Tables\Columns\TextColumn::make('reception_days')
                    ->searchable(),
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
