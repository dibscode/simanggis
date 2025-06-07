@extends('layouts.admin')

@section('title', 'Daftar Kelas')

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
                        Data Kelas
                    </a>
                </li>
            </ol>
        </nav>
    </div>
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold">Daftar Kelas</h2>
        @if (session('success'))
            <div class="px-4 py-2 text-green-800 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('class.add') }}"
           class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
            + Tambah Kelas
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border rounded shadow">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Nama Kelas</th>
                    <th class="px-4 py-2 border">Wali Kelas</th>
                    <th class="px-4 py-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classes as $class)
                    @php
                        // Decode $class if it's a JSON string
                        if (is_string($class)) {
                            $class = json_decode($class);
                        }
                    @endphp
                    <tr>
                        <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 border">{{ $class->class_name ?? '-' }}</td>
                        <td class="px-4 py-2 border">
                            {{ isset($class->teacher) && isset($class->teacher->name) ? $class->teacher->name : 'Belum ada wali kelas' }}
                        </td>
                        <td class="flex px-4 py-2 space-x-2 border">
                            <a href="{{ route('class.detail', $class->class_id ?? '') }}"
                               class="text-blue-600 hover:underline">Detail</a>
                            <a href="{{ route('class.edit', $class->class_id ?? '') }}"
                               class="text-yellow-600 hover:underline">Edit</a>
                            <form action="{{ route('class.delete', $class->class_id ?? '') }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
