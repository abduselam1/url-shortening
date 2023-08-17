<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UrlResource\Pages;
use App\Filament\Resources\UrlResource\RelationManagers;
use App\Models\Url;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UrlResource extends Resource
{
    protected static ?string $model = Url::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('destination')->required()->url(),
            DatePicker::make('expiration_date'),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('destination')->searchable(),
                TextColumn::make('shortened_url'),
                TextColumn::make('views')->label('View counts'),
                TextColumn::make('last_accessed_at')->dateTime(),
                
                TextColumn::make('expiration_date')->dateTime(),
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

    public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()->where('user_id',auth()->id());
}

    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUrls::route('/'),
            'create' => Pages\CreateUrl::route('/create'),
            // 'edit' => Pages\EditUrl::route('/{record}/edit'),
        ];
    }    
}
