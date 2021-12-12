<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\PersonController;
use App\Http\Middleware\HelloMiddleware;

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

Route::get('hello/', function () {
    return view('welcome');
});

$html = <<<EOF
<html>
<head>
<title>Hello</title>
</head>
<body>
<h1>Hello World</h1>
<p>This is sample page</p>
<p>これはサンプルページです。</p>
</body>
</html>
EOF;

Route::get('hello', function() {
    return view('hello.index');
});
// Route::get('hello',[HelloController::class, 'index']);
Route::post('hello',[HelloController::class, 'post']);
Route::get('hello',[HelloController::class,'index']);
Route::get('hello/add',[HelloController::class,'add']);
Route::post('hello/add',[HelloController::class,'create']);
Route::get('hello/edit',[HelloController::class,'edit']);
Route::post('hello/edit',[HelloController::class,'update']);
Route::get('hello/del',[HelloController::class,'del']);
Route::post('hello/del',[HelloController::class,'remove']);
Route::get('hello/show',[HelloController::class,'show']);
Route::get('person', [PersonController::class, 'index']);
Route::get('person/find', [PersonController::class, 'find']);
Route::get('person/find', [PersonController::class, 'search']);
Route::get('person/edit', [PersonController::class, 'edit']);
Route::post('person/edit', [PersonController::class, 'update']);
Route::get('person/del', [PersonController::class, 'delete']);
Route::post('person/del', [PersonController::class, 'remove']);
// Route::get('board', [BoardController::class, 'index']);
Route::get('board', 'App\Http\Controllers\BoardController@index');
// Route::get('board/add', [BoardController::class, 'add']);
Route::get('board/add', 'App\Http\Controllers\BoardController@add');
// Route::post('board/add', [BoardController::class, 'create']);
Route::post('board/add', 'App\Http\Controllers\BoardController@create');