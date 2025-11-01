<?php

namespace App\Filament\Resources\NewArticles\Pages;

use App\Filament\Resources\NewArticles\NewArticleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNewArticles extends ListRecords
{
    protected static string $resource = NewArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
