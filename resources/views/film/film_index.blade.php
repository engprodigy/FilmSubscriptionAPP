@extends('layouts.master')

@section('title')
    Films
@endsection

@section('content')

      
      
      <p> &nbsp; </p>
        <div class="container">
             <!-- Content Row -->
             <p> <b>{{$message}}<b> </p> 
        <div class="row">
      @foreach($data as $row)
            <div class="col-md-6">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Film</h3>
                    </div>
                        <div class="panel-body">
                        <span class="price">{{$row->name}}</span>
                        <span class="period"></span>
                    </div>

                    
                 <ul class="list-group">
                    <li class="list-group-item"><strong>{{$row->description}}</strong> </li>
                    <li class="list-group-item"><strong>{{$row->releasedate}}</strong> </li>
                    <!--<li class="list-group-item"><a href="{{ url('/films') }}/{{$noOfFilmsCount}}" class="btn btn-danger">Drop A Comment!</a>-->
                    <li class="list-group-item"><a href="{{ url('/films/comments') }}/{{$row->film_id}}" class="btn btn-danger">Drop A Comment!</a>  
                        </li>
            
                    </ul>
                </div>
            </div>
      @endforeach
       </div>
    
    </div>
            
            


   