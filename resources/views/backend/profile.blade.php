@extends('layouts.def')

@section('sidebar')
@include('layouts.sidenav')
@endsection

@section('nav')
@include('layouts.topnavAdmin')
@endsection

@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3"><strong>{{ Auth::user()->name }}'s</strong> Profile</h1>
        <div class="col-12 col-md-6 col-xxl-5 d-flex ">
            <div class="card flex-fill w-100">
                
                <div class="card-body">
                    @error('password')
                        <span class="text-danger" >{{$message}}</span> 
                    @enderror
                    <form action="{{route('admin.profile.reset', ['id'=>$id])}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" >
                        </div>
                        
                        
                     
                        <button type="submit" class="btn btn-primary float-right">Reset</button>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection