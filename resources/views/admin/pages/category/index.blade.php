@extends('admin.app')
@php
use App\Helpers\Template;
use App\Helpers\Highlight;
@endphp
@section('content')
    <div class="card">
        <div class="card-header ">
            <div class="d-flex justify-content-between align-items-center">
                <x-admin.filter-status-category currentStatus="{{ $params['filter-status'] }}" />
                <form action="" method="GET">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-expanded="false" id="input-group-prepend">
                                {{ request()->get('filter') != '' ? request()->get('filter') : 'all' }}
                            </button>
                            <div class="dropdown-menu">
                                <button class="dropdown-item btn-click" data-value="name">Name</button>
                            </div>
                        </div>
                        <input type="hidden" name="filter" class="data-field" value="{{ request()->get('filter') }}">
                        <input type="search" name="search" class="form-control form-control-lg" placeholder="Search..."
                            value="{{ request()->get('search') }}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 15px">ID</th>
                        <th>Name</th>
                        <th>Products</th>
                        <th>Products with Accesor</th>
                        <th class="text-center">Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($categories) > 0)
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{!! Highlight::show($category->name, $params, 'name') !!}</td>
                                <td>{!! $category->products->implode('name', '<br>') !!}</td>
                                <td>{!! $category->product_list !!}</td>
                                <td class="text-center">
                                    @include('admin.components.button-status', [
                                        'item' => $category,
                                        'model' => $model,
                                    ])
                                </td>
                                <td>
                                    <form action="{{ route('admin.categories.destroy', ['category' => $category]) }}"
                                        method="POST" class="form-delete form-{{ $category->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.categories.edit', ['category' => $category]) }}"
                                            class="btn btn-success"><i class="fas fa-pen"></i></a>
                                        <button type="button" class="btn btn-dark btn-delete"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="h3 text-center">Dữ liệu đang được cập nhật!!</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            {!! $categories->appends(request()->input())->links() !!}
        </div>
        <!-- /.card-footer -->
    </div>
@endsection
