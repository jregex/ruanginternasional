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
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ $title }}</h2>
                <div class="clearfix"></div>
            </div>
            <a href="{{ route('admin.team.create') }}" class="btn btn-success mr-3 float-right">Add Team</a>
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
                <table class="table table-hover nowrap" id="tabel-team">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($teams as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->jabatan }}</td>
                                <td><img src="{{ asset('storage/teams') }}/{{ $row->gambar }}" width="100"></td>
                                <td>
                                    <div class="btn-group" aria-pressed="true">
                                        <form action="{{ route('admin.team.delete', ['id' => $row->id]) }}" method="POST"
                                            class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm text-white"><i
                                                    class="fa fa-trash fa-2x"></i></button>
                                        </form>
                                        <a href="{{ route('admin.team.edit', ['tim_creator' => $row->id]) }}"
                                            class="btn btn-sm btn-warning text-white"><i class="fa fa-edit fa-2x"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
