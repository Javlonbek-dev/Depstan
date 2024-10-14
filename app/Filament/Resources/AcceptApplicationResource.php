<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcceptApplicationResource\Pages;
use App\Filament\Resources\AcceptApplicationResource\RelationManagers;
use App\Models\AcceptApplication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AcceptApplicationResource extends Resource
{
    protected static ?string $model = AcceptApplication::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('text')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('manager_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('employ_phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('reception_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('reception_phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('control_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('control_phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('manager_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('employ_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('reception_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('reception_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('control_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('control_phone')
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
            'index' => Pages\ListAcceptApplications::route('/'),
            'create' => Pages\CreateAcceptApplication::route('/create'),
            'edit' => Pages\EditAcceptApplication::route('/{record}/edit'),
        ];
    }
}
