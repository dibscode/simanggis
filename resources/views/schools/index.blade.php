@extends('layouts.admin')

@section('title', 'Informasi Sekolah')

@section('content')
    <div class="mb-6">
        <a href="#" class="text-blue-600 hover:underline">&larr; Kembali ke Dashboard</a>
        {{-- Kalau “Dashboard” berbeda route, ubah “#” sesuai route-nya, misal route('dashboard') --}}
    </div>

    <div class="bg-white rounded shadow p-6">
        <h2 class="text-2xl font-bold mb-4">Profil Sekolah</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <p class="text-gray-600">Nama Sekolah:</p>
                <p class="font-semibold text-gray-900">{{ $school->school_name }}</p>
            </div>
            <div>
                <p class="text-gray-600">Alamat:</p>
                <p class="font-semibold text-gray-900">{{ $school->address }}</p>
            </div>
            <div>
                <p class="text-gray-600">Nomor Kontak:</p>
                <p class="font-semibold text-gray-900">{{ $school->contact_number }}</p>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('school.detail') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Edit Informasi
            </a>
        </div>
    </div>
@endsection
