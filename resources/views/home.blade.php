@extends('layouts.base')
@section('pageTitle', 'DC Comics')

@section('content')
<div class="container">

    <span>Current series</span>

    <div class="content">
      <!--Popolamento dinamico della sezione main-->
      @foreach ($comics as $comic)
        <div class="product-card" >
            <div class="photo-card">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            </div>
        
            <p>{{$comic['title']}}</p>
      </div>
      @endforeach
      

      <button><a href="#">Load More</a> </button>
    </div>

    
  </div>

@endsection