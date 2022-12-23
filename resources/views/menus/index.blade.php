@extends('layouts.master')
@section('title', 'Menu List')
@push('css_after')
    <style>
        td {
            max-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
@endpush
@section('content')

    {{-- @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif --}}

    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title bg-dark">
                <div class="row bg-dark">
                    <div class="col-sm-10">
                        <h2>Daftar Menu</h2>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ route('menus.create') }}" class="btn btn-warning">
                            <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                            <span>Add New Menu</span>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Rekomendasi</th>
                        <th colspan="2">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($menus as $menu)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $menu->id }}</td>
                            <td>{{ $menu->nama }}</td>
                            <td>{{ $menu->rekomendasi }}</td>
                            <td colspan="2">{{ $menu->harga }}</td>

                            <td><a href="{{ route('menus.show', $menu->id) }}">
                                <button class="btn btn-warning btn-sm">Show</button></a></td>
                        <td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="6">No data yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


@endsection
