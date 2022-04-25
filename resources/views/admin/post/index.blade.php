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
                <a href="{{ route('posts.create') }}" class="btn btn-success mb-3 float-right">Add Post</a>
                <div class="card-box table-responsive">
                    <table class="table table-hover nowrap" id="tabel-post">
                        <thead align="center">
                            <th>No</th>
                            <th>Title</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody align="center">
                            @foreach ($posts as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row['title'] }}</td>
                                    <td>{{ $row->category->category }}</td>
                                    <td>
                                        <div class="btn-group" aria-pressed="true">
                                            <form action="{{ route('posts.destroy', ['post' => $row['id']]) }}"
                                                method="POST" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash fa-2x"></i></button>
                                            </form>
                                            <a href="{{ route('posts.show', ['post' => $row->id]) }}"
                                                class="btn btn-primary btn-sm"><i class="fa fa-eye fa-2x"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
