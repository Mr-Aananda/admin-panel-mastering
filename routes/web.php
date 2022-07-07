<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasswordChangeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'root']);

Route::prefix('dashboard')
    ->middleware('auth', 'permission.add')
    ->group(function () {
        // dashboard
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard')
            ->middleware('permission.remove'); // remove permission to access dashboard

        // Change password
        Route::prefix('change-password')
            ->middleware('permission.remove')
            ->controller(PasswordChangeController::class)
            ->group(function () {
                // show change password form
                Route::get('/', 'showChangePasswordForm')->name('password.change');

                // update password
                Route::post('/', 'updatePassword');
            });

        // users
        Route::prefix('user')
            ->name('user.')
            ->group(function () {
                // custom user routes
            });
        // user resource controller
        Route::resource('user', UserController::class);

        // roles
        Route::prefix('role')
            ->name('role.')
            ->group(function () {
                // custom role routes
            });
        // role resource controller
        Route::resource('role', RoleController::class);


        // Remove below routes
        // They are dummy routes
        Route::get('/test', function () {
        })->name('test.index');

        Route::get('/test/index/child1', function () {
        })->name('test.index.child1');

        Route::get('/test/index/child1/newchild-index', function () {
        })->name('test.index.child1.newchild-index');

        Route::get('/test/index/child1/new-child-one', function () {
        })->name('test.index.child1.newchild-one');

        Route::get('/test/index/child1/new-child-two', function () {
        })->name('test.index.child1.newchild-two');
    });


require __DIR__ . '/auth.php';
