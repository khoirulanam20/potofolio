<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class BerandaController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('page_web.beranda.beranda', compact('articles'));
    }
}
    
