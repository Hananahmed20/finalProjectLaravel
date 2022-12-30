@extends('layouts.main_layout')
@section('pagecontent')


<div class="row ">
    <div class="col-8 m-5 d-flex "style="flex-wrap: wrap;">
         <br>
                @foreach ($fruits as $fruit)
                <div class="col-md-4">
                    <div class="fruit-item" >
                        <a href="#"> <img src="{{ $fruit->image }}" style="height: 200px; width: 200px;"></a>
                        <div class="down-content">
                            <a href="#">
                                <h4 style="color: red ;">{{ $fruit->name }}</h4>
                            </a>
                            <h5>{{ $fruit->price }}</h5>
                            <h5>{{ $fruit->description }}</h5>
                         </div>
                        <br>
                    </div>
                </div>
            </tr>
                @endforeach
    </div>
</div>
        
    @endsection
