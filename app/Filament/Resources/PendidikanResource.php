<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendidikanResource\Pages;
use App\Filament\Resources\PendidikanResource\RelationManagers;
use App\Models\Pendidikan;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PendidikanResource extends Resource
{
    protected static ?string $model = Pendidikan::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('Jenjang')->options([
                    'SD' => 'SD', 'SMP' => 'SMP', 'SMA/SMK' => 'SMA/SMK', 'D3/D4' => 'D3/D4',
                    'S1' => 'S1'
                ]),
                Forms\Components\TextInput::make('Nama_Sekolah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Alamat_Sekolah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Tahun')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Deskripsi_Singkat')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Jenjang'),
                Tables\Columns\TextColumn::make('Nama_Sekolah'),
                Tables\Columns\TextColumn::make('Alamat_Sekolah')->limit(30),
                Tables\Columns\TextColumn::make('Tahun'),
                Tables\Columns\TextColumn::make('Deskripsi_Singkat')->limit(30),
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
            'index' => Pages\ListPendidikans::route('/'),
            'create' => Pages\CreatePendidikan::route('/create'),
            'edit' => Pages\EditPendidikan::route('/{record}/edit'),
        ];
    }    
}
