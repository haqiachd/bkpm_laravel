<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\DetailProfileController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', [ManagementUserController::class, 'index']);
Route::resource('/user', ManagementUserController::class);

// Route::get('/home', function(){
//     return view('home');
// });

Route::get('/home', [ManagementUserController::class, 'index']);

Route::get('/app', function(){
    return view('app');
});

// // route dasar
// Route::get('/foo', function () {
//     return 'hello_world';
// });

// // route dengan parameter
// Route::get('user{$id}', function ($id) {
//     return 'User ' + $id;
// });

// // route dengan banyak parameter
// Route::get(
//     'post/{post}/comment/{comment}',
//     function ($post, $comment) {
//         return 'content ' + $post + ' ' + $comment;
//     }
// );

// // route controller
// Route::get('/users', 'UserController@login');
// Route::get('/user2', [UserController::class, 'login']);

// // macam-macam http method
// Route::get($url, $callback);
// Route::post($url, $callback);
// Route::put($url, $callback);
// Route::delete($url, $callback);
// Route::patch($url, $callback);
// Route::options($url, $callback);

// // route dengan match
// Route::match(['get', 'post'], '/', function () {
//     // 
// });

// // route dengan any
// Route::any('/', function () {
//     //
// });

// // redirect route
// Route::redirect('/here', '/there');
// // redirect route dengan feedback
// Route::redirect('/here', '/there', 301);
// // route dengan permanent redirect
// Route::permanentRedirect('/here', '/there');

// // route view
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Firman']);

// // route dengan parameter optional
// Route::get('users/{name?}', function ($name = null) {
//     return $name;
// });
// Route::get('users/{name?}', function ($name = 'Mudy') {
//     return $name;
// });

// // regular expresssion
// Route::get('user/{name}', function ($name) {
//     // 
// })->where('name', '[A-Za-z]+');
// Route::get('user/{id}', function ($id) {
//     // 
// })->where('id', '[0-9]+');
// Route::get('user/{id}', function ($id) {
//     // 
// })->where(['name' => '[A-Za-z]+', 'id' => '[0-9]+']);

// // global constraint
// Route::get('user/{id}', function ($id) {
//     //
// });

// // encoded forward slashes
// Route::get('search/{search}', function ($search) {
//     return $search;
// })->where('search', '.*');

// // definied route
// Route::get('user/profile', function () {
//     //
// })->name('profile');
// Route::get('user/profile', 'UserController@login')->where('profile');

// // generating url
// $url = route('profile');

// // generating redirect
// // return redirect()->route('profile');

// Route::get('user/{id}/profile', function ($id) {
//     // 
// })->name('profile');
// $url = route('id', ['id' => $id]);

// Route::get('user/{id}/profile', function ($id) {
//     // 
// })->name('profile');
// $url = route('profile', ['id' => $id, 'photo' => $photo]);

// // middleware
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         //
//     });
//     Route::get('/users/profile', function () {
//         //
//     });
// });

// // namespace
// Route::namespace('Admin')->group(function () {
//     //
// });

// // subdomain routing
// Route::domain('{action}.myapp.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });

// // route prefixer
// Route::prefix('admin')->group(function () {
//     Route::get('users', function () {
//         //
//     });
// });

// // route name prefixer
// Route::name('admin.')->group(function () {
//     Route::get('user', function () {
//         //
//     })->name('users');
// });
