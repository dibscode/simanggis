@extends('layouts.admin')

@section('title', 'Manajemen Guru')

@section('content')
    <div class="flex justify-between mb-4">
        <h2 class="text-2xl font-bold">Daftar Guru</h2>
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
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Wali Kelas</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $teacher->name }}</td>
                        <td class="px-4 py-2">{{ $teacher->email }}</td>
                        <td class="px-4 py-2">{{ $teacher->class_name ?? 'Tidak ada' }}</td>
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
