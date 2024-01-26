@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Gallery ({{$product->name}})</h1>
        </div>
    </section>

    <div>
        <a href="{{route('admin.product.index')}}" class="btn btn-primary my-3">Go Back</a>
    </div>

    <section class="section">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Upload Images</h4>
            </div>
            <div class="card-body">
                <div class="col-md-8">
                    <form action="{{ route('admin.product-gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input name="image" type="file" class="form-control" />
                            <input type="hidden" value="{{ $product->id }}" name="product_id" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <section class="section">
        <div class="card card-primary">
            <div class="card-header">
                <h4>All Images</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productImages as $productImage)
                        <tr>
                            <th><img width="100px" src="{{ asset($productImage->image)}}" /></th>
                            <th>
                                <a href="{{route('admin.product-gallery.destroy', $productImage->id)}}" class='btn btn-danger delete-item mx-2'><i class='fas fa-trash'></i></a>
                            </th>
                        </tr>

                        @endforeach

                        @if (count($productImages) === 0)
                        <tr>
                            <th colspan="2" class="text-center">No Data Found !</th>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
