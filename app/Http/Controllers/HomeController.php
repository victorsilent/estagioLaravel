<?php

namespace App\Http\Controllers;

use Request;
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

    	$query = Vagas::query();

	    	$area = Request::get('area');
	    	$semestre = Request::get('semestre');
	    	$carga_horaria = Request::get('horas');
	    	$auxilio = Request::get('auxilio');
	    	
		    if($auxilio){
		    	$query->where('auxilio','>=',$auxilio);
		    }
		    if($semestre){
		    	$query->where('semestre','>=',$semestre);
		    }
		    
		    if($carga_horaria){
		    	$query->where('carga_horaria','=',$carga_horaria);
		    }
		     if($area){
		    	$query->where('area','=',$area);
		    }
		$vagas = $query->get();
    	
    	return view('vagas.show',compact('vagas'));
    	
    }
}
