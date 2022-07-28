<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view( 'products', [ 'products' => $products ] );
    }// index


    public function create()
    {
        return view( 'create-product' );
    }

    public function store( Request $request )
    {
        $input = $request->all();

        Product::create($input);

        return 'Product Created Successfully';

    }// store


}// ProductController
