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
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control form-control-alternative @error('title') is-invalid @enderror"
                            name="title" id="title" placeholder="Title" value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sumber">Sumber</label>
                        <input type="sumber"
                            class="form-control form-control-alternative @error('sumber') is-invalid @enderror" name="sumber"
                            id="sumber" placeholder="Sumber" value="{{ old('sumber') }}">
                        @error('sumber')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control form-control-alternative">
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->category }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <div class="row">
                            <div class="col-md-2 col-sm-12">
                                <img id="previewImg" width="200" height="200" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-md-10 col-sm-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('gambar') is-invalid @enderror"
                                        id="gambar" name="gambar" lang="en">
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
                        <label for="body">Body</label>
                        <input id="x" type="hidden" name="body">
                        <trix-editor input="x"></trix-editor>
                        @error('body')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <a href="{{ route('posts.index') }}" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
