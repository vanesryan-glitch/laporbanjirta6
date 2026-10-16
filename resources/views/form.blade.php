@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <h2>Form Pelaporan Banjir</h2>

    {{-- Tampilkan pesan jika ada input yang salah --}}
    @if ($errors->any())
        <x-alert type="danger">
            Data belum lengkap atau tidak valid, silakan periksa kembali.
        </x-alert>
    @endif

    <div class="form-box">
        <form action="{{ route('laporan.simpan') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama_pelapor">Nama Pelapor</label>
                <input type="text" id="nama_pelapor" name="nama_pelapor"
                       value="{{ old('nama_pelapor') }}" required>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi Kejadian</label>
                <input type="text" id="lokasi" name="lokasi"
                       value="{{ old('lokasi') }}" required>
            </div>

            <div class="form-group">
                <label for="tinggi_genangan">Tinggi Genangan (cm)</label>
                <input type="number" id="tinggi_genangan" name="tinggi_genangan"
                       value="{{ old('tinggi_genangan') }}" min="0" required>
            </div>

            <div class="form-group">
                <label for="tanggal_kejadian">Tanggal Kejadian</label>
                <input type="date" id="tanggal_kejadian" name="tanggal_kejadian"
                       value="{{ old('tanggal_kejadian') }}" required>
            </div>

            <button type="submit">Kirim Laporan</button>
        </form>
    </div>
@endsection