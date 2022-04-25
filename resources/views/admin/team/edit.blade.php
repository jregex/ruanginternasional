@extends('layouts.main-admin')

@section('admin-content')
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3>{{ $title }}</h3>
                </div>
            </div>
            <div class="card-body border-0">
                <form action="{{ route('admin.team.update', ['tim_creator' => $team->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="nama">Nama *</label>
                        <input type="text" class="form-control form-control-alternative @error('nama') is-invalid @enderror"
                            name="nama" id="nama" placeholder="Nama" value="{{ $team->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email"
                            class="form-control form-control-alternative @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="Email" value="{{ $team->email }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan *</label>
                        <input type="text"
                            class="form-control form-control-alternative @error('jabatan') is-invalid @enderror"
                            name="jabatan" id="jabatan" placeholder="Jabatan" value="{{ $team->jabatan }}">
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar *</label>
                        <div class="row">
                            <div class="col-md-2 col-sm-12">
                                <img id="previewImg" width="200" height="200" class="img-thumbnail"
                                    src="{{ asset('storage/teams') }}/{{ $team->gambar }}" alt="">
                            </div>
                            <div class="col-md-10 col-sm-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('gambar') is-invalid @enderror"
                                        id="gambar" name="gambar" lang="en" value="{{ $team->gambar }}">
                                    @error('gambar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                </div>


                            </div>
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="testimoni">Testimony *</label>
                        <input id="x" type="hidden" name="testimoni" value="{{ $team->testimoni }}">
                        <trix-editor input="x"></trix-editor>
                        @error('testimoni')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <a href="{{ route('admin.team.list') }}" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
