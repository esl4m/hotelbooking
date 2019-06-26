@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <bookings-list :bookings="{{$bookings}}"></bookings-list>
            </div>
        </div>
    </div>
@endsection
