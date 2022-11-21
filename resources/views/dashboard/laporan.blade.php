@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="heade" style="color: #4b4f58;">Laporan</h2>
                <hr style="margin-top: -2px;">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <label for="inputPilih" class="form-label">Jenis Laporan</label>
                        <select id="inputpilih" class="form-select">
                            <option>Mingguan</option>
                            <option>Bulanan</option>
                            <option>Tahunan</option>
                        </select>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-5">
                        <div class="mb-3">
                            <label for="inputdate" class="form-label">Pilih Tanggal</label>
                            <input type="date" id="inputdate" class="form-control"
                                style="border: 1px solid #ddd !important" placeholder="Disabled input">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3">
                            <label for="inputdate" class="form-label">Pilih Tanggal</label>
                            <input type="date" id="inputdate" class="form-control"
                                style="border: 1px solid #ddd !important" placeholder="Disabled input">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary mt-4">Tampilkan</button>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-10">
                        <h5>Data Mingguan</h5>
                        <p class="mt-2">Menampilkan Data dari Tanggal<strong> 23 7 2022</strong> samapai <strong> 30 7
                                2022</strong></p>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-warning mt-2 text-white">Cetak</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th>Keterangan</th>
                                    <th>Jumlah Pemasukkan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>
                                        <a href="" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg></a>
                                        <a href="" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor" class="bi bi-trash-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg></a>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="char">
                    <canvas id="myChart" width="600" height="400"></canvas>
                    <script type="text/javascript" src="resources/js/chart.js"></script>
                </div>
            </div>
        </div>
    </div>
@endsection
