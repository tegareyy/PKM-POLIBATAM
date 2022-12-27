@extends('layouts.app') @section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Formulir Penilaian Proposal</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kriteria</th>
                                        <th>Bobot</th>
                                        <th>Skor</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kreatifitas:
                                            Gagasan Usaha(Analisis Peluang Pasar)</td>
                                        <td>15</td>
                                        <td>
                                            <input type="number" class="form-control" style="max-width: 150px">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" style="max-width: 150px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Keunggulan Produk:
                                            Berbasis IPTEK, Unik, Dan Bermanfaat</td>
                                        <td>20</td>
                                        <td>
                                            <input type="number" class="form-control" style="max-width: 150px">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" style="max-width: 150px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Rancangan Usaha:</td>
                                        <td>20</td>
                                        <td>
                                            <input type="number" class="form-control" style="max-width: 150px">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" style="max-width: 150px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Potensi Program <br> Potensi Pelaksanaan Keberlanjutan
                                            Usaha dan personalia</td>
                                        <td>15</td>
                                        <td>
                                            <input type="number" class="form-control" style="max-width: 150px">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" style="max-width: 150px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Penjadwalan Kegiatan
                                            (Lengkap,jelas,waktu,dan personal)</td>
                                        <td>5</td>
                                        <td>
                                            <input type="number" class="form-control" style="max-width: 150px">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" style="max-width: 150px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Penyusunan Anggaran Biaya.
                                            (Lengkap,rinci,wajar,dan jelas)</td>
                                        <td>5</td>
                                        <td>
                                            <input type="number" class="form-control" style="max-width: 150px">
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" style="max-width: 150px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">TOTAL</td>
                                        <td>
                                            <b>100</b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="d-md-flex justify-content-between mt-3">
                                <div class="">
                                    <p>
                                        Keterangan: <br>
                                        Skor : 1=Buruk, 2=Kurang, 3= Cukup, 4=Baik, 5=Sangat Baik
                                    </p>
                                </div>
                                <div class="">
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-danger mr-3">Batal</button>
                                        <button class="btn btn-success">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection