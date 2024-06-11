<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class articles extends Controller
{
    public function detailArticle($id){
        $articles = Article::findOrFail($id);
        return view('artikel_detail', compact('articles'));
    }
}
