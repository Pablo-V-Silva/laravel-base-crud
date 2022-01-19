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
        <h3 class="text-uppercase fs-2">{{ $comic->title }}</h3>
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


  <!-- <div class="authors">
    <div class="container py-5">

    <div class="row row-cols-2 g-5">
      <div class="col">
        <h4 class="pb-4 bb-3">Talent</h4>
        <div class="row art bb-3 py-3">
          <div class="col-4">Art by :</div>
          <div class="col-8"> 
            @foreach($comic->artists'] as $artist)
            <span class="text-primary">{{$artist}}</span>
            @if (!$loop->last)
            <span>,</span>
            @endif
            @endforeach

          </div>
        </div>  
        <div class="scripting row py-3 bb-3">
        <div class="col-4">
          Written by :
        </div>
        <div class="col-8"> 
          @foreach($comic['writers'] as $writer)
          <span class="text-primary">{{$writer}}</span>
          @if (!$loop->last)
          <span>,</span>
          @endif
          @endforeach
        </div>
        </div>
      </div>

      <div class="col">
        <h4 class="pb-4 bb-3">Specs</h4>
        <div class="written row bb-3 py-3">
          <div class="col-4">Series :</div>
            <div class="col-8 text-uppercase text-primary"> 
          
              {{$comic['series']}}
          
            </div>

          </div>
        <div class="price row py-3 bb-3">
          <div class="col-4">U.S. Price :</div>
            <div class="col-8 text-uppercase "> 
          
              {{$comic['price']}}
          
            </div>
          </div>
      
        <div class="sale-date row bb-3 py-3">
          <div class="col-4 text-capitalize">on sale date :</div>

          <div class="col-8 text-uppercase"> 
              {{$comic['sale_date']}}
          
            </div>
          </div>
        </div>
      </div>
    
  </div> -->
</div>
</div>
<!-- /Comic info -->

@endsection