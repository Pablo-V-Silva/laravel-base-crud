<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
  $comics = config('comics');
  $merch = config('merch');
  $links = config('headerLinks');

  return view('homepage', compact('comics', 'merch', 'links'));
})->name('comics');

Route::get('comicPage/{id}', function($id) {
  $comics = config('comics');
  $links = config('headerLinks');

  if ($id < count($comics) && is_numeric($id) && $id>=0) {
    $comic = $comics[$id];
    return view('comic_page/comicPage', compact('comic','links'));
  } else {
    abort('404');
  };
})->name('comicPage'); */


Route::get('/', 'ComicController@index')->name('comics');

Route::get('/comics{comic}', 'ComicController@show')->name('comic');
