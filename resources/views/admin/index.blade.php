@extends('layouts.app')
@section('content')

<div class="currentSeries position-relative">
  <div class="titleBannerSeries container">
    <div class="title series">
      <h2 class="text-uppercase pt-1">current series</h2>
    </div>
  </div>


  <div class="productsContainer position-relative" id="change_landing">

    @if (session('message'))
    <div class="alert alert-success my_alert position-absolute">
      {{session('message')}}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger my_alert position-absolute">
      {{session('error')}}
    </div>
    @endif

    <div class="container ">
      <div class="row row-cols-6 pt-5">

        @foreach($comics as $key => $comic)
        <div class="col position-relative">
          <div class="card h-100">
            <a href="{{route('admin.show', $comic->id)}}"><img class="thumbCard position-relative" src="{{$comic->thumb}}" alt="{{$comic->type}}"></a>
            <div class="productName">
              <h4>{{$comic->series}}</h4>
            </div>

            <div class="menucard d-flex flex-column align-items-center justify-content-around position-absolute fs-3">
              <div class="editIcon">
                <a href="{{route('admin.edit', $comic->id)}}">
                  <i class="fas fa-edit"></i>
                </a>
              </div>
              <div class="deleteIcon">

                <!-- Button trigger modal -->
                <button class="deleteIcon delBtn" data-bs-toggle="modal" data-bs-target="#delete{{$comic->id}}">
                  <i class="fas fa-trash"></i>
                </button>

                <!-- Modal -->




                <!-- New -->
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $comic->id }}">
                  <i class="fas fa-trash"></i>

                </button>
 -->
                <!-- Modal -->
                <!-- <div class="modal fade" id="delete{{ $comic->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-{{ $comic->id }}" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Delete Comic {{ $comic->title }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p> Are u sure buddy?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{ route('admin.destroy', $comic->id) }}" method="post">
                          @csrf
                          @method('DELETE')

                          <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i>

                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="delete{{$comic->id}}" tabindex="-1" aria-labelledby="modal-{{$comic->id}}" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Delete {{$comic->title}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Salvando i cambiamenti non potrai pi?? avere accesso a queste informazioni! Salvare comunque?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{route('admin.destroy', $comic->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="deleteIcon delBtn">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="text-center py-3">
        <!-- Salvato per dopo, qunado collegher?? le card -->
        <a href="{{route('admin.create')}}">
          <button class="loadMoreBtn btn text-uppercase py-2 px-4">upload</button>

        </a>
      </div>
    </div>
  </div>

</div>
<!-- / Series section -->

<script>
  let alert = document.querySelector('.my_alert');
  let landing = document.getElementById('change_landing');

  if (alert != null) {
    setTimeout(() => {
      alert.style.display = 'none';
    }, 2 * 1000);

    landing.scrollIntoView();
  }
</script>


@endsection