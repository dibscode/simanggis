@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-blue-600 text-white rounded-lg p-6 shadow flex flex-col items-center">
        <div class="text-3xl font-bold">{{ $totalSekolah }}</div>
        <div class="mt-2">Total Sekolah</div>
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