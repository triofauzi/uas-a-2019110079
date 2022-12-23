@extends('layouts.master')
@section('title', $menu->nama)
@section('content')
    <div class="table-title bg-dark">
        <div class="col-sm-10">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <h2>{{ $menu->nama }}</h2>
                    </div>
                    <div class="col-md-4">
                        <div class="float-right">
                            <div class="btn-group" role="group">
                                <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning ml-3">Edit</a>
                                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST">
                                    <button type="submit" class="btn btn-danger ml-3">Delete</button>
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($menu->rekomendasi)
                    <h3>
                        <span class="badge badge-warning">
                            <i class="fa fa-star fa-fw"></i>
                            Rekomendasi
                        </span>
                    </h3>
                @else
                    <h3>
                        <span class="badge badge-light">
                            <i class="fa fa-star fa-fw"></i>
                            Normal
                        </span>
                    </h3>
                @endif

                <h3>
                    <hr>
                    Harga: Rp{{ $menu->harga }}
                </h3>
            </div>
        @endsection
