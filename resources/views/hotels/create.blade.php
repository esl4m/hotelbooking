@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h3 class="display-5">New Hotel</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('hotels.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Hotel Name:</label>
                    <input type="text" class="form-control" name="name" value="" />
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" value="" />
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" name="city" value="" />
                </div>
                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" class="form-control" name="state" value="" />
                </div>
                <div class="form-group">
                    <label for="country">Country:</label>
                    <input type="text" class="form-control" name="country" value="" />
                </div>

                <div class="form-group">
                    <label for="zipcode">Zip Code:</label>
                    <input type="number" class="form-control" name="zipcode" value="" />
                </div>
                <div class="form-group">
                    <label for="phonenumber">Phone Number:</label>
                    <input type="tel" class="form-control" name="phonenumber" value="" />
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" value="" />
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
