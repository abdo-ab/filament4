<?php

namespace App\Filament\Resources\Articles\Schemas;

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

               Hidden::make('author_name')
                   ->default(fn () => Auth::user()?->name ?? '')

            ]);
    }
}
