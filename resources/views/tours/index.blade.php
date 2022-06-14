@extends('layouts.app')
@section('title-page','Homepage')
@section('content')
<section class="tours py-4">
    <div class="container">
        <h1 class="text-center">Tours</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @forelse($tours as $tour)
            <div class="col">
                <div class="card h-100">
                    <img class="img-fluid" src="{{$tour->image}}" alt="{{$tour->location}}">
                    <div class="card-body">
                        <div class="row row-cols-2">
                            <div class="col">
                                <h3>Location: {{$tour->location}}</h3>
                                <p>Start: {{DateTime::createFromFormat('Y-m-d',$tour->date_start)->format('d/M/Y')}}</p>
                                <p>Return: {{DateTime::createFromFormat('Y-m-d',$tour->date_return)->format('d/M/Y')}}</p>
                                <p>Duration: {{$tour->duration}}</p>
                                <p>Posts Avaible: {{$tour->number_posts_avaible}}</p>
                                <p>Type Tour: {{$tour->type_tour}}</p>
                                <p>Price: {{$tour->price}}</p>
                                <p>description: {{$tour->description}}</p>
                            </div>
                            <div class="col">
                                <h3>Services</h3>
                                @php
                                $services = explode(',',$tour->services)
                                @endphp
                                <ul class="list-unstyled">
                                    @forelse($services as $service)
                                    <li>{{$service}}@if(!$loop->last),@endif</li>
                                    @empty
                                    <li>Nothing</li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="{{route('tours.show',$tour)}}" role="button">More Details</a>
                </div>
            </div>
            @empty
            <div class="col">
                <p>Nothing</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
