@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Book Room: {{ $room->name }}</h1>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <input type="hidden" name="room_id" value="{{ $room->id }}">
        <div class="mb-3">
            <label for="customer_name" class="form-label">Your Name</label>
            <input type="text" name="customer_name" id="customer_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="customer_email" class="form-label">Your Email</label>
            <input type="email" name="customer_email" id="customer_email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="check_in" class="form-label">Check-In Date</label>
            <input type="date" name="check_in" id="check_in" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="check_out" class="form-label">Check-Out Date</label>
            <input type="date" name="check_out" id="check_out" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Confirm Booking</button>
    </form>
</div>
@endsection
