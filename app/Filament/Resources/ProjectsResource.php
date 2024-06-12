<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectsResource\Pages;
use App\Filament\Resources\ProjectsResource\RelationManagers;
use App\Models\Projects;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectsResource extends Resource
{
    protected static ?string $model = Projects::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Deskripsi_Singkat')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('Foto_Project')
                    ->required()->image()->disk('public'),
                Forms\Components\TextInput::make('Judul_Project')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Deskripsi_Project')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Link_Project')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Deskripsi_Singkat')->limit(30),
                Tables\Columns\ImageColumn::make('Foto_Project'),
                Tables\Columns\TextColumn::make('Judul_Project'),
                Tables\Columns\TextColumn::make('Deskripsi_Project')->limit(30),
                Tables\Columns\TextColumn::make('Link_Project')->limit(30),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProjects::route('/create'),
            'edit' => Pages\EditProjects::route('/{record}/edit'),
        ];
    }    
}
