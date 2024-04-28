@extends('layouts.app')
@section('content')
    <div class="container-xxl container-p-y">
        <div class="row">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Daftar Modul Infus</h5>
                <div class="row">

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Infus</th>

                                <th>Nama Pasien</th>
                                <th>Mac</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                                <td>Albert Cook</td>
                                <td>Albert Cook</td>
                                <td>FKASDHFA0987423LKJDFD</td>

                                <td>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="{{ route('detail-pasien.show') }}">
                                                <button class="form-control"><i class="bx bx-user"></i> Detail</button></a>
                                        </div>

                                        <div class="col-lg-4">
                                            <button class="form-control bg-danger text-white">
                                                <i class="bx bx-trash"></i> Hapus
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->

            <hr class="my-5" />
        </div>
    </div>
@endsection
