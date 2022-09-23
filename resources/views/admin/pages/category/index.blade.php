@extends('admin.app')
@php
use App\Helpers\Template;
@endphp
@section('content')
    <div class="card">
        <div class="card-header ">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Danh sách</h4>
                <form action="" method="GET">
                    <div class="input-group">
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
                        <th class="text-center">Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{!! $category->products->implode('name', '<br>') !!}</td>
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
                                    <button type="button" class="btn btn-dark btn-delete"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            {{ $categories->links() }}
        </div>
        <!-- /.card-footer -->
    </div>
@endsection
