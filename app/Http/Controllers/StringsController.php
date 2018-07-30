<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StringsController extends Controller
{
    public function paramai($original){
    	$modificada = strtoupper($original);
    	return view("ExibirMaiusculo", ["original" => $original, "modificada" => $modificada]);    
	}
}
