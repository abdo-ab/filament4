<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{


    protected $fillable = [
        "title",
        "content",
        "thumbnail",
        "file",
        "author_name",
    ];
    public function user() {
    return $this->belongsTo(User::class);
}

 protected static function booted()
    {
        static::deleting(function ($article) {
            // Delete thumbnail if it exists
            if ($article->thumbnail && Storage::disk('public')->exists($article->thumbnail)) {
                Storage::disk('public')->delete($article->thumbnail);
            }

            // Delete attachment files if it exists
            if ($article->file && Storage::disk('public')->exists($article->file)) {
                Storage::disk('public')->delete($article->file);
            }
        });
    }
}
