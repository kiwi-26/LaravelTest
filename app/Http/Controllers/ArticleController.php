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

    public function store(Request $request) {
        $data = $request->all();
        
        if (!empty($data['id'])) {
            $article = Article::find($data['id']);
        } else {
            $article = new Article;
        }

        $article->title = $data['title'];
        $article->summary = $data['summary'];
        $article->content = $data['content'];
        $article->user_id = 1;
        $article->status = 0;
        $article->is_deleted = false;

        if ($article->save()) {
            return redirect('article/complete');
        } else {
            return redirect('article/create');
        }
    }

    public function destroy(Request $request) {
        $data = $request->all();
        
        $article = Article::find($data['id']);
        if($article) {
            $article->delete();
            return redirect('article/complete');
        } else {
            return redirect('article/index');
        }
    }


}
