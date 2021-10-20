@extends('layouts.main-admin')

@section('admin-content')

        <div class="col-xl-4 order-xl-2">
            <div class="card card-box">

              <div class="row justify-content-center mt-4">
                <div class="col-lg-3 order-lg-2">
                  <div class="crop-avatar">
                      <img class="img-circle profile_img" src="{{ asset('assets/admin') }}/images/profile/{{ session()->get('akun-admin.gambar') }}">
                  </div>
                </div>
              </div>
              <div class="card-body pt-0 py-4 mt-2">

                <div class="text-center">
                  <h5 class="h3">
                    {{ session()->get('akun-admin.username') }}
                  </h5>
                  <div class="h5 font-weight-300">
                    <i class="fa fa-envelope"></i> {{ session()->get('akun-admin.email') }}
                  </div>
                  <div class="h5 mt-4">
                    <i class="fa fa-key"></i> {{(session()->get('akun-admin.role_id')==1) ? 'Administrator':'Operator'}}
                  </div>
                  <div>
                    {{session()->get('akun-admin.nama')}}
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-xl-8 order-xl-1">
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">My Profile</h3>
                  </div>
                </div>
              </div>
              <div class="card-body border-0">
                @if (session()->has('pesan-berhasil'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-text">{{ session()->get('pesan-berhasil') }}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @elseif(session()->has('pesan-gagal'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-text">{{ session()->get('pesan-gagal') }}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                @endif
                <form action="{{ route('users.update-profil', ['id' => session()->get('akun-admin.id')]) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text"
                            class="form-control form-control-alternative @error('nama') is-invalid @enderror"
                            name="nama" id="nama" placeholder="Nama" value="{{ session()->get('akun-admin.nama') }}"
                            disabled>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text"
                            class="form-control form-control-alternative @error('username') is-invalid @enderror"
                            name="username" id="username" placeholder="Username"
                            value="{{ session()->get('akun-admin.username') }}" disabled>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email"
                            class="form-control form-control-alternative @error('email') is-invalid @enderror"
                            name="email" id="email" placeholder="Email"
                            value="{{ session()->get('akun-admin.email') }}" disabled>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text"
                            class="form-control form-control-alternative @error('password') is-invalid @enderror"
                            name="password" id="password" placeholder="Password"
                            value="{{ session()->get('akun-admin.password') }}" disabled>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gambar">Profil</label>
                        <div class="row">
                            <div class="col-md-2 col-sm-12">
                                <img id="previewImg" width="200" height="200" class="img-thumbnail" alt=""
                                    src="{{ asset('assets/admin') }}/images/profile/{{ session()->get('akun-admin.gambar') }}">
                            </div>
                            <div class="col-md-10 col-sm-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('gambar') is-invalid @enderror"
                                        id="gambar" name="gambar" value="{{ session()->get('akun-admin.gambar') }}"
                                        disabled>
                                    @error('gambar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <label class="custom-file-label disabled"
                                        for="gambar">{{ session()->get('akun-admin.gambar') }}</label>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-success" id="btnEdit">Edit</button>
                        <button type="submit" class="btn btn-secondary" id="btnUpdate" disabled>Update</button>
                    </div>

                </form>
            </div>
            </div>
          </div>
@endsection
