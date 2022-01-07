@extends('layouts.admin_app')

@section('title', 'Update Data Sembako')

@section('admin_content')
    <div class="card card-form mb-4 pt-4 pb-3 mx-auto">
        <h4 class="fw-bold text-center">Update Data Sembako</h4>
    </div>
    <div class="card card-body card-form mx-auto pt-4">
        @foreach ($groceries as $item)
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nama Sembako</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Ex: Minyak Goreng" value="{{ $item->name }}">
                    </div>
                    @error('name')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="bage_points" class="form-label fw-bold">Jumlah Point</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="bage_points" id="bage_points" placeholder="Ex: 200" value="{{ $item->bage_points }}">
                    </div>
                    @error('bage_points')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image_groceries" class="form-label fw-bold">Gambar</label>
                    <div class="my-1">
                        <img src="/assets/img/groceries/{{ $item->image_groceries }}" alt="image_groceries" width="100" class="my-2">
                    </div>
                    <div class="input-group">
                        <input type="file" class="form-control" name="image_groceries" id="image_groceries">
                    </div>
                    @error('image_groceries')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="description" class="form-label fw-bold">Deskripsi</label>
                    <div class="input-group">
                        <textarea name="description" id="description" cols="60" rows="5" class="rounded">{{ $item->description }}</textarea>
                    </div>
                    @error('description')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary w-100" style="padding-top: 8px; padding-bottom: 8px;">Update</button>
                </div>
            </form>
        @endforeach
    </div>
@endsection