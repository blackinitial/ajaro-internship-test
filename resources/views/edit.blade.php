@extends('layouts.app')
@section('title', 'Edit Barang')

@section('content')

  <main class="my-5">
      <div class="container">
          <div class="d-flex justify-content-between align-items-center mb-4">
              <h5>Edit Barang</h5>
          </div>

          <form>
              <div class="form-group row">
                  <label for="code" class="col-form-label col-2">Kode:</label>
                  <div class="col-10">
                      <input type="text" class="form-control" id="code">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="name" class="col-form-label col-2">Nama:</label>
                  <div class="col-10">
                      <input type="text" class="form-control" id="name">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="description" class="col-form-label col-2">Deskripsi:</label>
                  <div class="col-10">
                      <textarea class="form-control" id="description"></textarea>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="stock" class="col-form-label col-2">Stok:</label>
                  <div class="col-10">
                      <input type="text" class="form-control" id="stock">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="price" class="col-form-label col-2">Harga:</label>
                  <div class="col-10">
                      <input type="text" class="form-control" id="price">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="weight" class="col-form-label col-2">Berat:</label>
                  <div class="col-10">
                      <input type="text" class="form-control" id="weight">
                  </div>
              </div>

              <div class="text-center">
                  <a class="btn btn-secondary" href="/">Batal</a>
                  <button class="btn btn-success">Update</button>
              </div>

          </form>

      </div>
  </main>

@endsection