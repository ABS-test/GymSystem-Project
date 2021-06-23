<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable=[
        'name',
        'created_at',
        'updated_at',
        'size',
        'path'
    ];

    public function articles(){
        return $this->belongsTo(Article::class);
    }
    protected $table = 'articles_images';
}
