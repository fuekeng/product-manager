@extends('layout')
@section('content')
<div class="container fuid">
<a class="btn btn-primary" href="{{route('addproduct')}}">+ADD</a>
    <br>
<table class="table table-bordered"">
<thead class="thead-dark ">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
        @foreach ($products as $product)
       
     
                <tr>
                    <td> {{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td> <a class="btn btn-primary" href="{{route('viewproduct',$product->id)}}">view product</a></td>
                </tr>
        @endforeach

        </tbody>
        </table>
{{$products->links()}}
</div>
@endsection  
