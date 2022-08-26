<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShortcodeController;
use App\Models\ShortUrls;

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

Route::get('/{shortCode}', [ShortcodeController::class, 'shortCodeToUrl']);

//Homepage
Route::post('/', [ShortcodeController::class, 'createShortLink']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/p/data', function () {
    $urls = ShortUrls::all();
    echo "<pre>";
    print_r($urls->toArray());
});

Route::get('/p/test',function(){
    return view('homepage');
});
