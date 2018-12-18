<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class StoreController extends Controller
{
    public function home(){

  		$products = Product::all();
    	//dd($products);
    	return view('tienda.home', compact('products'));
    }

    public function register(){

        $products = Product::all();
        //dd($products);
        return view('tienda.register', compact('products'));
    }


    public function show($slug){
    	$producto = Product::where('slug', $slug) -> first();
    	//dd($product);
    	return view('tienda.show', compact('producto'));
    }
}
