@extends('layouts.main-admin')

@section('admin-content')
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{ $title }}</h2>
                <div class="clearfix"></div>
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
                <table class="table table-hover nowrap">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->subjek }}</td>
                                <td>{{ $row->pesan }}</td>
                                <td>
                                    <form action="{{ route('delete-contact', ['id' => $row->id]) }}" method="POST"
                                        class="d-inline">
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
@endsection
