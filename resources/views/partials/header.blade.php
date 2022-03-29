<header>
  <div class="header-top">
    <div class="container">
      <span>DC Power&trade; Visa&reg; </span>
      <span>Additional Dc Sites &#9660;</span>
    </div>
    
  </div>
  <div class="header-bottom">
    <nav class="container">
      <!--nav sx-->
      <div class="nav-left">
        <img src="{{asset('img/dc-logo.png')}}" alt="">
      </div>
  
      <!--nav dx-->
      <div class="nav-right">
        <ul>
          <li><a href="#">Characters</a></li>
          <li ><a href="{{route('comics')}}" class="
            @if (Request::route()->getName() == 'comics' || Request::route()->getName() == 'fumetto')
                active
            @endif
            ">Comics</a></li>
          <li><a href="#">Movies</a></li>
          <li><a href="{{route('tv')}}" class="{{ Request::route()->getName() == 'tv' ? 'active':'' }}">Tv</a></li>
          <li><a href="#">Games</a></li>
          <li><a href="#">Collectibles</a></li>
          <li><a href="#">Videos</a></li>
          <li><a href="#">Fans</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Shop</a></li>
        </ul>

        <div class="input-box">
          <input type="search" name="search" placeholder="Search">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        
      </div>
  
    </nav>
  </div>
  
</header>