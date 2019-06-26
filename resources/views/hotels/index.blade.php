@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <hotels-list :hotels="{{$hotels}}"></hotels-list>
            </div>
        </div>
    </div>
@endsection
