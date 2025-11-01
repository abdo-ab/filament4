<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make("title")
                ->required()
                ->Placeholder('Enter article title')
                ->minLength(2)
                ->maxLength(250) ,

                TextInput::make("content")
                ->required()
                ->placeholder("decription of the article")
                ->minLength(5)
                ->maxLength(250),

                FileUpload::make('thumbnail')
                ->label('Thumbnail')
                ->image()
                ->directory('thumbnails')
                ->maxSize(50000)
                ->required(),

            FileUpload::make('file')
                ->label('attach books')
                ->directory('file')
                ->maxSize('50000')
                ->downloadable()
                ->openable()
                ->helperText('Upload a PDF or document related to this article.'),

               Hidden::make('author_name')
                   ->default(fn () => Auth::user()?->name ?? '')

            ]);
    }
}
