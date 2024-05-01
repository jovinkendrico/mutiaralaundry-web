@extends('layouts.temp')

@section('title', 'Edit Pesanan')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Pesanan</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('admin.transaksi.pesanan.update', $pesanan->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal:</label>
                                        <input type="date" name="tanggal" id="tanggal" value="{{ $pesanan->tanggal }}" class="form-control">
                                        @error('tanggal')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pesanan">Customer:</label>
                                        <select class="form-control select2bs4" id="customer_id" name="customer_id" style="width: 100%;">
                                            <option disabled selected value> -- Pilih Customer -- </option>
                                            @foreach ($customers as $customer)
                                                <option value="{{ $customer->id }}" {{ $customer->id == $pesanan->customer_id ? 'selected' : '' }}>{{ $customer->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('customer_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pesanan">Paket:</label>
                                        <select class="form-control select2bs4" id="paket_id" name="paket_id" style="width: 100%;">
                                            <option disabled selected value> -- Pilih Paket -- </option>
                                            @foreach ($pakets as $paket)
                                                <option value="{{ $paket->id }}" {{ $paket->id == $pesanan->paket_id ? 'selected' : '' }}>{{ $paket->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('paket_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pesanan">Cabang:</label>
                                        <select class="form-control select2bs4" id="cabang_id" name="cabang_id" style="width: 100%;">
                                            <option disabled selected value> -- Pilih Cabang -- </option>
                                            @foreach ($cabangs as $cabang)
                                                <option value="{{ $cabang->id }}" {{ $cabang->id == $pesanan->cabang_id ? 'selected' : '' }}>{{ $cabang->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('cabang_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="no">Qty:</label>
                                        <input type="text" name="qty" id="qty" class="form-control"
                                            value="{{ $pesanan->qty }}" placeholder="Masukkan Nomor Invoice">
                                        @error('qty')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="no">Biaya:</label>
                                        <input type="text" name="biaya" id="biaya" class="form-control"
                                            value="{{ $pesanan->biaya }}" placeholder="Masukkan Nomor Invoice">
                                        @error('biaya')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group float-right">
                                        <input class="btn btn-primary" type="submit" value="Simpan">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            calculateTotal();
            function formatNumber(number) {
                return number.toLocaleString('id-ID');
            }

            function calculateTotal() {
                var kg = parseFloat($('#kg').val());
                var harga = parseFloat($('#harga').val());
                var ppnpercentage = parseFloat($('#ppnpercentage').val());

                // Calculate subtotal
                var subtotal = kg * harga;
                $('#subtotal').val(formatNumber(subtotal));

                // Calculate PPN
                var ppn = (subtotal * (ppnpercentage / 100));
                $('#ppn').val(formatNumber(ppn));

                // Calculate total
                var total = subtotal - ppn;
                $('#totalharga').val(formatNumber(total));
            }

            $('#kg, #harga, #ppnpercentage').on('input', function() {
                calculateTotal();
            });
        });
    </script>
@endsection
