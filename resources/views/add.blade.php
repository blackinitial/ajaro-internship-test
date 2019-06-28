@extends('layouts.app')
@section('title', 'Tambah Barang')

@section('content')

  <main class="my-5">
      <div class="container">
          <div class="d-flex justify-content-between align-items-center mb-4">
              <h5>Tambah Barang</h5>
          </div>

          <form action="/store" method="post">
              {{ csrf_field() }}

              <div class="form-group row">
                  <label for="kode" class="col-form-label col-2">Kode:</label>
                  <div class="col-10">
                      <input type="text" class="form-control" id="kode" required name="kode">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="nama" class="col-form-label col-2">Nama:</label>
                  <div class="col-10">
                      <input type="text" class="form-control" id="nama" required name="nama">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="deskripsi" class="col-form-label col-2">Deskripsi:</label>
                  <div class="col-10">
                      <textarea class="form-control" id="deskripsi" required name="deskripsi"></textarea>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="stok" class="col-form-label col-2">Stok:</label>
                  <div class="col-10">
                      <input type="text" class="form-control" id="stok" required name="stok">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="harga" class="col-form-label col-2">Harga:</label>
                  <div class="col-10">
                      <input type="text" class="form-control" id="harga" required name="harga">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="berat" class="col-form-label col-2">Berat:</label>
                  <div class="col-10">
                      <input type="text" class="form-control" id="berat" required name="berat">
                  </div>
              </div>

              <div class="text-center">
                  <a class="btn btn-secondary" href="/">Batal</a>
                  <button class="btn btn-success" type="submit">Tambah</button>
              </div>

          </form>

      </div>
  </main>

@endsection