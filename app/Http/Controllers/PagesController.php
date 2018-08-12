<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Index page
    public function index(){
        $title = 'Welcome to Laravel!';
        // return view('pages.index', compact('title') );
        return view('pages.index')->with('title', $title);
        
    }

    public function about(){
        $title = 'About Us';
        
        return view('pages.about')->with('title', $title);
    }

    // Services page -> Shows how to pass array of values
    public function services(){
        $data = array(
            'title'  => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);;
    }
}
