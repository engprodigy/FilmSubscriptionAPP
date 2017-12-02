@extends('layouts.master')

@section('title')
    Films
@endsection

@section('content')

      
      
      <p> &nbsp; </p>
        <div class="container">
             <!-- Content Row -->
        <div class="row">
      
            <div class="col-md-6">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Dropping Comments for Film "{{$film->name}}"</h3>
                    </div>
      
                  <div class="panel-body">
                        <span class="price"><b>Commenting As {{ Auth::user()->name }} </b></span>
                        <span class="period"></span>
                    </div>

                    
                 <ul class="list-group">
                    <li class="list-group-item"><strong></strong> </li>
                    <li class="list-group-item"><strong></strong> </li>
                    
                    <li class="list-group-item"><a href="{{ url('/films/comments') }}/" class="btn btn-danger">Submit Comment</a>  
                        </li>
            
                    </ul>
                </div>
            </div>
      
       </div>
    
    </div>
            
            


   