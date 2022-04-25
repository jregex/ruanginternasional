@extends('layouts.main-admin')

@section('admin-content')
<div class="col-md-12 col-sm-12">
    <div class="x_panel">
    <div class="x_title">
        <h2>{{$title}}</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
            <div class="card border-0">
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('message') }}
                        </div>

                    @endif
                    <form action="{{ route('users.change') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="password" id="oldPassword" name="oldPassword"
                                class="form-control form-control-alternative @error('oldPassword') is-invalid @enderror"
                                placeholder="Current Password">
                            @error('oldPassword')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="custom-control custom-control-alternative custom-checkbox mb-4">
                            <input class="custom-control-input" id="showPass" type="checkbox">
                            <label class="custom-control-label" for="showPass">
                                <span class="text-muted">Show Password</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="newPassword"
                                class="form-control form-control-alternative @error('newPassword') is-invalid @enderror"
                                placeholder="Password Baru">
                            @error('newPassword')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="confirmPassword" id="confirmPassword"
                                class="form-control form-control-alternative @error('confirmPassword') is-invalid @enderror"
                                placeholder="Konfirmasi Password">
                            @error('confirmPassword')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="custom-control custom-control-alternative custom-checkbox mb-4">
                            <input class="custom-control-input" id="showPass2" type="checkbox">
                            <label class="custom-control-label" for="showPass2">
                                <span class="text-muted">Show Password</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('users.list') }}" class="btn btn-secondary">Batal</a>
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
@endsection

