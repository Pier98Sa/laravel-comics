@extends('layouts.base')
@section('pageTitle', 'DC - '. $fumetto['title'])

@section('content')
<div class="comic">
    <div class="container">
        <div class="comic-cover">
            <span class="cover-text up">Comic Book</span>
            <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}">
            <span class="cover-text down"><a href="#">View Gallery</a></span>
        </div>
        
    </div>
</div>

<div class="main-page container">
    <div class="details-comic">
        <h1>{{$fumetto['title']}}</h1>
        <div class="price-comic">
            <div class="available">
                <span> <span class="transparent">U.S. Price: </span>{{$fumetto['price']}}</span>
                <span class="transparent upper">Available</span>
            </div>
            
            <div class="check-available">
                <span>Check Availability </span>
            </div>
            
        </div>

        <div class="description-comic">
            <p>{{$fumetto['description']}}</p>
        </div>

    </div>

    <div class="ad">
        <h3>Advertisement</h3>
        <a href="#"><img src="{{asset('img/adv-copia.jpg')}}" alt="adv"></a>
    </div>
</div>

<div class="info-comic">

    <div class="container">

        <div class="talent">
            <h2>Talent</h2>

            <div class="art">
                <h3>Art by:</h3>
                <p>
                    @foreach($fumetto['artists'] as $key => $artist)
                    
                        @if ($key == array_key_last($fumetto['artists']) )
                        <span class="element-list" >{{$artist}}</span>
                        @else
                        <span class="element-list" >{{$artist}}</span>,   
                        @endif
                        
                    @endforeach
                </p>
                
                    
                    
            </div>

            <div class="written">
                <h3>Written by:</h3>
                <p>
                    @foreach($fumetto['writers'] as $key => $writer)
                    
                        @if ($key == array_key_last($fumetto['writers']) )
                            <span class="element-list" >{{$writer }}</span>
                        @else
                            <span class="element-list" >{{$writer}}</span>, 
                        @endif
                        
                    @endforeach
                </p>
                
            </div>
        </div>

        <div class="specs">
            <h2>Specs</h2>
            <div class="series">
                <h4>Series:</h4>
                <span>{{$fumetto['series']}}</span>
            </div>
            <div class="price">
                <h4>U.S. Price:</h4>
                <span>{{$fumetto['price']}}</span>
            </div>
            <div class="sale">
                <h4>On Sale Date:</h4>
                <span>{{ \Carbon\Carbon::parse($fumetto['sale_date'])->format('M d Y')}}</span>
                
            </div>
        </div>
    </div>

    
</div>

<div class="CTA ">
    <div class="container">
        <div class="cta-card">
            <h4>Digital Comics</h4>
            <img src="{{asset('/img/digital-comics.png')}}" alt="">
        </div>

        <div class="cta-card">
            <h4>Shop DC</h4>
            <img src="{{asset('/img/shop-dc.png')}}" alt="">
        </div>

        <div class="cta-card">
            <h4>Comic Shop Locator</h4>
            <img src="{{asset('/img/comic-shop-locator.png')}}" alt="">
        </div>

        <div class="cta-card">
            <h4>Subscriptions</h4>
            <img src="{{asset('/img/subscription.png')}}" alt="">
        </div>
    </div>
        
    
</div>


    
@endsection