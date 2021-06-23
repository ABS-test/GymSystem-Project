<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'short_description',
        'content',
        'SEO_title',
        'SEO_description',
        'slug',
        'author_id',
        'image_id',
        'category_id'
    ];

    public function categories()
    {
        return $this->belongsTo(ArticleCategory::class);
    }

    public function comments()
    {
        return $this->hasMany(ArticleComment::class);
    }

    public function images()
    {
        return $this->hasOne(ArticleImage::class);
    }

    public function tagsConnections(){
        return $this->hasMany(ArticleTagConnection::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
    protected $table = 'articles';
}
