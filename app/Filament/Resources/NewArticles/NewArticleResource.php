<?php

namespace App\Filament\Resources\NewArticles;

use App\Filament\Resources\NewArticles\Pages\CreateNewArticle;
use App\Filament\Resources\NewArticles\Pages\EditNewArticle;
use App\Filament\Resources\NewArticles\Pages\ListNewArticles;
use App\Filament\Resources\NewArticles\Schemas\NewArticleForm;
use App\Filament\Resources\NewArticles\Tables\NewArticlesTable;
use App\Models\NewArticle;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NewArticleResource extends Resource
{
    protected static ?string $model = NewArticle::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return NewArticleForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NewArticlesTable::configure($table);
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
            'index' => ListNewArticles::route('/'),
            'create' => CreateNewArticle::route('/create'),
            'edit' => EditNewArticle::route('/{record}/edit'),
        ];
    }
}
