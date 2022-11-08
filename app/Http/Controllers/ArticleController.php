<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController
{
    public function index()
    {
    }

    public function create()
    {
        return view('articles.index');
    }

    public function store(Request $request)
    {
    }

    public function show(Article $article)
    {
    }

    public function edit(Article $article)
    {
    }

    public function update(Request $request, Article $article)
    {
    }

    public function destroy(Article $article)
    {
    }
}
