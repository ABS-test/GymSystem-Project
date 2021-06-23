<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function articleData(){
       return view('pages/blog', ['data' => Article::all()]);
    }
    
    public function ShowOneArticleData($id){
        $article = new Article;
        return view('pages/blog_articles_details', ['data' => $article->find($id)]);
    }
}