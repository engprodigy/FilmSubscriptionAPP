<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;

use App\products;

use App\Http\Requests ;
//use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ProductsController extends Controller
{
    //
       public function index ()

       {
          $data=products::all();
          return view('product.product_index')->with('data', $data);

       }
       public function add_to_cart_meatpie ()
       //public function add_to_cart ($menu)
       // public function add_to_cart(Request $request, $menu){

       {
         // $data=products::all();
         // return view('product.product_index')->with('data', $data);
         
       //$menutype ="Whats pumping";
       //	$menutype = $request->input('menu');
        //$menutype = $menu;
        //return view('product.product_index')->with([$menutype, 'James']);
       	//return view ('product.product_add_to_cart_meatpie');
       	//return view ('product.product_index', compact ('menutype'));
        //return view ('product.product_index', ['menutype' => 'James']);
        //return view ('product.product_index');
        $product_id = 1;
        

        $cart->save();

        return Response::json($cart);


       }

}
