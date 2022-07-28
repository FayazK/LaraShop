<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{

    /**
     * Greet User
     *
     * @param Request $request
     * @return void
     */
    public function index( Request $request )
    {
        $view_data = [ 'name' => $request->get( 'name' ) ];
        return view( 'about', $view_data );
    }

}
