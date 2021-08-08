@extends('layout')
@section('content')
@include('product.validation')

@if($errors->any())
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
@endif
<div class="container fuid">
        <h1>{{$product->fname}} {{$product->name}}</h1>
        <form method ="post" action="{{route('updateproduct',$product->id)}}" >
                @csrf
                <div class="form-group col-md-6">
                <input class="form-control" type="text" name="name" placeholder="Name" value="{{$product->name}}" require> 
                </div>

                <div class="form-group col-md-6">
                    <input class="form-control" type="text" name="price" placeholder="price" value="{{$product->price}}" > 
                </div>

                <div class="form-group col-md-6">
                    <input  class="form-control" type="quantity" name="quantity" placeholder="quantity" value="{{$product->quantity}}" require>
                </div>

                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">save </button"><br> 
            </form>
            <form action="{{route('deleteproduct',$product->id)}}" method="post">
                @csrf    
                <button type="submit" class="btn btn-primary">Delete </button>
            </form>

</div>

@endsection  
