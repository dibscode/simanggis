@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <nav class="flex text-sm text-gray-600" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6"></path></svg>
                    Dashboard
                </a>
            </li>
        </ol>
    </nav>
    
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800 py-4">Selamat Datang di Dashboard</h1>
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-blue-600 text-white rounded-lg p-6 shadow flex flex-col items-center">
            <div class="text-3xl font-bold">{{ $totalSekolah }}</div>
            <div class="mt-2">Data Sekolah</div>
        </div>
        <div class="bg-green-500 text-white rounded-lg p-6 shadow flex flex-col items-center">
            <div class="text-3xl font-bold">{{ $totalGuru }}</div>
            <div class="mt-2">Total Guru</div>
        </div>
        <div class="bg-yellow-400 text-white rounded-lg p-6 shadow flex flex-col items-center">
            <div class="text-3xl font-bold">{{ $totalSiswa }}</div>
            <div class="mt-2">Total Siswa</div>
        </div>
        <div class="bg-purple-500 text-white rounded-lg p-6 shadow flex flex-col items-center">
            <div class="text-3xl font-bold">{{ $totalDistribusi }}</div>
            <div class="mt-2">Total Distribusi</div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <h3 class="text-lg font-semibold mb-2">Statistik Hari Ini</h3>
        <div class="flex items-center space-x-4">
            <div class="text-2xl font-bold text-blue-700">{{ $siswaSudahMakan }}</div>
            <div class="text-gray-700">Siswa sudah dapat makan gratis hari ini</div>
        </div>
    </div>
@endsection