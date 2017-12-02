<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Film;

use App\Http\Requests ;
//use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class FormController extends Controller
{
    //
       public function index ()

       {
        
       $film = new Film;
          
            return view('form.filmform', ['film' => $film ]);

       }

       public function submitform (Request $request)

       {
          
          $film = new \App\Film;

          // populate the model with the form data
          $film->name = $request->name;
          $film->description = $request->description;
          $film->releasedate = $request->releasedate;
          $film->comment = "dayoabiona@gmail.com";
          $film->rating = "Dayo Abiona";
          $film->ticketprice = "07038865067";
          $film->country = "dayoabiona@gmail.com";
          $film->genre = "Dayo Abiona";
          $film->photo = "07038865067";

          // save the model to create a new object in the database
          if (!$film->save()) {
                   
                   return redirect()
                  ->action('FormController@index')
                   ->with('message', 'error creating film');
                  
                           }

          $data=Film::all();
          $noOfFilmsCount = Film::count();
          $pageCount = 5;
          $pageCountInput  = Input::get("5");
          $message = "Film created succesfully";
          return view('film.film_index', compact('data','noOfFilmsCount','message'));
       }

}