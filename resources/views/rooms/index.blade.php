@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Hotel Rooms</h1>
    <div class="row">
        @foreach($rooms as $room)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $room->name }}</h5>
                    <p class="card-text">{{ $room->description }}</p>
                    <p class="card-text text-success">${{ $room->price }}</p>
                    <a href="#" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
