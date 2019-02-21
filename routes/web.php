<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/primeiraview', function(){
    return view('minhaview');
});

Route::get('/ola', function(){
    return view('minhaview')
    ->with('nome','Rogério')
    ->with('sobrenome', 'da Silva');
});

Route::get('/ola/{nome}/{sobrenome}', function($nome , $sobrenome){
    /*return view('minhaview')
    ->with('nome',$nome)
    ->with('sobrenome', $sobrenome);
    */
    return view('minhaview', compact('nome','sobrenome'));
});
