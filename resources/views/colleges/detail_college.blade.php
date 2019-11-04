@extends('templates.t_home')
@section('content')
    <!-- Jumbotron Section Start -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <img src="{{ asset('storage/public/logo_kampus/'.$college->logo_kampus.'') }}" alt="logo_kampus" class="detail-image rounded-circle" style="width: 200px; height: 200px;">
        </div>
      </div>
      <!-- Jumbotron Section End -->

      <div>
        <h1>Hello World</h1>
      </div>
@endsection