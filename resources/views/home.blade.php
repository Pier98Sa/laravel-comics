@extends('layouts.base')
@section('pageTitle', 'DC Comics')

@section('content')
<div class="comics-main">
  <div class="container">
    <span class="label-series">Current series</span>

    <div class="content">
      <!--Popolamento dinamico della sezione main-->
      @foreach ($comics as $key => $comic)
        <div class="product-card" >
          <div class="photo-card">
            <a href="/comics/{{$key}}"><img src="{{$comic['thumb']}}" alt="{{$comic['title']}}"></a>
          </div>

          <p>{{$comic['title']}}</p>
        </div>
      @endforeach
      

      <button><a href="#">Load More</a> </button>
    </div>

    
  </div>
</div>


@endsection

@section('product')
  @include('partials.product')
@endsection