<?php

    use App\Http\Controllers\PageController;
    use App\Http\Controllers\FormController;
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

Route::get('/', [PageController::class, 'index'])
    ->name('page.index');

Route::get('/{page.slug}', [PageController::class, 'show'])
    ->name('page.show');

Route::get('/service/{action}', [FormController::class, 'show'])
    ->name('auth.show');
