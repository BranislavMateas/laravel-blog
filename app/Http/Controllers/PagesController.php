<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('welcome', [
            'title' => 'Welcome to Laravel!',
            'content' => 'This is the Laravel application developed by the Laravel Collective.',
            'posts' => [
                'Laravel is awesome',
                'Laravel is great',
                'Laravel is awesome',
                'Laravel is great',
                'Laravel is awesome'
            ],
        ]);
    }

    public function about() {
        return 'about';
    }

    public function contact() {
        return 'contact';
    }
}
