@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product Details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form>

                        <table class="table table-striped">
                            <tr>
                              <td><strong>Product Name :</strong></td>
                              <td >{{ $product->name }}</td>
                            </tr>
                            <tr>
                              <td><strong>Product Price :</strong></td>
                              <td >{{ $product->price }}</td>
                            </tr>

                            <tr>
                                <td><strong>Product Description :</strong></td>
                                <td >{{ $product->description }}</td>
                              </tr>
                              <tr>
                                <td><strong>Product image :</strong></td>
                                <td><img src="{{ asset('storage/'.$product->image) }}" height="60px"; width="60px" alt=""> </td>
                              </tr>


                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
