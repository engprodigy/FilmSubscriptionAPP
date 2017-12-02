@extends('layouts.master')

@section('title')
    Films
@endsection

@section('content')

      
      
      <p> &nbsp; </p>
        <div class="container">
             <!-- Content Row -->
             <p> <b><b> </p> 
        <div class="row">
           <h1>FIND FILM BY NAME</h1>

                 <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                     @endforeach
                </ul>

            {!! Form::open( array('route' => 'film_save', 'class' => 'form')) !!}

           <div class="form-group">
            {!! Form::label('Description') !!}
             {!! Form::text('description', null, 
                  array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Enter Film Name')) !!}
                    </div>

                 

                   <div class="form-group">
                       {!! Form::submit('Search Film!', 
                       array('class'=>'btn btn-primary')) !!}
                      </div>
                    {!! Form::close() !!} 
       </div>
    
    </div>
            
            


   