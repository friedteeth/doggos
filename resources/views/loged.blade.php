@extends('main')

@section('styles')

<link href="{{ asset('css/welcome.style.css') }}" rel="stylesheet" type="text/css">

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