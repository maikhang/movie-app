<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
     //[GET] INDEX
     public function index(){
        $popularMovies = collect(Http::withToken(config('services.tmdb.token'))
                                ->get('https://api.themoviedb.org/3/movie/popular')
                                ->json()['results'])
                                ->take(5);
        
        $genresArray = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });

        $trendingDayMovies = collect(Http::withToken(config('services.tmdb.token'))
                                ->get('https://api.themoviedb.org/3/trending/all/day')
                                ->json()['results'])
                                ->take(10);
        // dd($topTvShows);

        $topRatedMovies = collect(Http::withToken(config('services.tmdb.token'))
                                ->get('https://api.themoviedb.org/3/movie/top_rated')
                                ->json()['results'])
                                ->take(10);

        $topTvShows = collect(Http::withToken(config('services.tmdb.token'))
                            ->get('https://api.themoviedb.org/3/tv/popular')
                            ->json()['results'])
                            ->take(10);

        $upcomingMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/upcoming')
            ->json()['results'][0];

     
        

        return view('client.index', compact('popularMovies', 'trendingDayMovies', 'topRatedMovies', 'upcomingMovies', 'genres', 'topTvShows'));
    }
}
