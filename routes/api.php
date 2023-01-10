<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TimeDeffController;
use App\Http\Controllers\Api\RatingController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['namespace'=>'App\Http\Controllers\Api'], function()
{
	Route::post('register', 'PassportAuthController@register')->middleware(['guest:api']);
	Route::post('login', 'PassportAuthController@login')->middleware(['guest:api']);
	/*
	* Auth routes
	*/
	Route::group(['middleware'=> 'auth:api'], function () {
		Route::get('logout', 'UserController@logout');
	    Route::get('profile-info', 'UserController@userInfo');
	});
});

Route::match(['get', 'post'],"diff", [TimeDeffController::class, 'timeDiff'])->name('diff');

/*
==================================================================================================
                                    Rating API Controller ROUTES
==================================================================================================
*/ /*createby ashish 03-jan-2023 */
Route::match(['get', 'post'],"add_rating", [RatingController::class, 'addRating'])->name('add_rating');
#Route::match(['get', 'post'],"update-rating", [RatingController::class, 'updateRating'])->name('update-rating');
Route::match(['get', 'post'],"show_rating_popup", [RatingController::class, 'showRatingPopup'])->name('show_rating_popup');
