<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    public function listar(){
    	$produto=[
         "Notebook Asus 17GB",
         "Mouse e teclado Micro USB",
         "Monitor 21-samsung",
         "Impressora HP",
         "Disco SSD 512 GB"
    	]; 
    	return view('produto',compact('produto'));

    }
    public function secaoproduto ($palavra){
        return view('secaoproduto' , compact('palavra')); 
    }

    public function mostraropcoes (){
        return view('mostraopcoes');
    }

    public function opcoes ($opcao){
        return view('opcoes', compact('opcao'));
    }

    public function loopFor($n){
    	return view('loop_for', compact('n'));
    }

    public function foreach(){
    	$produto=[
         ["id"=> 1, "nome"=>"computador"],
         ["id"=> 2, "nome"=>"mouse"],
         ["id"=> 3, "nome"=>"impressora"],
         ["id"=> 4, "nome"=>"monitor"],
         ["id"=> 5, "nome"=>"teclado"],
    	];
    	return view('foreach', compact('produto'));
    }
 }
