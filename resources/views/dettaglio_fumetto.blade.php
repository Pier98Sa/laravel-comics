@extends('layouts.base')
@section('pageTitle', 'DC - '. $fumetto['title'])

@section('content')
<div class="comic">
    <div class="container">
        <div class="comic-cover">
            <span class="cover-text up">Comic Book</span>
            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
            <span class="cover-text down"><a href="#">View Gallery</a></span>
        </div>
        
    </div>
</div>

<div class="main-page container">
    <div class="details-comic">
        <h1>Action Comics #1000: The Deluxe Edition</h1>
        <div class="prize-comic">
            <span>U.S. Price: $19.99</span>
            <span>Available</span>
            <span>Check Availability</span>
        </div>

        <div class="description-comic">
            <p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>
        </div>

    </div>

    <div class="ad">
        <img src="{{asset('img/adv.jpg')}}" alt="adv">
    </div>
</div>

<div>
    
</div>

    
@endsection