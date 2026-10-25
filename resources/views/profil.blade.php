@extends('layouts.app')

@section('title', 'Profil Petugas')

@section('content')
    <h2>Profil Petugas</h2>

    <table>
        <tr>
            <td>Nama</td>
            <td>{{ Auth::user()->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ Auth::user()->email }}</td>
        </tr>
        <tr>
            <td>Akun Dibuat</td>
            <td>
                {{ Auth::user()->created_at->format('d-m-Y H:i') }}
                ({{ Auth::user()->created_at->diffForHumans() }})
            </td>
        </tr>
    </table>
@endsection