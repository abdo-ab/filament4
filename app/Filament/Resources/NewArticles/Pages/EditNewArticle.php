<?php

namespace App\Filament\Resources\NewArticles\Pages;

use App\Filament\Resources\NewArticles\NewArticleResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditNewArticle extends EditRecord
{
    protected static string $resource = NewArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
