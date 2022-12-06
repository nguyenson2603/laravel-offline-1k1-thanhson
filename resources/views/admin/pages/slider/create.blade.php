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
                <h4 class="mb-0">Thêm mới</h4>
                <a href="{{ route("admin.{$model}.index") }}" class="btn btn-warning">Quay lại</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <form method="POST" action="{{ route("admin.{$model}.store") }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" name="link">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <x-admin.select-status name="status" key-selected="1" />
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
