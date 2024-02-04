<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyanmarController extends Controller
{
    public function index()
    {

        $imageDirectory = public_path('data/mm_gallery/');
        $images = [];
        if (is_dir($imageDirectory)) {
            $imageFiles = scandir($imageDirectory);
            foreach ($imageFiles as $file) {
                if (is_file($imageDirectory . '/' . $file)) {
                    $images[] = $file;
                }
            }
        }

        return view('myanmar.index', compact('images'));
    }
}
