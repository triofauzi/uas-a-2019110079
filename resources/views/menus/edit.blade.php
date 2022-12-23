@extends('layouts.master')
@section('title', 'Edit Menu')
@section('content')
    <div class="table-title bg-dark">
        <div class="row bg-dark">
            <div class="col-sm-12">
                <h2>Update Menu</h2>
                <form action="{{ route('menus.update', ['menu' => $menu->id]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="id">Menu Type</label>
                            <input class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                                value="{{ old('id') ?? $menu->id }}">
                            @error('id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-8 mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                id="nama" value="{{ old('nama') ?? $menu->nama }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                                id="harga" value="{{ old('harga') ?? $menu->harga }}" min="0">
                            @error('harga')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-2 mb-3">
                            <input type="hidden" name="rekomendasi" id="rekomendasi" value="0">
                            <label for="rekomendasi">Rekomendasi</label>
                            <input type="checkbox"
                                class="form-check-input form-control @error('rekomendasi') is-invalid @enderror"
                                name="rekomendasi" id="rekomendasi" value="1"
                                @if (old('rekomendasi') == null) @if ($menu->rekomendasi)
                            checked @endif
                            @else {{ old('rekomendasi') == 'true' ? 'checked' : '' }} @endif>
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
            </form> @endsection
