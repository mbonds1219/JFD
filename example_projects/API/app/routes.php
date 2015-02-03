<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('home');
});

Route::get('register', function () {
    return View::make('register');
});

Route::get('login', function () {
    return View::make('login');
});

Route::group(['prefix' => 'api'], function () {
    Route::resource(
        'session',
        'App\Controllers\SessionController',
        ['only' => ['index', 'store', 'destroy']]
    );

    Route::resource(
        'register',
        'App\Controllers\RegistrationController',
        ['only' => ['index','store']]
    );

    Route::group(['before' => 'auth'], function () {

        Route::resource(
            'student',
            'App\Controllers\StudentController',
            ['only' => ['index', 'store', 'show', 'update']]
        );

        Route::resource(
            'project.solution',
            'App\Controllers\SolutionsController'
        );

        Route::resource(
            'project',
            'App\Controllers\ProjectController'
        );

        Route::resource(
            'week',
            'App\Controllers\WeeksController'
        );
        Route::resource(
            'week.project',
            'App\Controllers\ProjectController',
            ['only' => ['index', 'create', 'store', 'show', 'update']]
        );
    });
});
