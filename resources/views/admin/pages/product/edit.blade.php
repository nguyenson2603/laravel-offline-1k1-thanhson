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
                <a href="{{ route("admin.{$model}.index") }}" class="btn btn-warning">Quay lại</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <form method="POST" action="{{ route('admin.products.update', ['product' => $product]) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" cols="30" rows="3" class="form-control" id="editor">
                            {{ $product->content }}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <x-admin.select-category name="category_id" key-selected="{{ $product->category_id }}" :values="$categories" />
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <x-admin.select-status name="status" key-selected="{{ $product->status }}" />
                    </div>
                    <div class="form-group">
                        <label for="is_top_collection">Is Top Collection</label>
                        <x-admin.select-status name="is_top_collection" key-selected="{{ $product->is_top_collection }}" />
                    </div>
                    <div class="form-group">
                        <label for="is_trending">Is Trending</label>
                        <x-admin.select-status name="is_trending" key-selected="{{ $product->is_trending }}" />
                    </div>
                    <div class="form-group">
                        <label for="is_feature">Is Feature</label>
                        <x-admin.select-status name="is_feature" key-selected="{{ $product->is_feature }}" />
                    </div>
                    <div class="form-group">
                        <label for="is_best_seller">Is Best Seller</label>
                        <x-admin.select-status name="is_best_seller" key-selected="{{ $product->is_best_seller }}" />
                    </div>
                    <div class="form-group">
                        <label for="is_on_sale">Is On Sale</label>
                        <x-admin.select-status name="is_on_sale" key-selected="{{ $product->is_on_sale }}" />
                    </div>
                    <div class="form-group">
                        <label for="sale">Sale</label>
                        <input type="number" class="form-control" name="sale" value="{{ $product->sale }}">
                    </div>
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
