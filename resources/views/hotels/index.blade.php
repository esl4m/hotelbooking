@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <hotels-list :hotels="{{$hotels}}"></hotels-list>
                {{-- <div class="card">
                    <div class="card-header">
                        Manage Hotels

                        <a href="{{ route('hotels.create')}}" class="btn btn-primary">New Hotel</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Address</td>
                                    <td>City</td>
                                    <td>State</td>
                                    <td>Country</td>
                                    <td>Phone Number</td>
                                    <td>Email</td>
                                    <td>Image</td>

                                    <td colspan=2>Actions</td>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($hotels as $hotel)
                                    <tr>
                                        <td>
                                            <a href="{{ route('hotels.show',$hotel->id)}}">{{$hotel->id}}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('hotels.show',$hotel->id)}}">{{$hotel->name}}</a>
                                        </td>
                                        <td>{{$hotel->address}}</td>
                                        <td>{{$hotel->email}}</td>
                                        <td>{{$hotel->city}}</td>
                                        <td>{{$hotel->state}}</td>
                                        <td>{{$hotel->country}}</td>
                                        <td>{{$hotel->phonenumber}}</td>
                                        <td>{{$hotel->email}}</td>
                                        <td><img src="{{$hotel->image}}"/></td>
                                        <td>
                                            <a href="{{ route('hotels.edit',$hotel->id)}}"
                                               class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('hotels.destroy', $hotel->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
