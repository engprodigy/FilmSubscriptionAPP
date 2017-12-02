<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Film;

use App\Http\Requests ;

use Illuminate\Support\Facades\Redirect;
use Auth;

class FilmController extends Controller
{
    //
       public function index ()

       {
        
        if(Auth::check()){
           
    
        $data=Film::all();
        // $noOfFilmsCount = $noOfFilms["count(*)"];
          $noOfFilmsCount = Film::count();
          $pageCount = 5;
          $pageCountInput  = Input::get("5");
          $message = "";
        //$noOfFilms = DB::table('films')          /*to track no of films to know how many pages are needed*/
        // $noOfFilms = DB::select(DB::raw("SELECT * FROM films LIMIT 1 OFFSET '$pageCount'")) ; 
        // $noOfFilms = DB::select(DB::raw("SELECT * FROM films where film_id = '$pageCount'")) ; 
                    // ->get();

          return view('film.film_index', compact('data','noOfFilmsCount','message'));
          }
         else{
          return redirect('/login');
         }

       }

       public function shownextpage ($pageNumber)

       {
          $film = Film::find($id);
          //$data=Film::all();
          $noOfFilms = DB::table('films')          //to track no of films to know how many pages are needed
                     ->select(DB::raw('count(*)'))  
                     ->get();
          
          return view('film.film_index', compact('data','noOfFilms'));

       }
       public function getfilmbyslugname($name)

       {
        
        $film = Film::where('description', '=' , $name)->get();
       
       // $film = DB::select(DB::raw("SELECT * FROM films where film_id = '$film_id'")) ; 
        //echo $film;
        
       
        return view('film.film_viewbyslugname', compact('film'));
        //return view('film.film_viewbyslugname')->with('film', $film);


       }

       public function comments($film_id)

       {
        
        $film = Film::find($film_id);
       // $film = Film::where('film_id', '=' , $film_id)->get();
       
        // $film = DB::select(DB::raw("SELECT * FROM films where film_id = '$film_id'")) ; 
       // echo $film;
        
        //var_dump($film);
        return view('film.film_comments', compact('film'));
        //return view('film.film_viewbyslugname')->with('film', $film);


       }

       public function getfilmbyname ()

       {
          
          
         return view('film.film_viewbyname');


       }

       public function submitform ()

       {
          $film = Film::find($id);
          //$data=Film::all();
          $noOfFilms = DB::table('films')          //to track no of films to know how many pages are needed
                     ->select(DB::raw('count(*)'))  
                     ->get();
          
          return view('film.film_index', compact('data','noOfFilms'));

       }

}