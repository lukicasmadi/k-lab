@extends('layouts.template_admin')

@section('content')
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">

        <div class="col-lg-6 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">

                @if ($errors->any())
                    <div class="alert alert-danger custom">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                            <h4>Create Article</h4>
                        </div>
                    </div>
                </div>

                <div class="widget-content widget-content-area">
                    <form method="POST" action="{{ route('article_save') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-4">
                            <label><span class="require">*</span>Topic</label>
                            <input type="text" class="form-control @error('topic') is-invalid @enderror" id="topic" name="topic" placeholder="Topic" autocomplete="off" value="{{ old('topic') }}">
                        </div>

                        <div class="form-group mb-4">
                            <label><span class="require">*</span>Description</label>
                            <textarea id="desc" name="desc" class="@error('desc') is-invalid @enderror">{{ old('desc') }}</textarea>
                        </div>

                        <div class="form-group mb-4">
                            <label><span class="require">*</span>Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                <option value="">== Select Status ==</option>
                                <option value="active">Active</option>
                                <option value="nonactive">Non Active</option>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label><span class="require">*</span>Category</label>
                            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                <option value="">== Select Category ==</option>
                                @foreach ($category as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label>Thumbnail Image</label>
                            <input type="file" class="form-control @error('small_img') is-invalid @enderror" id="small_img" name="small_img">
                            @error('small_img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label>Big Image</label>
                            <input type="file" class="form-control @error('big_img') is-invalid @enderror" id="big_img" name="big_img">
                            @error('big_img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Submit">
                        <a href="{{ route('article_index') }}" class="btn btn-warning mt-3">Back</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('library_css')
<link rel="stylesheet" href="{{ secure_asset('template/plugins/editors/markdown/simplemde.min.css') }}">
@endpush

@push('library_js')
<script src="{{ secure_asset('template/plugins/editors/markdown/simplemde.min.js') }}"></script>
@endpush

@push('page_css')
<link rel="stylesheet" href="{{ secure_asset('template/custom.css') }}">
@endpush

@push('page_js')
<script>
$(document).ready(function() {
    new SimpleMDE({
        element: document.getElementById("desc"),
        spellChecker: false,
    })
})
</script>
@endpush