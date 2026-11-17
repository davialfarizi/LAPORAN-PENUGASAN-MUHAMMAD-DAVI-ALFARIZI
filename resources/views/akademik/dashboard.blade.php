@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Dashboard Akademik</h2>
    <p>Selamat datang, <strong>{{ auth()->user()->name }}</strong>.</p>
    <p>Role aktif Anda saat ini adalah: <strong>{{ strtoupper(auth()->user()->role) }}</strong>.</p>
    <p>Gunakan menu navigasi di atas untuk menguji hak akses setiap route pada aplikasi.</p>
@endsection