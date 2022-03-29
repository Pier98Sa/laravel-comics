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
    
@endsection