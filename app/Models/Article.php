<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{


    protected $fillable = [
        "title",
        "content",
        "author_name",
    ];
    public function user() {
    return $this->belongsTo(User::class);
}
}
