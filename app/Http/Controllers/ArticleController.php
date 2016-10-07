<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;

class ArticleController extends Controller
{
    public function index() {
        return view('article.index', ['articles' => Article::all()]);
    }

    public function show($id) {
        return view('article.show', ['article' => Article::find($id)]);
    }
}
