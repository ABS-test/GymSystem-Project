<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTagConnection extends Model
{
    use HasFactory;

    public function articles(){
        return $this->belongsTo(Article::class);
    }
    public function tags(){
        return $this->belongsTo(ArticleTag::class);
    }
    protected $table = 'articles_tags_connection';
}
