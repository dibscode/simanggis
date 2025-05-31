@extends('layouts.admin')

@section('title', 'Daftar Kelas')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Daftar Kelas</h2>
        @if (session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('class.add') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
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
                        <td class="px-4 py-2 border flex space-x-2">
                            <a href="{{ route('class.detail', ['id' => $class->class_id]) }}"
                               class="text-blue-600 hover:underline">Detail</a>
                            <a href="{{ route('class.edit', ['id' => $class->class_id]) }}"
                               class="text-yellow-600 hover:underline">Edit</a>
                            {{-- Jika butuh tombol Hapus, aktifkan form ini --}}
                            {{-- 
                            <form action="{{ route('class.destroy', ['id' => $class->class_id]) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                            --}}
                        </td>
                    </tr>
                @endforeach

                {{-- Contoh baris statis, bisa dihapus setelah data dinamis --}}
                <tr>
                    <td class="px-4 py-2 border">1</td>
                    <td class="px-4 py-2 border">X IPA 1</td>
                    <td class="px-4 py-2 border">Bu Siti</td>
                    <td class="px-4 py-2 border flex space-x-2">
                        <a href="{{ route('class.detail') }}"
                           class="text-blue-600 hover:underline">Detail</a>
                        <button class="text-yellow-600 hover:underline">Edit</button>
                        {{-- 
                        <button class="text-red-600 hover:underline"
                                onclick="alert('Yakin hapus data ini?')">Hapus</button>
                        --}}
                    </td>
                </tr>
                {{-- Akhir contoh baris ‒ hapus kalau tidak diperlukan --}}
            </tbody>
        </table>
    </div>
@endsection
