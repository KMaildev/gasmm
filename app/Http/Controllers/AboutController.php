<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('about.index', compact('news'));
    }
}
