@extends('layouts.default')

@section('title', 'Dashboard Edit Transaction')
    
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Transaksi</strong>
            <br>
            <small>{{ $item->uuid }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('transactions.update', $item->id) }}" method="post">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Pemesan</label>
                    <input type="text" name="name" id="name" value="{{ old('name') ? old('name') : $item->name }}" class="form-control @error('name') is-invalid @enderror">

                    @error('name')
                        <div class="text-muted text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') ? old('email') : $item->email }}" class="form-control @error('email') is-invalid @enderror">

                    @error('email')
                        <div class="text-muted text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="number" class="form-control-label">Nomor HP</label>
                    <input type="text" name="number" id="number" value="{{ old('number') ? old('number') : $item->number }}" class="form-control @error('number') is-invalid @enderror">

                    @error('number')
                        <div class="text-muted text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="address" class="form-control-label">Alamat Pemesan</label>
                    <input type="text" name="address" id="address" value="{{ old('address') ? old('address') : $item->address }}" class="form-control @error('address') is-invalid @enderror">

                    @error('address')
                        <div class="text-muted text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Ubah Transaksi</button>
                </div>
            </form>
        </div>
    </div>
@endsection