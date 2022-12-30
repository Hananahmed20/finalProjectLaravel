@extends('Admin.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
      <form action="{{ url('fruit/update/') }}" method="post">
    @csrf
         <input type="hidden" name="id" id="id" value="{{$fruite->id}}" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$fruite->name}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" value="{{$fruite->price}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="description" id="description" value="{{$fruite->description}}" class="form-control"></br>
        <label>image</label></br>
        <input type="file" name="image" id="image" value="{{$fruite->image}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-primary"></br>
    </form>
    
  </div>
</div>
  
@endsection
