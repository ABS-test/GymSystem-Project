<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable=[
        'name',
        'created_at',
        'updated_at',
        'slug'
    ];

    public function articles_tags_connections(){
        return $this->hasMany(ArticleTagConnection::class);
    }
    protected $table = 'articles_tags';
}
