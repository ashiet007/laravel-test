@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Update User #{{$user->id}}</div>
        <div class="card-body card-block">
            @if(session()->has('success'))
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                <span class="badge badge-pill badge-success">Success</span>
                {{session()->get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    <p><strong>Opps Something went wrong</strong></p>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('user.update',['id' => $user->id])}}" method="post" class="">
                @csrf
                {{method_field('PUT')}}
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="name" name="name" placeholder="Name" class="form-control" value="{{$user->name}}">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" id="email2" name="email" placeholder="Email" class="form-control" value="{{$user->email}}">
                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                    </div>
                </div>
                <div class="form-actions form-group"><button type="submit" class="btn btn-secondary btn-sm">Submit</button></div>
            </form>
        </div>
    </div>
</div>
@endsection
