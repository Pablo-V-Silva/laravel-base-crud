<header id="siteHeader ">
  <div class="blueBanner">
    <div class="list-unstyled d-flex justify-content-end align-items-center container text-light py-3">
      <div class="text-uppercase pe-3">dc power®visa®</div>
      <div class="text-uppercase">additional id sites <span><i class="fas fa-caret-down"></i></span></div>
    </div>
  </div>

  <div class="navbarContain d-flex align-items-center w-75 mx-auto">
    <a href="{{route('comics')}}"><img src="{{asset('img/dc-logo.png')}}" alt="" height="100px"></a>
    <nav class="w-100">
      <ul class="list-unstyled d-flex justify-content-around">
        @foreach ($links as $link)
        <li class="text-uppercase pe-3 {{Route::currentRouteName() == $link ? 'on' : ''}}"><a>{{$link}}</a></li>
        @endforeach
      </ul>
    </nav>
    <form action="/" class="">
      <div class="w-75 d-flex searchbar_container">
        <input type="text" name="search" id="searchHeader" placeholder="Search" class="text-end border-0 w-100">
        <button class="searchBtn"><i class="fas fa-search"></i></button>
      </div>
    </form>
  </div>

  <div class="jumbo position-relative"></div>
  <!-- / Initial Jumbo -->
</header>