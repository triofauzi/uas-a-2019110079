@extends('layouts.master')
@section('title', 'Home')
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
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title bg-dark">
                <h2 class="text-center">Jumlah Menu</h2>
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <td class="text-center">{{ $menuHitung }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="{{ route('menus.index') }}" class="btn btn-warning">
                        Daftar Menu </a>
                </div>
            </div>
        </div>
        <br>

        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title bg-dark">
                    <h2 class="text-center">Jumlah Order</h2>
                    <table class="table table-striped table-hover">
                        <thead>
                            {{-- <tr>
                        <th class="text-center">Jumlah Menu</th>
                    </tr> --}}
                        </thead>
                        <tbody>

                            <tr>
                                <td class="text-center">{{ $orderHitung }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="{{ route('orders.create') }}" class="btn btn-warning">
                            Tambah Order </a>
                    </div>
                </div>
            </div>

        @endsection
