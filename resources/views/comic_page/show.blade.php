@extends('layouts.app')
@section('content')

<div class="blueBanner comicImage position-relative">
  <div class="container">

    <img class="comicThumb" src="{{$comic->thumb}}" alt="" height="350px">
  </div>
</div>
<!-- /Image thumb -->

<div class="comicInfoContain">
  <div class="container">
    <div class="row infoComic pt-5">
      <div class="col-8">
        <h3 class="text-uppercase fs-2">{{ $comic->title }} bubba</h3>
        <div class="row backPrice my-4 mx-1">
          <div class="col-8 d-flex justify-content-between py-4">
            <div class="comicValue">
              U.S Price : <span class="text-light">{{$comic->price}}</span>
            </div>

            <div class="disponibility text-uppercase">
              available
            </div>

          </div>
          <div class="col-4">
            <select name="available" id="available" class="w-100 text-center available">
              <option value="0" class="text-capitalize">check availibilty</option>
            </select>
          </div>
        </div>
        <p>{{$comic->description}}</p>

      </div>
      <div class="col-4 prodpiazzamento text-end text-uppercase">
        <h5 class="">advertisement</h5>
        <img src="{{asset('img/prodpiazzamento.jpg')}}" alt="" class="w-100 imgprodp">
      </div>
    </div>
  </div>

</div>
</div>
<!-- /Comic info -->

@endsection