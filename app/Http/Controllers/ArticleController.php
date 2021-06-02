<?php

namespace App\Http\Controllers;

use App\Http\Requests\createRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\rejection_for;

class ArticleController extends Controller
{
    public function __construct()
    {
    }

    public function createArticale(createRequest $request){


     Article::create([
         'title' => $request -> title,
         'content' => $request -> content,
     ]);
     return redirect()->back()->with(['success'=>'تم إضافة المقالة بنجاح']);

    }

    public function Index(){
      $Articles =  Article::select('Id','title','content') -> get();
      return view('Index',compact('Articles'));
    }

    public function edit(){
        $Articles =  Article::select('Id','title','content') -> get();
        return view('edit',compact('Articles'));
    }

    public function editId($articleId)
    {
        $article = Article::find($articleId);
        if (!$article) {
            return redirect()->back();
        } else {

        $fond =  Article::select('Id','title','content') -> find($articleId);
         return view('editId',compact('fond'));
    }

     //return view('edit',compact('Articles'));
    }

    public function update(Request $request){
        Article::update([
            'title' => $request -> title,
            'content' => $request -> content,
        ]);
    }

}
