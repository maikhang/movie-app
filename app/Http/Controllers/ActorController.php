<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ActorController extends Controller
{
    //[GET] INDEX
    public function index($page=1){
        abort_if($page > 500, 204);

        $popularActors = Http::withToken(config('services.tmdb.token'))
                                ->get('https://api.themoviedb.org/3/person/popular?page='.$page)
                                ->json()['results'];

        return view('client.actor.index', compact('popularActors', 'page'));
    }

    //[GET] SHOW
    public function show($id){
        $actor = collect(Http::withToken(config('services.tmdb.token'))
                        ->get('https://api.themoviedb.org/3/person/'.$id)
                        ->json())
                        ->only(['profile_path', 'name', 'homepage', 'birthday', 'place_of_birth', 'known_for_department', 'biography']);

        $social = collect(Http::withToken(config('services.tmdb.token'))
                        ->get('https://api.themoviedb.org/3/person/'.$id.'/external_ids')
                        ->json())
                        ->only(['facebook_id', 'twitter_id']);

        $credits = collect(Http::withToken(config('services.tmdb.token'))
                        ->get('https://api.themoviedb.org/3/person/'.$id.'/combined_credits')
                        ->json())
                        ->only(['cast']);

        $castMovies = collect($credits)->get('cast');
        $knownFors = collect($castMovies)->sortByDesc('popularity')->take(10);

        // dd($creditMovies);

        return view('client.actor.show', compact('actor', 'social', 'credits', 'castMovies', 'knownFors'));
    }
}
