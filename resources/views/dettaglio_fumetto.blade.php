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
        <div class="price-comic">
            <div class="available">
                <span> <span class="transparent">U.S. Price: </span>$19.99</span>
                <span class="transparent upper">Available</span>
            </div>
            
            <div class="check-available">
                <span>Check Availability </span>
            </div>
            
        </div>

        <div class="description-comic">
            <p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>
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
                <p>José Luis García-López, Clay Mann, Rafael Albuquerque, Patrick Gleason, Dan Jurgens, Joe Shuster, Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee</p>
            </div>

            <div class="written">
                <h3>Written by:</h3>
                <p>Brad Meltzer, Tom King, Scott Snyder, Geoff Johns, Brian Michael Bendis, Paul Dini, Louise Simonson, Richard Donner, Marv Wolfman, Peter J. Tomasi, Dan Jurgens, Jerry Siegel, Paul Levitz</p>
            </div>
        </div>

        <div class="specs">
            <h2>Specs</h2>
            <div class="series">
                <h4>Series:</h4>
                <span>ACTION COMICS</span>
            </div>
            <div class="price">
                <h4>U.S. Price:</h4>
                <span>$19.99</span>
            </div>
            <div class="sale">
                <h4>On Sale Date:</h4>
                <span>Oct 02 2018</span>
            </div>
        </div>
    </div>

</div>

    
@endsection