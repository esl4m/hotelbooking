@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h3 class="display-5">New Booking</h3>

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
            <form method="post" action="{{ route('bookings.store') }}">
                @csrf
                {{--<div class="form-group">--}}
                    {{--<label for="first_name">Group:</label>--}}
                    {{--<select class="chosen-select" name="group_id" id="user_group_id">--}}
                        {{--@foreach($groups as $group)--}}
                            {{--<option value="{{$group->id}}"--}}
                                    {{--@if ($user->group_id && $group->id == old('group_id', $user->group_id))--}}
                                    {{--selected="selected"--}}
                                    {{--@endif--}}
                            {{-->{{$group->name}}</option>--}}
                        {{--@endforeach--}}
                    {{--</select>--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="hotel_id">Hotel:</label>
                    <input type="number" class="form-control" name="hotel_id" value="" />
                </div>
                <div class="form-group">
                    <label for="room_id">Room:</label>
                    <input type="number" class="form-control" name="room_id" value="" />
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="date" class="form-control" name="start_date" value="" />
                </div>
                <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <input type="date" class="form-control" name="end_date" value="" />
                </div>
                <div class="form-group">
                    <label for="customer_id">Customer:</label>
                    <input type="number" class="form-control" name="customer_id" value="" />
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
