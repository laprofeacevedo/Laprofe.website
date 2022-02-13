@extends('layouts.app')
@section('navbar')
<div class="container mt-5">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('img/R.jpeg')}}" id="imgslider" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/R (1).jpeg')}}" id="imgslider"  alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/R.jpeg')}}" id="imgslider"  alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
      </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('img/Math_Logo_by_avidlebon-1728x800_c.jpg')}}" id="imgcard" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Clases de Matematicas</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('img/OIP.jpeg')}}" id="imgcard" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Clases de Español</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('img/OIP (1).jpeg')}}" id="imgcard" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Tareas</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
    </div>
</div>
<script src="{{asset('js/script.js')}}"></script>
@endsection
