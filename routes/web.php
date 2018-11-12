<?php

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
    
    'pageTitle' = $Home Page,
    return view('home'[
        'pageTitle' => $title,]);
});


Route::get('/home/{id?}', function () {

    $title = 'Home page' . $id;

    return view('home2');
    'pageTitle => $title,
    ]);
});


Route::any('/addnew', function)
//

Route::get('/', function() {

    $todos
}


Route::get('/update/{id}', function($id) {
    $todo = App\Todo::find($id);

    if ($todo->is_done == true){
        $todo->is_done == false;
} else {
    $todo->is_done = true;
}

$todo->save();
return redirect('/');
});


Route::get('/', function () {
    return view('home');
});