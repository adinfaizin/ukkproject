@extends('layouts.app')
  
@section('title', 'Tambah Barang')
  
@section('contents')
    <h1 class="mb-0">Tambah Barang</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
            <label class="form-label">Tanggal Input</label>
                <input type="date" name="tanggal" class="form-control" placeholder="tanggal">
            </div>
            <div class="col">
            <label class="form-label">Kavling</label>
                <input type="text" name="kavling" class="form-control" placeholder="kavling">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
            </div>
            <div class="col">
            <label class="form-label">Satuan</label>
                <input type="num" name="satuan" class="form-control" placeholder="Satuan">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button style="display:flex" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection