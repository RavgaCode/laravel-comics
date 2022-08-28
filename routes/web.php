<?php

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

Route::get('/', function () {
    $comics_array = config('comics');

    $data = [
        'comics_array' => $comics_array,
    ];

    return view('comics', $data);

    return view('home', $data);
})-> name ('home');


Route::get('/comics/{id}', function ($id) {
    $comics_array = config('comics');

    $current_comic = [];
    foreach($comics_array as $comic) {
        if($comic['id'] == $id) {
            $current_comic = $comic;
        }
    }

    // Imposto la pagina 404 in caso d'id non presente
    if(empty($current_comic)) {
        abort('404');
    }

    // Imposto i $data da passare
    $data = [
        'current_comic' => $current_comic
    ];

    return view('comics', $data);
})->name('comics');
