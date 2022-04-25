@extends('layouts.main-admin')

@section('admin-content')
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card-title">
                            <h3 class="mb-0">{{ $title }} </h3>
                        </div>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('posts.index') }}" class="btn btn-danger">Kembali</a>
                        <a href="{{ $post->published == 1 ? 'javascript:void(0)' : route('post.published', ['post' => $post->id]) }}"
                            class="btn btn-success {{ $post->published == 1 ? 'disabled' : '' }}">Publish</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="text-right">
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">Edit</a>
                </div>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
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
                            <h1>{{ $post->title }}</h1>
                            <hr>
                            <img src="{{ asset('storage/post') }}/{{ $post->gambar }}" class="img-thumbnail img-fluid"
                                alt="" width="700">
                            <p class="text-muted">Tanggal : {{ $post->created_at }}</p>
                            <p class="text-muted">Sumber : {{ $post->sumber }}</p>
                            <p class="text-muted">Penulis : {{ $post->penulis }}</p>
                            <p class="text-muted">Kategori : {{ $post->category->category }}</p>

                        </div>
                    </div>
                </div>
                <hr class="my-4" />
                <h6 class="heading-small text-muted mb-4">Isi</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            {!! $post->body !!}
                        </div>
                    </div>
                </div>
                <hr class="my-4" />

            </div>
        </div>
    @endsection
