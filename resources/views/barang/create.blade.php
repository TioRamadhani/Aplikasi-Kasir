@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 bg-white">
            <div>
                <h2 class="mt-3">Tambah Barang</h2>
            </div>
            <div>
                <a class="btn btn-galang mb-2" href="{{ route('barang.index') }}"> Kembali </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf

        <div class="row bg-white">
            <div class="col-xs-12 col-sm-12 col-md-12 bg-white">
                <div class="form-group">
                    <strong>Nama Barang :</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">

                </div>
                <div class="form-group">
                    <strong> Kategori :</strong>
                    <select class="form-control" id="position-option" name="kategori_id">
                        @foreach ($barangs as $barang)
                            <option value="{{ $barang->kategori_id }}">{{ $barang->nama }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <strong>Harga Beli :</strong>
                    <input type="text" name="harga_beli" class="form-control" placeholder="Harga Beli">

                </div>
                <div class="form-group">
                    <strong>Harga Jual :</strong>
                    <input type="text" name="harga_jual" class="form-control" placeholder="Harga Jual">

                </div>
                <div class="form-group">
                    <strong>Jumlah Stok</strong>
                    <input type="text" name="stok" class="form-control" placeholder="Stok">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-galang">Simpan</button>
            </div>
        </div>

    </form>
@endsection
