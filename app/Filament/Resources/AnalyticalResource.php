<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnalyticalResource\Pages;
use App\Filament\Resources\AnalyticalResource\RelationManagers;
use App\Models\Analytical;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AnalyticalResource extends Resource
{
    protected static ?string $model = Analytical::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('published_at')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->image(),
                Forms\Components\RichEditor::make('text')
                    ->required()
                    ->fileAttachmentsDirectory('analytics/images')->columnSpanFull(),
                Forms\Components\TextInput::make('editor')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('editor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListAnalyticals::route('/'),
            'create' => Pages\CreateAnalytical::route('/create'),
            'edit' => Pages\EditAnalytical::route('/{record}/edit'),
        ];
    }
}
