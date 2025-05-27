@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Daftar Kelas</h2>
        <a href="{{ route('classes.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Kelas</a>
    </div>
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border rounded shadow">
            <thead>
                <tr>
                    <th class="px-4 py-2 border">#</th>
                    <th class="px-4 py-2 border">Nama Kelas</th>
                    <th class="px-4 py-2 border">Sekolah</th>
                    <th class="px-4 py-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($classes as $class)
                <tr>
                    <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2 border">{{ $class->class_name }}</td>
                    <td class="px-4 py-2 border">{{ $class->school->school_name ?? '-' }}</td>
                    <td class="px-4 py-2 border flex space-x-2">
                        <a href="{{ route('classes.show', $class->class_id) }}" class="text-blue-600 hover:underline">Detail</a>
                        <a href="{{ route('classes.edit', $class->class_id) }}" class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('classes.destroy', $class->class_id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-4 py-2 border text-center">Belum ada data kelas.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection