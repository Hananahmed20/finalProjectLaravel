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
                        <a href="{{ url('/fruit/create') }}" class="btn btn-success btn-sm" title="Add New Fruit">
                            Add New Fruit
                        </a>
                        <a href="{{ url('fruit/showall') }}" class="btn btn-success btn-sm" title="Back">Show Fruit added
                        </a>

                        <a href="{{ url('testimonial/create') }}" class="btn btn-success btn-sm" title="Add Testimonial">
                           Add Testimonial
                        </a>
                        <a href="{{ url('testimonial/show') }}" class="btn btn-success btn-sm" title="Show Testimonial">
                           Show Testimonial
                        </a>
                        <a href="{{ url('contact/show') }}" class="btn btn-success btn-sm" title="Show Contacts">
                           Show Contacts
                        </a>
               
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection