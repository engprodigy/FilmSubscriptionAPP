@extends('layouts.master')

@section('title')
    Add New Film
@endsection

@section('content')
      
      <p> &nbsp; </p>
        <div class="container">
             <!-- Content Row -->
    
        <div class="row">
           <h1>ADD NEW FILM</h1>

                 <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                     @endforeach
                </ul>

            {!! Form::model($film, array('route' => 'film_save', 'class' => 'form')) !!}
            
            <div class="form-group">
            {!! Form::label('Name') !!}
             {!! Form::text('name', null, 
                  array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Name')) !!}
                    </div>

           <div class="form-group">
            {!! Form::label('Description') !!}
             {!! Form::text('description', null, 
                  array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Description')) !!}
                    </div>

                  <div class="form-group">
                 {!! Form::label('Release Date') !!}
                    {!! Form::text('releasedate', null, 
                     array('required', 
                       'class'=>'form-control', 
                     'placeholder'=>'Release Date')) !!}
                    </div>


                   <div class="form-group">
                       {!! Form::submit('Add Film!', 
                       array('class'=>'btn btn-primary')) !!}
                      </div>
                    {!! Form::close() !!} 
       </div>
    
    </div>
            
    
