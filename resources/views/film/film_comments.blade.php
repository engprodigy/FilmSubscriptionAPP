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
                </div>
              {!! Form::open( array('action' => array('FilmController@postcomments', $film->film_id), 'class' => 'form')) !!}

                <div class="form-group">
                        {!! Form::label('Comment', 'Comment') !!}
                       {!! Form::textarea('comment', null, 
                           array('required', 
                             'class'=>'form-control','rows' => '4', 
                          'placeholder'=>'Description')) !!}
                    </div>
                    <div class="form-group">
                       {!! Form::submit('Submit Comment!', 
                       array('class'=>'btn btn-primary')) !!}
                      </div>
                    {!! Form::close() !!} 

                    <div class="panel panel-primary text-center">
                       <p>&nbsp; </p>
                      <h2 class="panel-title"><strong>All Comments</strong> </h2>
                      <p>&nbsp; </p>
                      <ul class="list-group">
                        @foreach($comments as $comment)
                         <li class="list-group-item" style=" text-align: left; ">{{$comment['comment']}} by {{$comment['name']}} </li>
                         <!--<li class="list-group-item">{{$comment['name']}} </li>-->
                    
                         @endforeach
                        </ul>
                    </div>

            </div>
      
       </div>
    
    </div>
            
            


   