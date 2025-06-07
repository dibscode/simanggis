@extends('layouts.teacher')

@section('title', 'Absensi Makanan')

@section('content')
    <h1 class="mb-4 text-2xl font-bold">Rekap Absensi Makanan</h1>

    @if(session('success'))
        <div class="p-3 mb-4 text-green-800 bg-green-100 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full text-sm divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 font-semibold text-left text-gray-700">Tanggal</th>
                    <th class="px-6 py-3 font-semibold text-left text-gray-700">Kelas</th>
                    <th class="px-6 py-3 font-semibold text-left text-gray-700">Sudah Menerima</th>
                    <th class="px-6 py-3 font-semibold text-left text-gray-700">Belum Menerima</th>
                    <th class="px-6 py-3 font-semibold text-left text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($rekap as $data)
                    <tr>
                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($data->meal_date)->format('d M Y') }}</td>
                        <td class="px-6 py-4">{{ $data->class->class_name ?? 'Tidak diketahui' }}</td>
                        <td class="px-6 py-4 font-medium text-green-600">{{ $data->received }}</td>
                        <td class="px-6 py-4 font-medium text-red-600">{{ $data->not_received }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('meal_check.absen', ['class_id' => $data->class->class_id, 'meal_date' => $data->meal_date]) }}"
                               class="inline-block px-4 py-2 text-sm text-white bg-blue-600 rounded hover:bg-blue-700">
                                Isi Absensi
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-4 text-center text-gray-500">Tidak ada data absensi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
