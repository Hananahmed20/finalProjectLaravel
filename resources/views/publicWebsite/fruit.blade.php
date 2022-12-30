@extends('layouts.main_layout')
@section('pagecontent')

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
         <img src= "{{ $item->image }}">

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

 
 

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

@stop