@extends('layouts.admin')

@section('title', 'Detail Siswa')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-6">Detail Siswa</h2>
    <div class="mb-4">
        <strong>Nama:</strong> {{ $student->name }}
    </div>
    <div class="mb-4">
        <strong>NISN:</strong> {{ $student->nisn }}
    </div>
    <div class="mb-4">
        <strong>Jenis Kelamin:</strong> {{ $student->gender }}
    </div>
    <div class="mb-4">
        <strong>Kelas:</strong> {{ $student->classes->class_name ?? 'Belum Mempunyai Kelas!' }}
    </div>
    <div class="flex justify-end">
        <a href="{{ route('students.index') }}" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Kembali</a>
    </div>
</div>
@endsection