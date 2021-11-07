<?php

use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Mail\OrderShipped;
use App\Models\Comment;
use App\Models\File;
use App\Models\Image;
use App\Models\Mechanic;
use App\Models\Owner;
use App\Models\Post;
use App\Models\Project;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
// use App\Mail\;
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
   
});














































Route::get('/files',[FileController::class,'index']);
Route::post('/files-view',[FileController::class,'store'])->name('file-upload');

Route::get('/file-view', function () {
    $file = File::find(3);
    return view('image', compact('file'));
});