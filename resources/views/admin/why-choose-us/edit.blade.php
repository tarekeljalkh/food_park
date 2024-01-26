@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Why Choose Us</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Why Choose Us</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.why-choose-us.update', $wcu->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Icon</label>
                        <br>
                        <button data-icon="{{ $wcu->icon }}" class="btn btn-primary" name="icon" role="iconpicker"></button>
                    </div>

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $wcu->title }}">
                    </div>

                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea name="short_description" class="form-control">{{ $wcu->short_description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option @selected($wcu->status === 1) value="1">Active</option>
                            <option @selected($wcu->status === 0) value="0">Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </section>
@endsection
