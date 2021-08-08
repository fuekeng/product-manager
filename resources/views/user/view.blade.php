@extends('layout')
@section('content')
@include('user.validation')

@if($errors->any())
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
@endif
<div class="container fuid">
<h1>{{$user->fname}} {{$user->lname}}</h1>
<form method ="post" action="{{route('updateuser',$user->id)}}" >
        @csrf
        <div class="form-group col-md-6">
         <input class="form-control" type="text" name="fname" placeholder="First Name" value="{{$user->fname}}" require> 
         </div>

         <div class="form-group col-md-6">
            <input class="form-control" type="text" name="lname" placeholder="Last Name" value="{{$user->lname}}" > 
         </div>

        <div class="form-group col-md-6">
            <input  class="form-control" type="email" name="email" placeholder="Email" value="{{$user->email}}" require>
        </div>

        <div class="form-group col-md-6">
            <input class="form-control" type="password" name="password" placeholder="Password"value="{{$user->password}}" require>
        </div>

        <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary">save </button"><br> 
    </form>
 <form action="{{route('deleteuser',$user->id)}}" method="post">
 @csrf    
 <button type="submit" class="btn btn-primary">Delete </button>
 </form>
</div>
@endsection  
