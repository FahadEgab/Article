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

    public function createArticale(createRequest $request)
    {


        Article::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->back()->with(['success' => 'تم إضافة المقالة بنجاح']);

    }

    public function Index()
    {
        $Articles = Article::select('Id', 'title', 'content')->get();
        return view('Index', compact('Articles'));
    }

    public function edit()
    {
        $Articles = Article::select('Id', 'title', 'content')->get();
        return view('edit', compact('Articles'));
    }

    public function editId($articleId)
    {
        $article = Article::find($articleId);
        if (!$article) {
            return redirect()->back();
        } else {

            $fond = Article::select('Id', 'title', 'content')->find($articleId);
            return view('editId', compact('fond'));
        }

        //return view('edit',compact('Articles'));
    }

    public function update(Request $request, $Id)
    {

        $article = Article::find($Id);

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back()->with(['success' => 'تم تعديل المقالة بنجاح']);
    }

    public function delete()
    {
        $Articles = Article::select('Id', 'title', 'content')->get();
        return view('delete', compact('Articles'));
    }

    public function deleteArticle($Id)
    {

        $article = Article::find($Id);

        $article->delete();

        return redirect()->back();
    }

    public function show($articleId)
    {
        $article = Article::find($articleId);
        if (!$article) {
            return redirect()->back();
        } else {

            $fond = Article::select('Id', 'title', 'content')->find($articleId);
            return view('show', compact('fond'));
        }

    }
}
