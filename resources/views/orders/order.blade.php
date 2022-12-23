@extends('layouts.master')
@section('title', 'Add New Order')
@section('content')
    <div class="table-title bg-dark">
        <div class="row bg-dark">
            <div class="col-sm-12">
                <h2 class="text-center">Tamabah Order</h2>
                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="status">Status order</label>
                            <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                                <option value="none" disabled selected>Status</option>
                                <option value="selesai" {{ old('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="pembayaran" {{ old('status') == 'pembayaran' ? 'selected' : '' }}>Menunggu
                                    Pembayaran
                                </option>
                            </select>
                            @error('status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="table-responsive">
                                <div class="table-wrapper">
                                    <div class="table-title bg-dark">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h2>Menu List</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-hover text-center">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Rekomendasi</th>
                                                <th colspan="2">Harga</th>
                                                <th colspan="2">Jumlah Pesanan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($menus as $menu)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $menu->id }}</td>
                                                    <td>{{ $menu->nama }}</td>
                                                    <td id="rec">{{ $menu->rekomendasi }}</td>
                                                    <td colspan="2" id="price">{{ $menu->harga }}</td>
                                                    <td colspan="2">
                                                        <input type="hidden" name="id{{ $loop->iteration }}"
                                                            id="id{{ $loop->iteration }}" value="{{ $menu->id }}">
                                                        <input type="number"
                                                            class="form-control @error('qty') is-invalid @enderror"
                                                            name="quantity{{ $loop->iteration }}" id="qty"
                                                            value="{{ old('qty') }}" min="0">
                                                    </td>
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 mb-3 text-right">
                            <h4>
                                Harga Sebelum PPN:
                            </h4>
                        </div>
                        <div class="col-md-4 mb-3 text-right">
                            <h4 id="total">
                                0
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-3 text-right">
                            <h4>
                                Net Total Harga:
                            </h4>
                        </div>
                        <div class="col-md-4 mb-3 text-right">
                            <h4 id="ntotal">
                                0
                            </h4>
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
