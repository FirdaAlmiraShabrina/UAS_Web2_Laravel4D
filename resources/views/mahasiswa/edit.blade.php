@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('mahasiswa.update', $mhs->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form grub">
                            <div class="form col">
                            <div class="row">
                            <label for="name">Nama Mahasiswa</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        <option value="" disabled selected>Pilih Nama Lengkap</option>
                                        @foreach ($user as $u)
                                            <option value="{{ $u->id}}"{{$mhs->user_id == $u->id ? 'selected': ''}}>{{$u->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                                <div class="row">
                                    <label for="npm">Npm</label>
                                    <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM" value="{{$mhs->npm}}"> 
                                </div>
                                <div class="row">
                                    <label for="tanggal">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" value="{{is_null($mhs) ? '' : $mhs->tgl_lahir}}"> 
                                </div>
                                <div class="row">
                                    <label for="tempat">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" value="{{is_null($mhs) ? '' : $mhs->tempat_lahir}}"> 
                                </div>
                                <div class="row">
                                    <label for="alamat">Alamat</label>
                                    <input type="type" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="{{is_null($mhs) ? '' : $mhs->alamat}}"> 
                                </div>
                                <div class="row">
                                    <label for="telepon">Telepon</label>
                                    <input type="number" name="telepon" class="form-control" placeholder="Masukkan Nomor Telepon" value="{{is_null($mhs) ? '' : $mhs->telepon}}"> 
                                </div>
                                <div class="row">
                                    <label for="gender">Gender</label>
                                    <br>
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="L"{{ $mhs->gender == 'L' ? 'selected' : ''}}>Laki - Laki</option>
                                        <option value="P"{{ $mhs->gender == 'P' ? 'selected' : ''}}>Perempuan</option>
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