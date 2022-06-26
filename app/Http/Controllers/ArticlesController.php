<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function index(){

        return view('articles.index', ['articles' => Article::latest()->get()]);
    }
    public function show(Article $article){

        return view('articles.show', ['article' => $article]);
    }

    public function create(){
        
        return view('articles.create');
    }

    public function store(){

        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    public function edit(Article $article){

        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article){

        $article->update($this->validateArticle());

        return redirect($article->path());
    }

    public function validateArticle(){

       return  request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}
