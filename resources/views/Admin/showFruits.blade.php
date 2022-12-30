@extends('Admin.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>welcom admin dashboard</h2>
                    </div>
                    <div class="card-body">
                    <h4> <a href="{{ url('fruit/show') }}" class="btn btn-success btn-sm" title="Back">Back
                        </a></h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>price</th>
                                        <th>Description</th>
                                        <th>image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($fruits as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <!-- <td>{{ $item->id }}</td> -->
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td><img src = "{{ ($item->image) }}" style="height: 100px; width: 100px;"></td>
  
                                        <td>
                                            <a href="view/{{$item->id}}"  title="View Fruit"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="edit/{{$item->id}}"  title="Edit fruit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <a href="delete/{{$item->id}}" title="Delete fruit"><button class="btn btn-danger btn-sm" onclick ="return confirm("Confirm delete?")"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>

                                            <form method="POST" action="{{ url('/fruit' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <!-- <button type="submit" class="btn btn-danger btn-sm" title="Delete fruit" onclick= "return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> -->
                                            </form>
                                        </td>
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