@extends('layouts.main-admin')

@section('dataTable-css')
    <!-- Datatables -->

    <link href="{{ asset('assets/admin') }}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/admin') }}/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"
        rel="stylesheet">
    <link href="{{ asset('assets/admin') }}/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"
        rel="stylesheet">
    <link href="{{ asset('assets/admin') }}/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"
        rel="stylesheet">
@endsection

@section('admin-content')
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ $title }}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="ml-3">
                    <a href="{{ route('admin.galleries') }}" class="btn btn-primary">Kembali</a>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Upload
                        Photo</button>

                </div>
                <div class="card-box table-responsive">
                    @if (session()->has('success'))
                        <div class="alert alert-success mt-2 alert-dismissible fade show" role="alert">
                            <span class="alert-text">{{ session()->get('success') }}</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @elseif(session()->has('failed'))
                        <div class="alert alert-danger mt-2 alert-dismissible fade show" role="alert">
                            <span class="alert-text">{{ session()->get('failed') }}</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table class="table table-hover nowrap" id="tabel-gallery" style="width:100%">
                        <thead align="center">
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Tanggal Upload</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody align="center">
                            @foreach ($galleries as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="{{ asset('storage/gallery') }}/{{ $row['nama_file'] }}"><img
                                                src="{{ asset('storage/gallery') }}/{{ $row['nama_file'] }}"
                                                alt="gallery" width="300"></a></td>
                                    <td>{{ date('d-m-Y', strtotime($row['tgl_upload'])) }}</td>
                                    <td>
                                        <form action="{{ route('admin.subgallery.delete', ['id' => $row['id']]) }}"
                                            method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm text-white"><i
                                                    class="fa fa-trash fa-2x"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambah" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        aria-labelledby="tambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahLabel">Tambah Gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.storesubgallery') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="kategori_id" name="kategori_id" value="{{ $id }}">

                        <div class="form-group">
                            <input type="text" class="form-control form-control-alternative" name="nama" id="nama"
                                placeholder="Nama">
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label>

                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <img id="previewImg" width="400" height="400" class="img-thumbnail" alt="">
                                </div>
                                <div class="col-md-9 col-sm-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="nama_file" id="gambar">
                                        <label class="custom-file-label" for="nama_file">Choose file</label>
                                        <small class="text-success mt-4">Size maks. 2 MB dan jenis Gambar</small>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('dataTable-js')
    <!-- Datatables -->
    <script src="{{ asset('assets/admin') }}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/admin') }}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('assets/admin') }}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets/admin') }}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    {{-- <script src="{{ asset('assets/admin') }}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script> --}}
    <script src="{{ asset('assets/admin') }}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('assets/admin') }}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets/admin') }}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js">
    </script>
    <script src="{{ asset('assets/admin') }}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets/admin') }}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{ asset('assets/admin') }}/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{ asset('assets/admin') }}/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('assets/admin') }}/vendors/pdfmake/build/vfs_fonts.js"></script>
@endsection
