@extends('dashboard.index')
@extends('dashboard.index')
@section('konten')
@section('konten')
    <div class="pb-3"><a href="{{ route('education.index') }} " class="btn btn-secondary">Kembali</a></div>
    <form action=" {{ route('education.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Universitas</label>
            <input type="text" class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId"
                placeholder="Posisi" value="{{ $data->judul }} ">

        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Nama Fakultas</label>
            <input type="text" class="form-control form-control-sm" name="info1" id="info1"
                aria-describedby="helpId" placeholder="Nama Perusahaan" value="{{ $data->info1 }} ">

        </div>
        <div class="mb-3">
            <label for="info2" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control form-control-sm" name="info2" id="info2"
                aria-describedby="helpId" placeholder="Nama Perusahaan" value="{{ $data->info2 }} ">

        </div>
        <div class="mb-3">
            <label for="info3" class="form-label">IPK</label>
            <input type="text" class="form-control form-control-sm" name="info3" id="info3"
                aria-describedby="helpId" placeholder="Nama Perusahaan" value="{{ $data->info3 }} ">

        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai"
                        placeholder="dd/mm/yyyy" value="{{ $data->tgl_mulai }} "></div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_akhir"
                        placeholder="dd/mm/yyyy" {{ $data->tgl_akhir }}></div>
            </div>
        </div>
        {{-- <div class="mb-3">
            <label for="isi" class="form-label">ISI</label>
            <textarea class="form-control summernote" name="isi" rows="5">{{ Session::get('isi') }} </textarea>
        </div> --}}
        <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
    </form>
@endsection
