@extends('layouts.app')

@section('title', 'Manajemen Pengguna')

@section('content')
    <h2>Manajemen Pengguna (Khusus Admin)</h2>
    <p>Halaman ini hanya dapat diakses oleh role <strong>Admin</strong>.</p>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection