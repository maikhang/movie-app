# Movie App

Movie App Websing using Laravel 8 & [TMDB API](https://www.themoviedb.org/)

## Live Demo

Link: [https://movie-app-mhkhang.herokuapp.com/](https://movie-app-mhkhang.herokuapp.com/)

![alt text](https://github.com/maikhang/movie-app/blob/master/public/asset/html/frontend/html/images/screenshot.png?raw=true)

## Usage

1. Clone this repo with CMD:
   `git clone https://github.com/maikhang/movie-app.git`
2. Install packages needed with CMD:
   `cd movie app`
   `composer require`
3. Copy .env.example to .env:
4. Change `TMDB_TOKEN` in your `.env` file to your API Token. You can get an API key [here](https://www.themoviedb.org/documentation/api).
5. Create app key with CMD:
   `php artisan key:generate`
6. Start Laravel Server with CMD:
   `php artisan serve`
7. Acess http://127.0.0.1:8000/ and enjoy !
