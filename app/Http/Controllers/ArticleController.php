<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    //

    public function index(){
        return view('article');
    }

    public function getArticles(){
         //'select * from articles'
        return Article::all();
    }
}
