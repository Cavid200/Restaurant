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
                            <form action="{{ route('admin.opening_hour.update',$opening_hour) }}" method="post"  enctype="multipart/form-data">
                                @csrf
                                <div class="form theme-form">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>{{ __('title') }}</label>
                                                <input class="form-control" type="text" name="title"
                                                    placeholder="{{ __('title') }} *" value="{{ $opening_hour->title }}"  required>
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('subtitle') }}</label>
                                                <input class="form-control" type="text" name="subtitle"
                                                    placeholder="{{ __('subtitle') }} *"   value="{{ $opening_hour->subtitle }}" required>
                                                @error('subtitle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('subtitle') }}</label>
                                                <input class="form-control" type="text" name="week_day1"
                                                    placeholder="{{ __('subtitle') }} *" value="{{ $opening_hour->week_day1 }}"  required>
                                                @error('week_day1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('subtitle') }}</label>
                                                <input class="form-control" type="text" name="start_time1"
                                                    placeholder="{{ __('subtitle') }} *" value="{{ $opening_hour->start_time1 }}"  required>
                                                @error('start_time1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('subtitle') }}</label>
                                                <input class="form-control" type="text" name="end_time1"
                                                    placeholder="{{ __('subtitle') }} *" value="{{ $opening_hour->end_time1 }}" required>
                                                @error('start_time1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('subtitle') }}</label>
                                                <input class="form-control" type="text" name="week_day2"
                                                    placeholder="{{ __('subtitle') }} *"  value="{{ $opening_hour->week_day2 }}" required>
                                                @error('week_day1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('subtitle') }}</label>
                                                <input class="form-control" type="text" name="start_time2"
                                                    placeholder="{{ __('subtitle') }} *" value="{{ $opening_hour->start_time2 }}" required>
                                                @error('start_time1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('subtitle') }}</label>
                                                <input class="form-control" type="text" name="end_time2"
                                                    placeholder="{{ __('subtitle') }} *" value="{{ $opening_hour->end_time2 }}" required>
                                                @error('end_time2')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('phone') }}</label>
                                                <input class="form-control" type="text" name="phone"
                                                    placeholder="{{ __('phone') }} *" value="{{ $opening_hour->phone }}" required>
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label>{{ __('image') }}</label>
                                            <input class="form-control" type="file" name="video" onchange="mainThumbURL(this)">
                                            @error('video')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
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