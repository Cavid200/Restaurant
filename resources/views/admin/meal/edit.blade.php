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
                            <form action="{{ route('admin.meal.update',$meal) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form theme-form">
                                    <div class="row">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label>{{ __('name') }}</label>
                                                    <input class="form-control" type="text" name="name"
                                                        placeholder="{{ __('name') }} *" value="{{ $meal->name }}" required>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label>{{ __('ingredient') }}</label>
                                                    <textarea name="ingredient"  cols="3" rows="3" required class="form-control" placeholder="{{ __('ingredient') }} *">{{ $meal->ingredient }}</textarea>
                                                    @error('ingredient')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label>{{ __('price') }}</label>
                                                    <input class="form-control" type="text" name="price"
                                                        placeholder="{{ __('price') }} *" value="{{ $meal->price }}" required>
                                                    @error('price')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label>{{ __('discount price') }}</label>
                                                    <input class="form-control" type="text" name="discount_price"
                                                        placeholder="{{ __('discount price') }} *"  value="{{ $meal->discount_price }}"  required>
                                                    @error('discount_price')
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
                                                    <img src="{{ asset($meal->image) }}" alt="" style="width: 100px">
                                                </div>
                                                <div class="mb-3">
                                                    <label>{{ __('categories') }}</label>
                                                    <select name="category_id" class="form-control" required>
                                                        @foreach ($categories as $category)
                                                            <option {{ $category->id == $meal->category_id ? 'selected' : '' }}
                                                                value="{{ $category->id }}">{{ $category->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label>{{ __('discount price') }} {{ __('status') }}</label>
                                                    <input type="checkbox" name="isDiscount" style="width: 20px; height:20px" @checked($meal->isDiscount)>
                                                </div>
                                                <div class="mb-3">
                                                    <label>{{ __('suggestion ') }} {{ __('status') }}</label>
                                                    <input type="checkbox" name="isEditor" style="width: 20px; height:20px" @checked($meal->isEditor)>
                                                </div>
                                                <div class="mb-3">
                                                    <label>{{ __('status') }}</label>
                                                    <input type="checkbox" name="isActive" style="width: 20px; height:20px" @checked($meal->isActive)>
                                                </div>
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