<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HobiResource\Pages;
use App\Filament\Resources\HobiResource\RelationManagers;
use App\Models\Hobi;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HobiResource extends Resource
{
    protected static ?string $model = Hobi::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Jenis_Hobi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Tingkat_Kegemaran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Deskripsi_Hobi')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Jenis_Hobi'),
                Tables\Columns\TextColumn::make('Tingkat_Kegemaran'),
                Tables\Columns\TextColumn::make('Deskripsi_Hobi')->limit(30),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListHobis::route('/'),
            'create' => Pages\CreateHobi::route('/create'),
            'edit' => Pages\EditHobi::route('/{record}/edit'),
        ];
    }    
}
