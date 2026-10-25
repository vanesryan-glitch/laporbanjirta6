@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="auth-box">
        <h2>Register Petugas</h2>

        <div class="form-box">
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name') <div class="error-text">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email') <div class="error-text">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    @error('password') <div class="error-text">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>

                <button type="submit">Register</button>
            </form>
        </div>
    </div>
@endsection