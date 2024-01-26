@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Variants ({{ $product->name }})</h1>
        </div>
    </section>

    <div>
        <a href="{{ route('admin.product.index') }}" class="btn btn-primary my-3">Go Back</a>
    </div>

    <div class="row">

        {{-- Price Section --}}
        <div class="col-md-6">
            <section class="section">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Add Product Size</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.product-size.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control" />
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="number" name="price" class="form-control" />
                                    </div>

                                </div>

                            </div>

                            <input type="hidden" value="{{ $product->id }}" name="product_id" />

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>

            </section>

            <section class="section">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>All Sizes</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sizes as $size)
                                    <tr>
                                        <th>{{ ++$loop->index }}</th>
                                        <th>{{ $size->name }}</th>
                                        <th>{{ currencyPosition($size->price) }}</th>
                                        <th>
                                            <a href="{{ route('admin.product-size.destroy', $size->id) }}"
                                                class='btn btn-danger delete-item mx-2'><i class='fas fa-trash'></i></a>
                                        </th>
                                    </tr>
                                @endforeach

                                @if (count($sizes) === 0)
                                    <tr>
                                        <th colspan="4" class="text-center">No Sizes Found !</th>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
        {{-- End Price Section --}}

        {{-- Option Section --}}
        <div class="col-md-6">
            <section class="section">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Add Product Option</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.product-option.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control" />
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="number" name="price" class="form-control" />
                                    </div>

                                </div>

                            </div>

                            <input type="hidden" value="{{ $product->id }}" name="product_id" />

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>

            </section>

            <section class="section">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>All Options</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($options as $option)
                                    <tr>
                                        <th> {{ ++$loop->index }}</th>
                                        <th>{{ $option->name }}</th>
                                        <th>{{ currencyPosition($option->price) }}</th>
                                        <th>
                                            <a href="{{ route('admin.product-option.destroy', $option->id) }}"
                                                class='btn btn-danger delete-item mx-2'><i class='fas fa-trash'></i></a>
                                        </th>
                                    </tr>
                                @endforeach

                                @if (count($options) === 0)
                                    <tr>
                                        <th colspan="4" class="text-center">No Options Found !</th>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
        {{-- End Option Section --}}

    </div>
@endsection
