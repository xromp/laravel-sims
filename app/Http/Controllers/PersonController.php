<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Carbon\Carbon;

use App\Person;

class PersonController extends Controller
{
    //
    public function index()
    {
    	return view('person.index');
    }

    public function store()
    {

    }

    public function create(Request $request)
    {
    	$person = new Person;

    	$this->validate($request, [
    		'lname'=>'required|max:100',
    		'fname'=>'required|max:100',
    		'mname'=>'required|max:100'
		]);

    	$person->lname = $request-> input('lname');
    	$person->fname = $request-> input('fname');
    	$person->mname = $request-> input('mname');
    	$person->datestarteffectivity = Carbon::now();
    	$person->dateendeffectivity = Carbon::now();
    	$person->createdby = 1;
    	
    	return response()->json([
		    'status' => 200,
		    'data' => 'null',
		    'message' => 'Successfully saved.'
		]);
    }
}
