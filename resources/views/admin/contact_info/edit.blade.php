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
                            <form action="{{ route('admin.contact_info.update',$contact_info) }}" method="post" >
                                @csrf
                                <div class="form theme-form">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>{{ __('title') }}</label>
                                                <input class="form-control" type="text" name="title"
                                                    placeholder="{{ __('title') }} *" value="{{ $contact_info->title }}" required>
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>{{ __('about') }}</label>
                                                <textarea name="about"  cols="3" rows="3" required class="form-control" placeholder="{{ __('about') }} *">{{ $contact_info->about }}</textarea>
                                                @error('about')
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