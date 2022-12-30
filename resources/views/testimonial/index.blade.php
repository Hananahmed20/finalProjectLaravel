@extends('Admin.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>welcom admin for Testimonial</h2>
                        <h4> <a href="{{ url('fruit/show') }}" class="btn btn-success btn-sm" title="Back">Back
                        </a></h4>
                    </div>
                    <div class="card-body">
               
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                      </tr>
                                </thead>
                                <tbody>
                                @foreach($testimonials as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src = "{{ ($item->image) }}" ></td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>
 
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection