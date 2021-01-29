@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title mb-3">Profile Card</strong>
        </div>
        <div class="card-body">
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" src="{{asset('images/admin.jpg')}}" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1">{{$user->name}}</h5>
                <div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{$user->email}}</div>
            </div>
            <hr>
            <div class="card-text text-sm-center">
                <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
