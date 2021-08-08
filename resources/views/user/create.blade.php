@extends('layout')
@section('content')

    @include('user.validation')

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
   <br>
   <div class="container fuid">
    <form method ="post" action="{{route('createuser')}}">
        @csrf
        <div class="form-group col-md-6">
            <input class="form-control" type="text" name="fname" placeholder="First Name" value="{{old('fname')}}"> <br>
        </div>
        <div class="form-group col-md-6">
        <input class="form-control" type="text" name="lname" placeholder="Last Name" value="{{old('lname')}}"> <br>
        </div>
        <div class="form-group col-md-6">
        <input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}"><br>
        </div>
        <div class="form-group col-md-6">
        <input class="form-control" type="password" name="password" placeholder="Password"value="{{old('password')}}"><br>
        </div>
        <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary">create user </button"><br>
        </div>
    </form>
</div>
@endsection  
