@extends('layouts.app')

@section('title', 'Lihat Nilai Pribadi')

@section('content')
    <h2>Kartu Hasil Studi / Nilai Pribadi</h2>
    <p>Halaman ini dapat diakses oleh role <strong>Admin</strong> dan <strong>Mahasiswa</strong>.</p>
    <table>
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pemrograman Web</td>
                <td>3</td>
                <td>A</td>
            </tr>
        </tbody>
    </table>
@endsection