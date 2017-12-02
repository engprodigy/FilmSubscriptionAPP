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
      
                  

                    
                 <ul class="list-group">
                    <li class="list-group-item"><strong></strong> </li>
                    <li class="list-group-item"><strong></strong> </li>
                    
                   <!-- <li class="list-group-item"><a href="{{ url('/films/comments') }}/" class="btn btn-danger">Submit Comment</a>  
                        </li>-->
            
                    </ul>
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

            </div>
      
       </div>
    
    </div>
            
            


   