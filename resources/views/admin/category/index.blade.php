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
                <button type="button" class="btn btn-success float-right mr-3" data-toggle="modal"
                    data-target="#tambahkategori">Add Category</button>
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

                    @if ($errors->any())
                        <div class="alert alert-danger mt-2 alert-dismissible fade show" role="alert">
                            @foreach ($errors->all() as $error)
                                <span class="alert-text">{{ $error }}</span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table class="table table-hover nowrap">
                        <thead>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($categories as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->category }}</td>
                                    <td>
                                        <form action="{{ route('categorypost.delete', ['category' => $row->id]) }}"
                                            method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm text-white"><i
                                                    class="fa fa-trash fa-2x"></i></button>
                                        </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="tambahkategori" tabindex="-1" role="dialog" aria-labelledby="tambahLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('categorypost.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" id="kategori" name="kategori" class="form-control form-control-alternative"
                                placeholder="Kategori">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" cols="10" rows="5"
                                class="form-control form-control-alternative" placeholder="Keterangan"></textarea>
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
