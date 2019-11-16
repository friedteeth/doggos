@extends('main')

@section('styles')

#content {
  background: linear-gradient(rgba(22, 22, 22, 0.1), rgba(22, 22, 22, 1)), url('storage/stock/main_bg.jpg');
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
  padding-top: 210px;
  opacity: 0.7;
}

.title-font {
  color: white;
  font-size: 3rem;
}



@endsection

@section('content')

<div class="container h-100">

  <div class="row h-100">
  
    <div class="col-5 offset-1 text-center" id="main-title">
      <h1>
        ¡Anímate!
      </h1>
      <h3>
        Y encuentra un nuevo mejor amigo
      </h3>
      <a href="{{ url('adoptar') }}" class="btn btn-xl logins">
        Búscalo ya
      </a>
    </div>
  </div>

</div>


@endsection