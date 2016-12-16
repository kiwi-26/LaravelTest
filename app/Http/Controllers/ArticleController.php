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

    public function calcAdd($n1, $n2) {
        $N_MAX = 999;
        $N_MIN = -999;

        // 数字であること、小数はなし
        if (!is_int($n1) || !is_int($n2)) {
            return false;
        }

        // 引数の上限、下限
        if ($n1 < $N_MIN || $n1 > $N_MAX || $n2 < $N_MIN || $n2 > $N_MAX) {
            return false;
        }

        $result = $n1 + $n2;
        
        // 返り値の上限、下限
        if ($result > 2 * $N_MAX || $result < 2 * $N_MIN) {
            return false;
        }

        // 結果が777の場合
        if ($result == 777) {
            return 'Happy';
        }

        // 引数を足した値を返す
        return $result;
    }

}
