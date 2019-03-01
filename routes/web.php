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
   
    return view('minhaview', compact('nome','sobrenome'));
});

Route::get('/email/{email}', function($email){
	if (View::exists('email')) 
    return view('email', compact('email'));
     else  
     	return view('erro');
    
});

Route::get('/produto','ProdutoControlador@listar');

Route::get('/secaoproduto/{palavra}','ProdutoControlador@secaoproduto');

Route::get('/mostraropcoes','ProdutoControlador@mostraropcoes');

Route::get('/opcoes/{opcao}', 'ProdutoControlador@opcoes');

Route::get('/loop/for/{n}','ProdutoControlador@loopfor');

Route::get('/foreach','ProdutoControlador@foreach');
