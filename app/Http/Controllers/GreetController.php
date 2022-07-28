<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function index( Request $request )
    {
        $view_data = [ 'name' => $request->get( 'name' ) ];
        return view( 'about', $view_data );
    }

}
