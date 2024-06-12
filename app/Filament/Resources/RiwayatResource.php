<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RiwayatResource\Pages;
use App\Filament\Resources\RiwayatResource\RelationManagers;
use App\Models\Riwayat;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RiwayatResource extends Resource
{
    protected static ?string $model = Riwayat::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Riwayat_Singkat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Deskripsi_Singkat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('No_HP')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Email')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Riwayat_Singkat')->limit(30),
                Tables\Columns\TextColumn::make('Nama'),
                Tables\Columns\TextColumn::make('Deskripsi_Singkat')->limit(30),
                Tables\Columns\TextColumn::make('Alamat')->limit(30),
                Tables\Columns\TextColumn::make('No_HP'),
                Tables\Columns\TextColumn::make('Email'),
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
            'index' => Pages\ListRiwayats::route('/'),
            'create' => Pages\CreateRiwayat::route('/create'),
            'edit' => Pages\EditRiwayat::route('/{record}/edit'),
        ];
    }    
}
