<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use Illuminate\Http\Request;

class ActivitieController extends Controller
{
    public function index()
    {
        $activities = Activitie::all();
        return view('activities.index', compact('activities'));
    }
}
