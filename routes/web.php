<?php

use App\Jobs\ReconcileAccount;
use App\Models\User;
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
    // logger('Hello there');
    // return 'Finished';

    // dispatch(function () {
    //     logger('Hello there');
    // });

    // dispatch(function () {
    //     logger('I have to tell you about the future');
    // })->delay(now()->addMinutes(2));

    // dispatch(new ReconcileAccount);

    $user = User::first();

    //dispatch(new ReconcileAccount($user));

    ReconcileAccount::dispatch($user);

    return 'Finished';
});
