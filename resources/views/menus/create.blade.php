@extends('layouts.master')
@section('title', 'Add New Menu')
@section('content')
    <div class="table-title bg-dark">
        <div class="row bg-dark">
            <div class="col-sm-12">
                <h2 class="text-center">Tamabah Menu Baru</h2>
            </div>
        </div>
    </div>
    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="id">Menu Type</label>
                <input class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                    value="{{ old('id') }}">
                @error('id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-8 mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                    value="{{ old('nama') }}">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="harga">Harga</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                    id="harga" value="{{ old('harga') }}" min="0">
                @error('harga')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-2 mb-3">
                <input type="hidden" name="rekomendasi" id="rekomendasi" value="0">
                <label for="rekomendasi">Rekomendasi</label>
                <input type="checkbox" class="form-check-input form-control @error('rekomendasi') is-invalid @enderror"
                    name="rekomendasi" id="rekomendasi" value="1" {{ old('rekomendasi') == 'true' ? 'checked' : '' }}>
                @error('rekomendasi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row bg-dark">
            <div class="col-sm-12">
                <div class="text-center">
                    <button type="submit" class="btn btn-warning ml-3">Add</button>
                </div>
            </div>
        </div>
    </form>
@endsection
