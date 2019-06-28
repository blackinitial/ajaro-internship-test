@extends('layouts.app')
@section('title', 'Daftar Barang')

@section('content')

  <main class="my-5">
      <div class="container">
          <div class="d-flex justify-content-between align-items-center mb-4">
              <h5>Data Barang</h5>
              <!-- <button class="btn btn-success" data-toggle="modal" data-target="#addData">Tambah</button> -->
              <a class="btn btn-success" href="/add">Tambah</a>
          </div>

          <table class="table">
              <thead>
                  <tr>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              
              <tbody>
                  @foreach($barang as $b)
                    <tr>
                        <th>{{ $b->kode }}</th>
                        <th class="text-capitalize">{{ $b->nama }}</th>
                        <th>Rp {{ $b->harga }}</th>
                        <th>
                            <a class="btn btn-info btn-sm mr-2" href="/edit/{{ $b->id }}">Edit</a>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteData">Hapus</button>
                        </th>
                    </tr>

                  @endforeach
              </tbody>
          </table>
      </div>

      <!-- add modal -->
      <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addDataLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="addDataLabel">Input Data Barang</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
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
                              <button class="btn btn-success">Tambah</button>
                          </div>

                      </form>
                  </div>
              </div>
          </div>
      </div>
  </main>

@endsection