<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use App\Http\Controllers\HomeController;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Auth::routes();

        Route::group(
            [
                'prefix' => 'dashboard',
                'middleware' => ['auth'],
            ],

            function () {
                /** Start Route Users **/
                Route::resource('users', UserController::class);

                // Route::get('/', function ()
                // {
                //     return 'index';# code...
                // })->name('index');

                Route::get('/', [HomeController::class, 'index'])->name('index');

                /** End Route Users **/
                /** Start Route Roles **/
                Route::resource('roles', RoleController::class)->except(['show']);
                /** End Route Roles **/
            }

        );
    }
);
