@extends('layouts.app')
@section('content')

<div class="currentSeries position-relative">
  <div class="titleBannerSeries container">
    <div class="title series">
      <h2 class="text-uppercase pt-1">current series</h2>
    </div>
  </div>


  <div class="productsContainer">
    <div class="container ">
      <div class="row row-cols-6 pt-5">

        @foreach($comics as $key => $comic)
        <div class="col">
          <div class="card h-100">
            <a href="{{route('comic', $comic->id)}}"><img class="" src="{{$comic->thumb}}" alt="{{$comic->type}}"></a>
            <div class="productName">
              <h4>{{$comic['series']}}</h4>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="text-center py-3">
        <button class="loadMoreBtn text-uppercase py-2 px-4">load more</button>
      </div>
    </div>
  </div>

</div>
<!-- / Series section -->

<!-- <div class="merch">
  <div class="container">
    <div class="row row-cols-5 py-4">
      @foreach ($merch as $product)
      <div class="col d-flex justify content around align-items-center">
        <img src="{{$product['image']}}" alt="" height="80px">
        <div>{{$product['title']}}</div>
      </div>
      @endforeach
    </div>
  </div>
</div>  -->
<!-- /Merchandising -->

@endsection