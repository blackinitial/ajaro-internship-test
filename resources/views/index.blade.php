@extends('layouts.app')
@section('title', 'Daftar Barang')

@section('content')

  <main class="my-5">
      <div class="container">
          <div class="d-flex justify-content-between align-items-center mb-4">
              <h5>Data Barang</h5>
              <a class="btn btn-success" href="/add">Tambah</a>
          </div>

          <table class="table">
              <thead>
                  <tr>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              
              <tbody>
                  @foreach($barang as $b)
                    <tr>
                        <th>{{ $b->kode }}</th>
                        <th class="text-capitalize">{{ $b->nama }}</th>
                        <th>Rp {{ $b->harga }}</th>
                        <th>{{ $b->stok }}</th>
                        <th>
                            <a class="btn btn-info btn-sm mr-2" href="/edit/{{ $b->id }}">Edit</a>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteData{{ $b->id }}">Hapus</button>

                            <!-- delete modal -->
                            <div class="modal fade" id="deleteData{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteData{{ $b->id }}Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteData{{ $b->id }}Label">Hapus Data Barang</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h6>Hapus <span class="text-capitalize">{{ $b->nama }}</span> ?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <a class="btn btn-danger" href="/delete/{{ $b->id }}">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </th>
                    </tr>

                  @endforeach
              </tbody>
          </table>
      </div>

  </main>

@endsection