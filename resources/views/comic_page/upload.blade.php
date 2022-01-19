@extends('layouts.app')

@section('content')
<div class="bg-create">
  <div class="container pt-3 pb-4  mt-2 mb-3 bg-primary rounded text-light">
    <form action="{{route('postComic')}}" method="post">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label fs-3">Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label fs-3">Description</label>
        <input type="text" class="form-control" id="description" name="description">
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label fs-3">Thumb</label>
        <input type="text" class="form-control" id="thumb" name="thumb">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label fs-3">Price</label>
        <input type="text" class="form-control" id="price" name="price">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label fs-3">Series</label>
        <input type="text" class="form-control" id="series" name="series">
      </div>

      <div class="mb-3">
        <label for="date" class="form-label fs-3">Data</label>
        <input type="text" class="form-control" id="date" name="date">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label fs-3">Types</label>
        <input type="text" class="form-control" id="type" name="type">
      </div>



      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

@endsection