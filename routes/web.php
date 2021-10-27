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
    return redirect(route('login'));
});

Auth::routes();

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['auth'])->name('dashboard');

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    
    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'users',
            'create' => 'create-user',
        ]
    ]);

    Route::get(
        '/users/{id}/edit',
        [UserController::class, 'edit']
    )->name('edit-user');

    Route::resource('profil', 'ProfilController', [
        'names' => [
            'index' => 'profil',
            'create' => 'create-profil',
        ]
    ]);

    Route::get(
        '/profil/{id}/edit',
        [ProfilController::class, 'edit']
    )->name('edit-profil');

    Route::resource('siswa', 'SiswaController', [
        'names' => [
            'index' => 'siswa',
            'create' => 'create-siswa',
        ]
    ]);

    Route::get(
        '/siswa/{id}/edit',
        [SiswaController::class, 'edit']
    )->name('edit-siswa');

    Route::match(array('PUT', 'PATCH'), "/siswa/{id}", array(
      'uses' => 'SiswaController@update',
      'as' => 'update-siswa'
  ));

    Route::resource('kelas', 'KelasController', [
        'names' => [
            'index' => 'kelas',
            'create' => 'create-kelas',
        ]
    ]);

    Route::get(
        '/kelas/{id}/edit',
        [KelasController::class, 'edit']
    )->name('edit-kelas');
});

Route::name('siswa.')->prefix('siswa')->middleware('auth')->group(function(){
    Route::resource('home', 'DashboardController@siswa');

    Route::resource('profil', 'ProfilController@siswa');

    Route::resource('kelas', 'KelasController@siswa');
});

Route::name('js.')->group(function() {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});

require __DIR__.'/auth.php';