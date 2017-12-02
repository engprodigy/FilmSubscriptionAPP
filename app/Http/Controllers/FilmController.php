<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Film;
use App\Comment;

use App\Http\Requests ;
use Illuminate\Support\Facades\Validator; 

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

       public function postcomments($film_id)

       {
          //$film_id =5;
         var_dump($film_id);
           $rules = array(
             
              'comment' => 'required',
           );
             $validator = Validator::make(Input::all(), $rules);
             if ($validator->fails()) {
                 return Redirect::to('/films/comments/'.$film_id)
                         ->withErrors($validator)
                     ->withInput(Input::except('password'));
                            } 
                          else {
                  // store
                  $comment = new Comment; 
                  $comment->name = Auth::user()->name;                                      
                  $comment->post_id = $film_id;
                  //$comment->name = Input::get('name');
                  $comment->comment = Input::get('comment');
                  $comment->save();
                        // redirect
                 return Redirect::to('/films/comments/'.$film_id);
               // $film = Film::find($film_id);
               // return view('film.film_comments', compact('film'));

             }
        
            //$film = Film::find($film_id);
             //  return view('film.film_comments', compact('film'));

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