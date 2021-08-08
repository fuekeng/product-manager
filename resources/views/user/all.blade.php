@extends('layout')
@section('content')
<div class="container fuid">
<a class="btn btn-primary" href="{{route('adduser')}}">+ADD</a>
    <br>
<table class="table table-bordered"">
<thead class="thead-dark ">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
        @foreach ($users as $user)
       
     
                <tr>
                    <td> {{$user->fname}}</td>
                    <td>{{$user->lname}}</td>
                    <td>{{$user->email}}</td>
                    <td> <a class="btn btn-primary" href="{{route('viewuser',$user->id)}}">view user</a></td>
                </tr>
        @endforeach

        </tbody>
        </table>
{{$users->links()}}
</div>
@endsection  
