<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
 * get all: GET /api/users
 * create a user: POST /api/users
 * get a single user: GET /api/users/{id}
 * update a user: PUT/PATCH /api/users/{id}
 * delete a user: delete /api/users/{id}
 *
 */

Route::resource('users',UserController::class );

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
