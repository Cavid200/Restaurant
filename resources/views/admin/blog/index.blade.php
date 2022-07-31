@extends('admin.admin_master')

@section('content')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection
<!-- Page Body Start-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>{{ __('language list') }}</h3>
                </div>
                <div class="col-6">
                    <a style="float: right" href="{{ route('admin.blog.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i></a>
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
                        <div class="table-responsive product-table">
                            <table class="display" id="banners">
                                <thead>
                                    <tr>
                                        <th>{{ __('row') }}</th>
                                        <th>{{ __('image') }}</th>
                                        <th>{{ __('title') }}</th>
                                        <th>{{ __('action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset($blog->image) }}" alt="" style="width: 100px"></td>
                                        <td>{{ $blog->title }}</td>
                                        <td>
                                            <a href="{{ route('admin.blog.edit',$blog) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                            @if ($blog->isActive==1)
                                                <a href="{{ route('admin.blog.destroy',$blog) }}" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></a>
                                            @else
                                            <a href="{{ route('admin.blog.active',$blog) }}"class="btn btn-warning"><i class="fas fa-check-square"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Individual column searching (text inputs) Ends-->
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection


@section('js')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#banners').DataTable({
            language: {
                @if (app()->getLocale() === 'az')
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/az_az.json'
                @elseif(app()->getLocale() === 'ru')
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/ru.json'
                @else
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/en-gb.json'
                @endif
            }
        });
    });
</script>
@endsection
