<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Landing-page-only project — no controllers, no database.
| This single route just renders the Blade view.
|
*/

Route::view('/', 'pages.home');
