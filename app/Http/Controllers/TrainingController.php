<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Navbar;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    //
    private $title = 'Training';

    public function index()
    {
        $contents = Content::where('name', 'Home')->get();
        $navbars = Navbar::where('deleted', '0')->get();
        return view('index', [
            'title' => $this->title,
            'content' => $contents,
            'navbars' => $navbars,
        ]);
    }

    public function profile()
    {
        # code...
    }

    public function contactus()
    {
        # code...
    }

    public function blog()
    {
        # code...
    }

    public function aboutus()
    {
        # code...
    }
}
