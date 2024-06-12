<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Deskripsi_Contact')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Email')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('No_Telp')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Link_GMAP')
                    ->required()
                    ->maxLength(300),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Deskripsi_Contact')->limit(30),
                Tables\Columns\TextColumn::make('Alamat')->limit(30),
                Tables\Columns\TextColumn::make('Email')->limit(30),
                Tables\Columns\TextColumn::make('No_Telp'),
                Tables\Columns\TextColumn::make('Link_GMAP')->limit(30),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }    
}
