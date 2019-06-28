@extends('layouts.app')
@section('title', 'Edit Barang')

@section('content')

  <main class="my-5">
      <div class="container">
          <div class="d-flex justify-content-between align-items-center mb-4">
              <h5>Edit Barang</h5>
          </div>

          @foreach($barang as $b)
              <form action="/update" method="post">
                  {{ csrf_field() }}

                  <input type="hidden" name="id" value="{{ $b->id }}">

                  <div class="form-group row">
                      <label for="kode" class="col-form-label col-2">Kode:</label>
                      <div class="col-10">
                          <input type="text" class="form-control" id="kode" required name="kode" value="{{ $b->kode }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="nama" class="col-form-label col-2">Nama:</label>
                      <div class="col-10">
                          <input type="text" class="form-control" id="nama" required name="nama" value="{{ $b->nama }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="deskripsi" class="col-form-label col-2">Deskripsi:</label>
                      <div class="col-10">
                          <textarea class="form-control" id="deskripsi" required name="deskripsi">{{ $b->deskripsi }}</textarea>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="stok" class="col-form-label col-2">Stok:</label>
                      <div class="col-10">
                          <input type="text" class="form-control" id="stok" required name="stok" value="{{ $b->stok }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="harga" class="col-form-label col-2">Harga:</label>
                      <div class="col-10">
                          <input type="text" class="form-control" id="harga" required name="harga" value="{{ $b->harga }}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="berat" class="col-form-label col-2">Berat:</label>
                      <div class="col-10">
                          <input type="text" class="form-control" id="berat" required name="berat" value="{{ $b->berat }}">
                      </div>
                  </div>

                  <div class="text-center">
                      <a class="btn btn-secondary" href="/">Batal</a>
                      <button class="btn btn-success" type="submit">Update</button>
                  </div>

              </form>
          @endforeach

      </div>
  </main>

@endsection