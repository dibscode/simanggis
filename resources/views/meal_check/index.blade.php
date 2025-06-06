@extends('layouts.teacher')

@section('title', 'Absensi Makanan')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Rekap Absensi Makanan</h1>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Tanggal</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Kelas</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Sudah Menerima</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Belum Menerima</th>
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @forelse($rekap as $data)
                    <tr>
                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($data->meal_date)->format('d M Y') }}</td>
                        <td class="px-6 py-4">{{ $data->class->class_name ?? 'Tidak diketahui' }}</td>
                        <td class="px-6 py-4 text-green-600 font-medium">{{ $data->received }}</td>
                        <td class="px-6 py-4 text-red-600 font-medium">{{ $data->not_received }}</td>
                        <td class="px-6 py-4">
                            <a href=""
                               class="inline-block px-4 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700">
                                Isi Absensi
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-500">Tidak ada data absensi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
