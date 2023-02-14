@extends('layouts.default')

@section('title', 'Dashboard Add Product')
    
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Foto Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('product-galleries.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <select name="products_id" id="products_id" class="form-control @error('products_id') is-invalid @enderror"">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>

                    @error('products_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="photo" class="form-control-label">Foto Barang</label>
                    <input type="file" name="photo" id="photo" value="{{ old('photo') }}" accept="image/*" class="form-control @error('photo') is-invalid @enderror">

                    @error('photo')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="is_default" class="form-control-label">Jadikan Default</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" name="is_default" value="1" class="form-check-input @error('is_default') is-invalid @enderror">Ya
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" name="is_default" value="0" class="form-check-input @error('is_default') is-invalid @enderror">Tidak
                        </label>
                    </div>

                    @error('is_default')
                        <br><small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Tambah Foto Barang</button>
                </div>
            </form>
        </div>
    </div>
@endsection