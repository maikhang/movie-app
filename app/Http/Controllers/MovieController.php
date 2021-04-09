<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    //[GET] INDEX
    public function index($page=1){
        abort_if($page > 500, 204);

        $popularMovies = Http::withToken(config('services.tmdb.token'))
                                ->get('https://api.themoviedb.org/3/movie/popular?page='.$page)
                                ->json()['results'];

        return view('client.movie.index', compact('popularMovies', 'page'));
    }

    //[GET] SHOW
    public function show($id){
        $movie = collect(Http::withToken(config('services.tmdb.token'))
                    ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=videos,images,casts')
                    ->json())
                    ->only(['videos', 'title', 'genres', 'name', 'vote_average', 'runtime', 'release_date', 'production_companies', 'overview', 'homepage', 'casts', 'images']);

        // dd($movie['casts']['cast']);

        return view('client.movie.show', compact('movie'));
    }

}
