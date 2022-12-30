
@extends('layouts.main_layout')
@section('pagecontent')

    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="img-box">
              <img src="images/slider-img.jpg" alt="">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="images/slider-img.jpg" alt="">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="images/slider-img.jpg" alt="">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- end slider section -->
  </div>

 
  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="box">
        <div class="detail-box">
          <h2>
            Fruit shop
          </h2>
          <p>
            There are many variations of passages of Lorem Ipsum available
          </p>
        </div>
        <div class="img-box">
          <img src="images/shop-img.jpg" alt="">
        </div>
        <div class="btn-box">
          <a href="">
            Buy Now
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- about section -->

  <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box">
            <div class="heading_container">
              <hr>
              <h2>
                About Our Fruit Shop
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

 

  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Fresh Fruit
        </h2>
      </div>
    </div>
    <div class="container-fluid">
    <div class="fruit_container">
        @foreach($fruits as $item)
        <div class="box">
        <img src= "{{ $item->image }}" alt="">
           <div class="link_box">
            <h5>
              {{ $item->name}}
            </h5>
            <h4>
           {{$item->price}} 
            </h4>
            <h4>
           {{$item->description}} 
            </h4>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
       
          @endforeach
      </div>

    </div>
  </section>



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
              <img src= "{{ $item->image }}" alt="">
              <div class="img-box">
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

  <!-- end client section -->


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-md-10 offset-md-1">
          <div class="heading_container">
            <hr>
            <h2>
              Request A call back
            </h2>
                 @if(session()->has('status'))
                @if(session('status'))
                <div style="color:#09AC60; padding:20px; background-color:#BEBEBE; font-weight:bold;" > SUCCESS </div>
                @else
                <div style="color:#D90B0B; padding:20px; background-color:#BEBEBE; font-weight:bold;" > FAILED </div>
                @endif
                @endif
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
            <form action="{{url('contact/user')}}" method="post">
            <input type="hidden" name ="_token" value = {{csrf_token() }}>
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Full Name" name="name" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email"name="email" />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" name="phone"/>
                  </div>
                  <div>
                    <input type="text" class="message_input" placeholder="Message" name="message" />
                  </div>
                  <div>
                    <button type="submit" value="Save">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 px-0">
            <div class="map_container">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

@stop