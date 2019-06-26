@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <customers-list :customers="{{$customers}}"></customers-list>
            </div>
        </div>
    </div>
@endsection
