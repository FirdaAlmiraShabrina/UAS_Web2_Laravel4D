@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Mahasiswa</div>

                <div class="card-body">
                    <form action="{{route('simpan.mahasiswa')}}" method="post">
                        @csrf

                        <div class="form grub">
                            <div class="form col">
                                <div class="row">
                                    <label for="name">Nama Mahasiswa</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        <option value="" disabled selected>Pilih Nama Mahasiswa</option>
                                        @foreach ($user as $u)
                                            <option value="{{ $u->id}}">{{$u->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <label for="npm">Npm</label>
                                    <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM" maxlength="5"> 
                                </div>
                                <div class="row">
                                    <label for="tempat">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir"> 
                                </div>
                                <div class="row">
                                    <label for="tanggal">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir"> 
                                </div>
                                <div class="row">
                                    <label for="alamat">Alamat</label>
                                    <input type="type" name="alamat" class="form-control" placeholder="Masukan Alamat"> 
                                </div>
                                <div class="row">
                                    <label for="telepon">Telepon</label>
                                    <input type="number" name="telepon" class="form-control" placeholder="Masukkan Telepon"> 
                                </div>
                                <div class="row">
                                    <label for="gender">gender</label>
                                    <br>
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="L">Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <br>
                            </div>
                            <div class="form-grub float-right">
                                <div class="form-row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                        <a href="{{route('mahasiswa')}}" class="btn btn-md btn-danger">BATAL</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection