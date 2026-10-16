@extends('layouts.app')

@section('title', 'Konfirmasi')

@section('content')
    <h2>Konfirmasi Laporan</h2>

    <x-alert type="success">
        Laporan berhasil dikirim dan tersimpan ke database!
    </x-alert>

    <table>
        <tr>
            <td>Nama Pelapor</td>
            <td>{{ $laporan->nama_pelapor }}</td>
        </tr>
        <tr>
            <td>Lokasi Kejadian</td>
            <td>{{ $laporan->lokasi }}</td>
        </tr>
        <tr>
            <td>Tinggi Genangan</td>
            <td>{{ $laporan->tinggi_genangan }} cm</td>
        </tr>
        <tr>
            <td>Tanggal Kejadian</td>
            <td>{{ $laporan->tanggal_kejadian }}</td>
        </tr>
    </table>
@endsection