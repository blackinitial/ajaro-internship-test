<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-dark bg-dark" style="justify-content: center">
                <div class="navbar-brand text-uppercase">Kelola Data Barang</div>
            </nav>
        </header>

        <main class="my-5">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5>Data Barang</h5>
                    <button class="btn btn-success" data-toggle="modal" data-target="#addData">Tambah</button>
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
                        <tr>
                            <th>1234</th>
                            <th>Meja</th>
                            <th>Rp 250.000</th>
                            <th>
                                <button class="btn btn-info btn-sm mr-2">Edit</button>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteData">Hapus</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>

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

        <!-- delete modal -->
        <div class="modal fade" id="deleteData" tabindex="-1" role="dialog" aria-labelledby="deleteDataLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteDataLabel">Hapus Data Barang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6>Hapus Barang ini ?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
