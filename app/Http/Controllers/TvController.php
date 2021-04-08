<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    //[GET] INDEX
    public function index($page=1){
        $popularTvs = Http::withToken(config('services.tmdb.token'))
                                ->get('https://api.themoviedb.org/3/tv/popular?page='.$page)
                                ->json()['results'];

        return view('client.tv.index', compact('popularTvs', 'page'));
    }

    //[GET] SHOW
    public function show($id){
        $tv = collect(Http::withToken(config('services.tmdb.token'))
                    ->get('https://api.themoviedb.org/3/tv/'.$id.'?append_to_response=videos,images,credits')
                    ->json())
                    ->only(['videos', 'name', 'last_episode_to_air', 'genres', 'number_of_episodes', 'episode_run_time', 'first_air_date', 'production_companies', 'overview', 'homepage', 'credits', 'images']);

        // dd($tv);

        return view('client.tv.show', compact('tv'));
    }
}
