@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <rooms-list :rooms="{{$rooms}}"></rooms-list>
            </div>
        </div>
    </div>
@endsection
