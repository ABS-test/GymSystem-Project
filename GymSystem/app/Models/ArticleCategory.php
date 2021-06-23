<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{   
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable=[
        'name',
        'created_at',
        'updated_at',
        'slug',
        'SEO_title',
        'SEO_description'
    ];
    public function categories(){
        return $this->hasMany(ArticleCategory::class, 'parent_category', 'id');
    }
    public function parent_category(){
        return$this->belongsTo(ArticleCategory::class, 'parent_category');
    }
    public function articles(){
        return $this->hasMany(Article::class);
    }
    protected $table = 'articles_categories';
}
