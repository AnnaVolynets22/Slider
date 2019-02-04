@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Slider {{ $slider->id }}</div>
                    <div class="card-body">
                         <a href="{{ url('/user/') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $slider->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $slider->title }} </td></tr><tr><th> Description </th><td> {{ $slider->description }} </td></tr><tr><th> Start Date </th><td> {{ $slider->start_date }} </td></tr>
                                    <tr><th> End Date </th><td> {{ $slider->end_date }} </td></tr>
                                    <tr><th> Show dots </th><td> {{ $slider->show_dots }} </td></tr>
                                    <tr><th> infinite </th><td> {{ $slider->infinite }} </td></tr>
                                    <tr><th> speed </th><td> {{ $slider->speed }} </td></tr>
                                    <tr><th> slidesToShow </th><td> {{ $slider->slides_to_show }} </td></tr>
                                    <tr><th> Adaptive height </th><td> {{ $slider->adaptive_height }} </td></tr>
                                    <tr><th> fade </th><td> {{ $slider->fade}} </td></tr>
                                    <tr><th> cssEase </th><td> {{ $slider->cssEase }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
