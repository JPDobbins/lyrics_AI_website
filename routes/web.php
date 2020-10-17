<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\newGenerationController;

use App\Http\Controllers\GenerationsController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;

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


/**route to load up welcome page at root */
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/homepage/{name}', function ($name) {
  //  return view('homepage', ['name' => $name]);
//});


// Routes to views 
Route::get('homepage/', [homepageController::class, 'loadView']);
//Route::get('/newgenerations', [newGenerationController::class, 'loadView']);
//Route::get('/friendsgenerations', [friendsGenerationsController::class, 'loadView']);
//Route::get('/messages', [messagesController::class, 'loadview']);

/**Route to generation controller
 * first argument: url link 
 * second argument: array with reference to controller
 *  - first item in array: the class of controller
 *  - second item in array: the name of the method we wish to implement
 */


/** Generation controller routes: - */ 
/** get(target url, [controller class, method name]) -> callable route 'label' */


Route::resource('generations', GenerationsController::class);
Route::resource('posts', PostsController::class);

// custom route to view that displays output of language model 
Route::post('generations/output', [GenerationsController::class, 'getOutput']) ->name('generations.output');



/** Friends controller routes: - */
//Route::get('friends', [FriendsController::class, 'index']) -> name('friends.index');
//Route::get('friends/create', [FriendsController::class, 'create']) -> name('friends.create');

Route::resource('friends', FriendsController::class);

/** Messages controller routes: - */
//Route::get('messages', [MessagesController::class, 'index']) -> name('messages.index');
//Route::get('messages/create', [MessagesController::class, 'create']) -> name('messages.create');

Route::resource('messages', MessagesController::class);

/**Posts controller routes: - */
Route::resource('posts', PostsController::class);
//Route::delete('/delete/{id}', [PostsController::class, 'destroy']) -> name('destroy');


/**Users controller routes: - */
Route::get('users', [UsersController::class, 'index']) -> name('users.index');
Route::get('users/create', [UsersController::class, 'create']) -> name('users.index');

