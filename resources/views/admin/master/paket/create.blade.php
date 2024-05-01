@extends('layouts.temp')
@section('title', 'Paket')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Paket</h3>
                    </div>
                    <div class="card-body">
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}

                        <form method="POST" action="{{route('admin.master.paket.store')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nama">Nama:</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                                        @error('nama')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="harga">Harga:</label>
                                        <input type="integer" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga">
                                        @error('harga')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi:</label>
                                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan Deskripsi">
                                        @error('deskripsi')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group float-left">
                                        <input class="btn btn-primary" type="submit" value="Tambah">
                                        <a href="{{route('admin.master.paket.index')}}" class="btn btn-danger">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
