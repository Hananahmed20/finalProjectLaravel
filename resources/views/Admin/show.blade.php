
@extends('Admin.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Fruits Page</div>
  <div class="card-body">
        <div class="card-body">
        <!-- <form action="{{ url('view/{id}') }}" method="get"> -->
        <h5 class="card-title">Name : {{ $fruits->name }}</h5>
        <h5 class="card-title">Price : {{ $fruits->price }}</h5>
        <p class="card-text">Description : {{ $fruits->description }}</p>
        <p class="card-text">Image : <img src= "{{ $fruits->image }}"style="height: 150px; width: 150px;" alt="">
</p>
  </div>
    </hr>
  </div>
</div>