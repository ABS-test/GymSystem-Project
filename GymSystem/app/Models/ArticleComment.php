<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    use HasFactory;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable=[
        'message',
        'created_at',
        'updated_at',
        'author',
        'article_id'
    ];

    public function articles(){
        return $this->belongsTo(Article::class);
    }
    protected $table = 'articles_comments';
}
