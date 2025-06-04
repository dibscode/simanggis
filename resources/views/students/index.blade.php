@extends('layouts.admin')

@section('title', 'Manajemen Siswa')

@section('content')
    <div class="flex justify-between mb-4">
        <h2 class="text-2xl font-bold">Daftar Siswa</h2>
        @if (session('success'))
            <div class="text-green-600 bg-green-100 p-2 rounded">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('students.addForm') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Tambah Siswa
        </a>
    </div>

    <div class="bg-white rounded shadow p-4 overflow-x-auto">
        <table class="min-w-full table-auto text-left">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Kelas</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $student->name }}</td>
                        <td class="px-4 py-2">{{ $student->classes->class_name ?? 'Belum Mempunyai Kelas!' }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="#" class="text-green-600 hover:underline">Detail</a>
                            <a href="#" class="text-blue-600 hover:underline">Edit</a>
                            {{-- <form action="#" method="POST" onsubmit="return confirm('Yakin ingin menghapus siswa ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form> --}}
                            <button onclick="confirm('Yakin ingin menghapus siswa ini?')"
                                class="text-red-600 hover:underline">
                                Hapus
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
