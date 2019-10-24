@extends('main')

@section('styles')

#content {
  background: linear-gradient(rgba(22, 22, 22, 0.1), rgba(22, 22, 22, 1)), url('storage/stock/main_bg.jpg');
  /* background: url('storage/stock/main_bg.jpg'); */
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
}

#child-content {
  color: white;
  height: 100%;
}

#main-title {
  padding-top: 220px;
}

.full-height {
  {{-- height: 100%; --}}
}

.btn-xl {
  font-size: 25px;
}

@endsection

@section('content')

<div class="container h-100">

  <div class="row h-100">
  
    <div class="col-5 offset-1 text-center" id="main-title">
      <h1>
        ¡Animate!
      </h1>
      <h3>
        Y encuentra un nuevo mejor amigo
      </h3>
    <a href="{{ url('adoptar') }}" class="btn btn-xl logins">Buscalo ya</a>
    </div>
  </div>
  
  <div class="row text-primary">
    Vamis a darle
  </div>

</div>


@endsection