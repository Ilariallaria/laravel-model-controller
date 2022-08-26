<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index(){

        $movies = Movie::all();
        // dd($movies);

        $data =[
            'page_title'=> 'I miei Film',
            'movies' => $movies
        ];

        return view('home', $data);
    }
}
