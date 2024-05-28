<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\SettingsController;

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
    return view('index');
});
Route::get('/register', [AuthController::class, 'register']);
Route::post('/registered', [AuthController::class, 'registered']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logined', [AuthController::class, 'logined']);



Route::middleware('auth')->group(function () {

    Route::get('/file-download/{url}', [DownloadController::class, 'index'])->name('file.download.index');

    // Route::get('/coba', [HomeController::class, 'coba']);
    // Route::get('/posting', [HomeController::class, 'post']);
    // Route::post('/save-post', [HomeController::class, 'savePost']);
    // Route::post('/addalbum', [HomeController::class, 'addalbum']);
    // Route::get('/home', [HomeController::class, 'home']);
    // Route::get('/getDataHome', [HomeController::class, 'getdata']);
    // Route::get('/detail_foto/{id}', [HomeController::class, 'detailfoto']);
    // Route::get('/explore', [PageController::class, 'explore']);
    // Route::get('/page-profile', [HomeController::class, 'profile']);
    // Route::get('/editprofile', [HomeController::class, 'editprofile']);
    // Route::post('/saveprofile', [HomeController::class, 'saveprofile']);
    Route::get('/logout', [AuthController::class, 'logout']);


    Route::resource('post', PostController::class);
    Route::get('/post', [PostController::class, 'index'])->name('post');
    Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::resource('user', UserController::class);
    Route::resource('explore', KategoriController::class);
     Route::get('/explore/{id}', [KategoriController::class, 'show'])->name('explore');
    // Route::get('/explore/{}', [KategoriController::class, 'show']);
    Route::resource('album', AlbumController::class);
    Route::post('/updatealbum/{id}', [AlbumController::class,'update']);
    Route::post('/removefromalbum/{id}', [AlbumController::class,'removeFromAlbum'])->name('removealbum');

    //following
    // Route::get('profile/following', [FollowingController::class,'following'])->name('profile.following');
    // Route::post('profile/{user}', [FollowingController::class,'store'])->name('following.store');
    // Route::get('profile/follower', [FollowingController::class,'follower'])->name('profile.follower');
    Route::post('users/{user}/follow',[FollowingController::class,'follow'])->name('users.follow');
    Route::post('users/{user}/unfollow',[FollowingController::class,'unfollow'])->name('users.unfollow');
    Route::get('/settings/index',[SettingsController::class,'index'])->name('settings.index');
    Route::post('/updatepassword',[SettingsController::class,'updatepassword'])->name('updatepassword');
});

