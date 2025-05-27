@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Daftar Sekolah</h2>
        <a href="{{ route('schools.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Sekolah</a>
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
                    <th class="px-4 py-2 border">Nama Sekolah</th>
                    <th class="px-4 py-2 border">Alamat</th>
                    <th class="px-4 py-2 border">No. Kontak</th>
                    <th class="px-4 py-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($schools as $school)
                <tr>
                    <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2 border">{{ $school->school_name }}</td>
                    <td class="px-4 py-2 border">{{ $school->address }}</td>
                    <td class="px-4 py-2 border">{{ $school->contact_number }}</td>
                    <td class="px-4 py-2 border flex space-x-2">
                        <a href="{{ route('schools.show', $school->school_id) }}" class="text-blue-600 hover:underline">Detail</a>
                        <a href="{{ route('schools.edit', $school->school_id) }}" class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('schools.destroy', $school->school_id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-4 py-2 border text-center">Belum ada data sekolah.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection