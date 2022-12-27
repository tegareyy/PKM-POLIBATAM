@extends('layouts.app') @section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan Proposal</h1>
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
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                                Ajukan Proposal
                            </a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Laporan PKM</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Other browsers</td>
                                        <td>All others</td>
                                        <td>-</td>
                                        <td>
                                            <a href="/admin/pengajuan-proposal/penilaian/1" class="btn btn-primary">
                                                Penilaian
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-success">
                                                <i class="fa fa-check"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection