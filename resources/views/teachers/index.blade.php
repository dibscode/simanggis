@extends('layouts.admin')

@section('title', 'Manajemen Guru')

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
                    Data Guru
                </li>
            </ol>
        </nav>
    </div>

    <div class="flex justify-between mb-4">
        <div>
            <h2 class="text-2xl font-bold">Daftar Guru</h2>
        </div>
        @if (session('success'))
            <div class="text-green-600 mb-4">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <a href="{{ route('teachers.addForm') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Tambah Guru
        </a>
    </div>

    <div class="bg-white rounded shadow p-4 overflow-x-auto">
        <table class="min-w-full table-auto text-left">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $teacher->name }}</td>
                        <td class="px-4 py-2">{{ $teacher->email }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('teachers.editForm', $teacher->id) }}" class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('teachers.deleteData', $teacher->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus guru ini?');">
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
