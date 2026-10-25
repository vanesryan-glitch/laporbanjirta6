@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="auth-box">
        <h2>Login Petugas</h2>

        <div class="form-box">
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email') <div class="error-text">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    @error('password') <div class="error-text">{{ $message }}</div> @enderror
                </div>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>
@endsection