<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vagas;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function index(Request $request){

    	$vagas = Vagas::all();
    	
    	return view('vagas.show',compact('vagas'));
    }

    public function filtro(Request $request){

    	$vagas = Vagas::where(function($query){

	    	$area = Input::get('area');
	    	$semestre = Input::get('semestre');
	    	$carga_horaria = Input::get('horas');
	    	$auxilio = Input::get('auxilio');
	    	
		    if($auxilio){
		    	$query->orWhere('auxilio','>=',$auxilio);
		    }
		    if($semestre){
		    	$query->orWhere('semestre','>=',$semestre);
		    }
		    if($carga_horaria){
		    	$query->orWhere('carga_horaria','=',$carga_horaria);
		    }
		     if($area){
		    	$query->orWhere('area','=',$area);
		    }

		})->get();
    	
    	return view('vagas.show',compact('vagas'));
    	
    }
}
