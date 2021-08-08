@extends('layout')
@section('content')

    @include('product.validation')

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
   <br>
<div class="container fuid">
        <form method ="post" action="{{route('createproduct')}}" class="border rounded">
            @csrf
            <div class="form-group col-md-6">
                <input class="form-control" type="text" name="name" placeholder="Name" value="{{old('name')}}"> <br>
            </div>
            <div class="form-group col-md-6">
            <input class="form-control" type="text" name="price" placeholder="price" value="{{old('price')}}"> <br>
            </div>
            <div class="form-group col-md-6">
            <input class="form-control" type="number" name="quantity" placeholder="quantity" value="{{old('quantity')}}"><br>

            <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary">create procuct </button"><br>
            </div>
        </form>
    </div>
@endsection  
