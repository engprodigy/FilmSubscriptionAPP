@extends('layouts.master')

@section('title')
    Films
@endsection

@section('content')

      
      
       <div class="container">
             <!-- Content Row -->
            
            <p>&nbsp </p> 
            <p>&nbsp </p> 
        <div class="row">
    
            <div class="col-md-6">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Film</h3>
                    </div>
                    <div class="panel-body">
                        <span class="price">{{$film[0]["name"]}}</span>
                        <span class="period"></span>
                    </div>
                    
                 <ul class="list-group">
                    <li class="list-group-item"><strong>{{$film[0]["description"]}}</strong> </li>
                    <li class="list-group-item"><strong>{{$film[0]["releasedate"]}}</strong> </li>
                    
            
                    </ul>
                </div>
            </div>
      
       </div>
    
    </div>

            
            


   