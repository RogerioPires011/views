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
 }
