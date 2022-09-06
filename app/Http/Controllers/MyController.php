<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class MyController extends Controller
{
    public function about()
    {
       return view('about');
    }
}
