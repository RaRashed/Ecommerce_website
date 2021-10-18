@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Product</div>

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

                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text"  class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file"  class="form-control" name="image" id="name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="integer"  class="form-control" name="price" id="">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="" cols="5" rows="5"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Add Product</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
