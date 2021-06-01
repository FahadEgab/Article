<?php

namespace App\Http\Controllers;

use App\Http\Requests\createRequest;
use App\Models\Article;
use Illuminate\Http\Request;

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
}
