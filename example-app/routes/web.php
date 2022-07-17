<?php

use Illuminate\Http\Request;
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
    return view('boards', [
        'heading' => 'Latest Boards'
        ,
        'boards' => 
        [
            [
                'id' => '1',
                'title' => 'title1',
                'description' => 'description1',
            ],
            [
                'id' => '2',
                'title' => 'title2',
                'description' => 'description2',
            ]
        ]
    ]); 
});
// Route::get('/hello', function () {
//     return response('<h1>hello world</h1>', 200)->header('Content-Type', 'text/html');
// });
// Route::get('/boards/{id}', function($id){
//     dd($id);
//     return response('Board: '. $id, 200);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name . ' ' . $request->city;
// });
