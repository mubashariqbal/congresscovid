<?php

use App\Models\Person;
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

    $positives = Person::whereNotNull('positive_date')->orderBy('positive_date', 'desc')->get();

    return view('welcome', ['positives' => $positives]);
});

Route::get('/senate', function () {

    $positives = Person::where('office', 'senate')->whereNotNull('positive_date')->whereNull('negative_date')->orderBy('positive_date', 'desc')->get();
    $pastPositives = Person::where('office', 'senate')->whereNotNull('negative_date')->whereNotNull('positive_date')->orderBy('positive_date', 'desc')->get();

    return view('senate', ['positives' => $positives, 'pastPositives' => $pastPositives]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
