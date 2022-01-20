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
        <div class="col position-relative">
          <div class="card h-100">
            <a href="{{route('comic_page.show', $comic->id)}}"><img class="thumbCard position-relative" src="{{$comic->thumb}}" alt="{{$comic->type}}"></a>
            <div class="productName">
              <h4>{{$comic->series}}</h4>
            </div>

            <div class="menucard d-flex flex-column align-items-center justify-content-around position-absolute fs-3">
              <div class="editIcon">
                <a href="{{route('comic_page.edit', $comic->id)}}">
                  <i class="fas fa-edit"></i>
                </a>
              </div>
              <div class="deleteIcon">
                <form action="{{route('comic_page.destroy', $comic->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <i class="fas fa-trash"></i>





                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Launch static backdrop modal
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>



              </div>

            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="text-center py-3">
        <!-- Salvato per dopo, qunado collegherò le card -->
        <a href="{{route('comic_page.create')}}">
          <button class="loadMoreBtn btn text-uppercase py-2 px-4">upload</button>

        </a>
      </div>
    </div>
  </div>

</div>
<!-- / Series section -->


@endsection