<?php

use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Mail;
use Telegram\Bot\Laravel\Facades\Telegram;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// Route::get('/users', [UsersController::class, 'index']);

// Route::get('/welcome', [RegisteredUserController::class, 'store']);

Route::get('test-telegram', function () {
    Telegram::sendMessage([
        'chat_id' => env('TELEGRAM_CHANNEL_ID', ''),
        'parse_mode' => 'html',
        'text' => 'Произошло тестовое событие'
    ]);
    return response()->json(['status' => 'success']);
});

//  если ошибка Call to undefined function GuzzleHttp\Promise\unwrap() in file C:\PHP_Laravel\HW\HomeWork12\vendor\irazasyed\telegram-bot-sdk\src\Http
// hot fix

// open
// vendor/irazasyed/telegram-bot-sdk/src/HttpClients/GuzzleHttpClient.php

// change

//    public function __destruct()
//     {
//         Promise\unwrap (self::$promises);
//     }
// to

//    public function __destruct()
//     {
//         Promise\Utils::unwrap (self::$promises);
//     }