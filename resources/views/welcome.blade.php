@extends('layouts.app')

@section('content')

<section class="mb-4">
    <div id="carouselSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner " style="border-radius: 10px;">
          <div class="carousel-item active" data-bs-interval="3000">
            <div style="border-radius: 10px; height: 360px; width: 100%; background: url('/img/cec3_09.jpeg'); background-size: cover"></div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <div style="border-radius: 10px; height: 360px; width: 100%; background: url('/img/cec3_22.jpeg'); background-size: cover"></div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <div style="border-radius: 10px; height: 360px; width: 100%; background: url('/img/cec3_18.jpeg'); background-size: cover"></div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselSlider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section>

    <x-news></x-news>

</section>
    
@endsection