@extends('layout.layout')
@section('content')
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-item-center">
                                    <h4 class="card-title">{{ $title }}</h4>
                                    <button type="button" class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalCreate">
                                        <i class="fa fa-plus"></i>
                                        Tambah Data
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                @foreach ($data_profile as $d)
                                <form method="POST" action="/admin/profile/update/{{ $d->id }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" name="name" value="{{ $d->name }}" placeholder="Nama Lengkap ..." required>
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <input type="text" class="form-control" name="role" value="{{ $d->role }}" placeholder="Role ..." disabled>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" value="{{ $d->email }}" placeholder="Email ..." required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="password" value="{{ $d->password }}" placeholder="Password ..." required>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Save Changes</i></button>
                                </div>
                                @endforeach
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
@endsection
