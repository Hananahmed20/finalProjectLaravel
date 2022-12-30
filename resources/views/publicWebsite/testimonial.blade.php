 
@extends('layouts.main_layout')
@section('pagecontent')
  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2>
          What Syas Cutomer
        </h2>
        <hr>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding-top">
              @foreach($testimonials as $item)
              <div class="img-box">
              <img src= "{{ $item->image }}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                {{ $item->name}}
                </h5>
                <p>
                  <img src="images/left-quote.png" alt="">
                  <span>
                  {{$item->description}} 
                  </span>
                  <img src="images/right-quote.png" alt=""> <br>
                </p>
              </div>
              @endforeach

            </div>
          </div>
           
        </div>
        <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </section>

@stop 