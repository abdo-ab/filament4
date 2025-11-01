<?php

namespace App\Filament\Resources\NewArticles\Pages;

use App\Filament\Resources\NewArticles\NewArticleResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNewArticle extends CreateRecord
{
    protected static string $resource = NewArticleResource::class;
}
