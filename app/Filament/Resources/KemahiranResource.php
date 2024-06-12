<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KemahiranResource\Pages;
use App\Filament\Resources\KemahiranResource\RelationManagers;
use App\Models\Kemahiran;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KemahiranResource extends Resource
{
    protected static ?string $model = Kemahiran::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Jenis_Kemahiran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Tahun')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Tempat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Deskripsi_Kemahiran')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Jenis_Kemahiran'),
                Tables\Columns\TextColumn::make('Tahun'),
                Tables\Columns\TextColumn::make('Tempat'),
                Tables\Columns\TextColumn::make('Deskripsi_Kemahiran'),
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
            'index' => Pages\ListKemahirans::route('/'),
            'create' => Pages\CreateKemahiran::route('/create'),
            'edit' => Pages\EditKemahiran::route('/{record}/edit'),
        ];
    }    
}
