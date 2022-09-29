@php
use App\Models\Category;
$categories = new Category();
@endphp
@extends('admin.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="fas fa-exclamation-triangle"></i> Lỗi cú pháp!</h5>
            @foreach ($errors->all() as $error)
                <p>- {{ $error }}</p>
            @endforeach
        </div>
    @endif
    <div class="card">
        <div class="card-header ">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Cập nhật</h4>
                <a href="{{ route('admin.products.index') }}" class="btn btn-warning">Quay lại</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <form method="POST" action="{{ route('admin.products.update', ['product' => $product]) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Content</label>
                        <textarea name="content" cols="30" rows="3" class="form-control">
                            {{ $product->content }}
                        </textarea>
                    </div>
                    @include('admin.components.select-box', [
                        'title' => 'Category',
                        'name' => 'category_id',
                        'options' => $categories->categories(),
                        'value' => $product->category_id,
                    ])
                    @include('admin.components.select-box', [
                        'title' => 'Status',
                        'name' => 'status',
                        'options' => [
                            [
                                'id' => 1,
                                'name' => 'Kích hoạt',
                            ],
                            [
                                'id' => 0,
                                'name' => 'Chưa kích hoạt',
                            ],
                        ],
                        'value' => $product->status,
                    ])
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
