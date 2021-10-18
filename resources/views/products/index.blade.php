@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($products as $key => $product)
  <tr>
    <th scope="row">{{ $key+1 }}</th>
    <td>{{ $product->name }}</td>
    <td><img src="{{ asset('storage/'.$product->image) }}" height="60px"; width="60px" alt=""> </td>
    <td>{{ $product->price }}</td>
    <td>{{ $product->description }}</td>
    <td>
        <a href="{{route('products.edit',$product->id) }}" class="btn btn-success">Edit</a>
        <a href="{{route('products.show',$product->id) }}" class="btn btn-info" >View</a>
        <a href="{{route('products.delete',$product->id) }}" class="btn btn-danger">delete</a>
    </td>
  </tr>

  @endforeach

  </tbody>
</table>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection
