<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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

// Route::get('hello', function() {
//     return view('hello.index');
// });
Route::get('hello',[HelloController::class, 'index']);
Route::post('hello',[HelloController::class, 'post']);
