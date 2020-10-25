<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home($value='')
    {
    	return view ('welcome');
    }
    public function a($value='')
    {
    	return 'Hellp / Route';
    }
	public function testing($value='')
    {
    	return view ('testing');
    }
    public function service($value='')
    {
        //string
        //return view('service',['name' => 'Hnin Wai Oo']);

        //array of arrays
        $students=array
        (
            array('name'=>'mgmg','age'=>26),
            array('name'=>'susu','age'=>23)
        );
        //dd($students);//var_dump();die();

        //may be array of object
        // $students=array
        // (
        //     {'name'=>'mgmg','age'=>26},
        //     {'name'=>'susu','age'=>23}
        // );

        //may be array of objects
        return view ('service',['students'=>$students]);
    }

}
