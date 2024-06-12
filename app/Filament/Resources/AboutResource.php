<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('Foto')
                    ->required()->image()->disk('public'),
                Forms\Components\Textarea::make('Pengenalan_Singkat')
                    ->required(),
                Forms\Components\TextInput::make('Skill_Utama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('Deskripsi_Skill')
                    ->required(),
                Forms\Components\TextInput::make('Tanggal_Lahir')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Website')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Nomor_Telepon')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Kota')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Usia')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Tingkat_Kemahiran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Email')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Pekerjaan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('Deskripsi_Biodata')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('Foto'),
                Tables\Columns\TextColumn::make('Pengenalan_Singkat')->limit(30),
                Tables\Columns\TextColumn::make('Skill_Utama')->limit(30),
                Tables\Columns\TextColumn::make('Deskripsi_Skill')->limit(30),
                Tables\Columns\TextColumn::make('Tanggal_Lahir'),
                Tables\Columns\TextColumn::make('Website'),
                Tables\Columns\TextColumn::make('Nomor_Telepon'),
                Tables\Columns\TextColumn::make('Kota'),
                Tables\Columns\TextColumn::make('Usia'),
                Tables\Columns\TextColumn::make('Tingkat_Kemahiran'),
                Tables\Columns\TextColumn::make('Email'),
                Tables\Columns\TextColumn::make('Pekerjaan'),
                Tables\Columns\TextColumn::make('Deskripsi_Biodata')->limit(30),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }    
}
