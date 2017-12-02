<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function product (){

        $people =['Taylor', 'Mat', 'Jeffrey'];

        return view ('product.index', compact ('people'));

    }//
}
