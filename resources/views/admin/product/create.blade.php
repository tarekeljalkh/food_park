@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Products</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Product</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Image</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label>Category</label>
                        <select name="category" class="form-control select2">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" value="{{ old('price') }}">
                    </div>

                    <div class="form-group">
                        <label>Offer Price</label>
                        <input type="text" name="offer_price" class="form-control" value="{{ old('offer_price') }}">
                    </div>


                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea name="short_description" class="form-control">{{ old('short_description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Long Description</label>
                        <textarea name="long_description" class="form-control summernote">{{ old('long_description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>SKU</label>
                        <input type="text" name="sku" class="form-control" value="{{ old('sku') }}">
                    </div>

                    <div class="form-group">
                        <label>SEO Title</label>
                        <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
                    </div>

                    <div class="form-group">
                        <label>SEO Description</label>
                        <textarea name="seo_description" class="form-control">{{ old('seo_description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Show At HomePage</label>
                        <select name="show_at_home" class="form-control">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>

    </section>
@endsection
