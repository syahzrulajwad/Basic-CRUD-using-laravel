<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Laravel';
        // method 1 to passing data
        // return view('pages.index', compact('title')); 
        // method 2
        return view('pages.index')->with('title',$title);
    }
    public function about()
    {
        // method 3 
        $title='About Us';
        return view('pages.about')->with('title',$title);
    }
    public function services()
    {
        // method to passing multiple value
        $data=array(
            'title'=>'Services',
            'services'=> ['Web Design', 'Programming', 'Mobile Design']
        );
        return view('pages.services')->with($data);
    }
}
