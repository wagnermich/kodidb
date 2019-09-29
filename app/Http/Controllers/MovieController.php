<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {


        $movies=Movie::with(['files','rating','uniqueid'])->where('idMovie','39')->first();

        dd($movies);
       $data['movies']=$movies;
        return view('movie.index',$data);
    }
}
