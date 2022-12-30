@extends('Admin.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Fruit</div>
  
  <div class="card-body">
  <a href="{{ url('fruit/show') }}" class="btn btn-success btn-sm" title="Back">Go to Admin dashboard
                        </a>
  <div class = "col_12">
                @foreach($errors->all() as $message)
                <div class = "alert alert_danger">{{$message}}</div>
                @endforeach
                @if(session()->has('add_status'))
                      @if(session('add_status'))
                      <div class = "alert alert-success">SUCCESS</div>
                      @else
                      <div class = "alert alert-danger">FAILED</div>
                      @endif
                 @endif
            </div>
        </div>
      <form action="{{ url('fruit/store') }}" method="post" enctype ="multipart/form-data">
    @csrf
      <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <label>description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>image</label></br>
        <input type="file" name="image" id="image" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop