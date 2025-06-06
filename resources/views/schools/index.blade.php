@extends('layouts.admin')

@section('title', 'Informasi Sekolah')

@section('content')
    <div class="mb-6">
        <nav class="flex text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center text-blue-600 hover:underline">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6"></path></svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <span class="mx-2 text-gray-400">/</span>
                </li>
                <li class="inline-flex items-center text-gray-500">
                    Data Sekolah
                </li>
            </ol>
        </nav>
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
