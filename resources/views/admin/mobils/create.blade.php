@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('mobils.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="Fakultas">Fakultas</label>
                    <input type="text" name="Fakultas" class="form-control" placeholder="Masukan Fakultas"
                        value="{{ old('Fakultas') }}" />
                </div>
                <div class="form-group">
                    <label for="Prestasi">Prestasi</label>
                    <input type="text" name="Prestasi" class="form-control" placeholder="Masukan Prestasi"
                        value="{{ old('Prestasi') }}" />
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Masukan Slug"
                        value="{{ old('slug') }}" />
                </div>
                <div class="form-group">
                    <label for="Tahun">Tahun</label>
                    <input type="date" name="Tahun" class="form-control" placeholder="Masukan Tahun"
                        value="{{ old('Tahun') }}" />
                </div>
                <div class="form-group">
                    <label for="PublikasiTerkini">Publikasi Terkini</label>
                    <input type="text" name="PublikasiTerkini" class="form-control" placeholder="Masukan Publikasi Terkini"
                        value="{{ old('PublikasiTerkini') }}" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
