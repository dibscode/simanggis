@extends('layouts.admin')

@section('title', 'Daftar Kelas')

@section('content')
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
                    <th class="px-4 py-2 border">#</th>
                    <th class="px-4 py-2 border">Nama Kelas</th>
                    <th class="px-4 py-2 border">Wali Kelas</th>
                    <th class="px-4 py-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classes as $class)
                    <tr>
                        <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 border">{{ $class->class_name }}</td>
                        <td class="px-4 py-2 border">
                            {{ $class->teacher->name ?? 'Belum ada wali kelas' }}
                        </td>
                        <td class="flex px-4 py-2 space-x-2 border">
                            <a href="{{ route('class.detail', $class->class_id) }}"
                               class="text-blue-600 hover:underline">Detail</a>
                            <a href="{{ route('class.edit', $class->class_id) }}"
                               class="text-yellow-600 hover:underline">Edit</a>
                            <form action="{{ route('class.delete', $class->class_id) }}"
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
