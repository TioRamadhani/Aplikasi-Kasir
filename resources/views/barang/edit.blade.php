@extends('layouts.app')

@section('content')
    <div class="row bg-white">
        <div class="col-lg-12 mt-2 bg-white">
            <div>
                <h2>Edit Kategori</h2>
            </div>
            <div>
                <a class="btn btn-danger mb-2" href="{{ route('barang.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Maaf, Periksa Ulang Inputan Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barang.update', $barang->barang_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row bg-white">
            <div class="col-xs-12 col-sm-12 col-md-12 bg-white">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="nama" value="{{ $barang->nama }}" class="form-control"
                        placeholder="Name">
                </div>
                <div class="form-group">
                    <strong> Kategori :</strong>
                    <select class="form-control" id="position-option" name="kategori_id">
                        {{-- <option value="{{ $barang->kategori_id }}" selected>{{ $barang->kategori->nama }}</option> --}}
                        @foreach ($kategori as $listkategori)
                            <option value="{{ $listkategori->kategori_id }}"
                                {{ $barang->kategori_id == $listkategori->kategori_id ? 'selected' : '' }}>
                                {{ $listkategori->nama }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <strong>Harga Beli :</strong>
                    <input type="text" value="{{ $barang->harga_beli }}" name="harga_beli" class="form-control"
                        placeholder="Harga Beli">

                </div>
                <div class="form-group">
                    <strong>Harga Jual :</strong>
                    <input type="text" value="{{ $barang->harga_jual }}" name="harga_jual" class="form-control"
                        placeholder="Harga Jual">

                </div>
                <div class="form-group">
                    <strong>Jumlah Stok</strong>
                    <input type="text" name="stok" class="form-control" placeholder="Stok"
                        value="{{ $barang->stok->jumlah }}">

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-galang">Simpan</button>
            </div>
        </div>

    </form>
@endsection
