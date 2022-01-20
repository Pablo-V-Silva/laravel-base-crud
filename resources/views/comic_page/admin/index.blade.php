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
        <!-- Salvato per dopo, qunado collegherò le card -->
        <a href="{{route('comic_page.create')}}">
          <button class="loadMoreBtn text-uppercase py-2 px-4">Upload</button>
        </a>
      </div>
    </div>
  </div>

</div>
<!-- / Series section -->


@endsection