<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\News;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $imageDirectory = public_path('data/gallery/');
        $galleries = [];
        if (is_dir($imageDirectory)) {
            $imageFiles = scandir($imageDirectory);
            foreach ($imageFiles as $file) {
                if (is_file($imageDirectory . '/' . $file)) {
                    $galleries[] = $file;
                }
            }
        }

        $videos = Video::all();

        $activities = Activitie::latest()->take(5)->get();


        $news = News::latest()->take(5)->get();

        return view('welcome', compact('galleries', 'videos', 'activities', 'news'));
    }
}
