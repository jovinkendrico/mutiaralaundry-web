@extends('layouts.temp')

@section('title', 'Pesanan')
@section('content')
    {{-- @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pesanan</h3>
                        <a href="{{ route('admin.transaksi.pesanan.create') }}" class="btn btn-success btn-sm float-right"
                            title="Add New Pesanan">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal</th>
                                    <th>Customer</th>
                                    <th>Cabang</th>
                                    <th>Paket</th>
                                    <th>Qty</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanans as $pesanan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pesanan->tanggal }}</td>
                                        <td>{{ $pesanan->customer->nama }}</td>
                                        <td>{{ $pesanan->cabang->nama }}</td>
                                        <td>{{ $pesanan->paket->nama }}</td>
                                        <td>{{ $pesanan->qty }}</td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route('admin.transaksi.pesanan.show', $pesanan->id) }}">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a>
                                            <a class="btn btn-info btn-sm"
                                                href="{{ route('admin.transaksi.pesanan.edit', $pesanan->id) }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <button type="button" data-toggle="modal"
                                                data-target="#delete{{ $pesanan->id }}"
                                                class="btn btn-danger btn-sm delete">
                                                <i class="fas fa-trash"></i>Delete
                                            </button>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>

@endsection
