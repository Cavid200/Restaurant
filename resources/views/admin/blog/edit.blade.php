@extends('admin.admin_master')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>{{ __('language update') }}</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Apps</li>
                            <li class="breadcrumb-item active">Role Create </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.blog.update',$blog) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form theme-form">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>{{ __('title') }}</label>
                                                <input class="form-control" type="text" name="title"
                                                    placeholder="{{ __('title') }} *" value="{{ $blog->title }}" required>
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('description') }}</label>
                                                <textarea name="description"  cols="3" rows="3" required class="form-control" placeholder=" {{ __('description') }}*">{{ $blog->description }}</textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('image') }}</label>
                                                <input class="form-control" type="file" name="image" onchange="mainThumbURL(this)">
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <img class="mt-3" src="" id="mainThumb">
                                            <div class="mb-3">
                                                <label>{{ __('current image') }}</label>
                                                <img src="{{ asset($blog->image) }}" alt="" style="width: 100px">
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('tags') }}</label>
                                                <select name="tags[]" multiple id="choices-multiple-remove-button">
                                                    @foreach ($tags as $tag)
                                                        <option
                                                            {{ $tag->id == in_array($tag->id, $blog->tags->pluck('id')->toArray()) ? 'selected' : '' }}
                                                            value="{{ $tag->id }}">{{ $tag->name }}
                                                        </option>
                                                    @endforeach
                                                    @error('tags')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('category') }}</label>
                                                <select name="category_id" class="form-control" required>
                                                    @foreach ($categories as $category)
                                                        <option {{ $category->id == $blog->category_id ? 'selected' : '' }}
                                                            value="{{ $category->id }}">{{ $category->title }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('status') }}</label>
                                                <input type="checkbox" name="isActive" style="width: 20px; height:20px" @checked($blog->isActive)>
                                                @error('isActive')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn-success">{{ __('update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection