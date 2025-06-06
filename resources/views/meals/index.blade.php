<!-- resources/views/distributions/index.blade.php -->

@extends('layouts.admin')

@section('content')
<div class="p-6 bg-white rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        <a href="{{ route('meals.create') }}" 
            class="inline-flex items-center bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 4v16m8-8H4" />
            </svg>
            Tambah Jadwal
        </a>

        <form method="GET" action="{{ route('meals') }}" class="flex items-end gap-4">
            <div>
                <label for="start_date" class="block text-sm font-semibold text-gray-700 mb-1">Start Date</label>
                <input type="date" name="start_date" id="start_date" value="{{ request('start_date') }}"
                    class="border border-gray-300 rounded-md p-2 w-36 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <div>
                <label for="end_date" class="block text-sm font-semibold text-gray-700 mb-1">End Date</label>
                <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}"
                    class="border border-gray-300 rounded-md p-2 w-36 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-200">
                Filter
            </button>
        </form>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="text-left px-6 py-3 text-sm font-semibold text-gray-700">Nama Kelas</th>
                    <th class="text-left px-6 py-3 text-sm font-semibold text-gray-700">Total Distribusi</th>
                    <th class="text-left px-6 py-3 text-sm font-semibold text-gray-700">Tanggal Distribusi</th>
                    <th class="text-left px-6 py-3 text-sm font-semibold text-gray-700">Guru Penanggung Jawab</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($distributions as $row)
                    <tr class="hover:bg-blue-50 transition">
                        <td class="px-6 py-4 text-gray-800">{{ $row->class_name }}</td>
                        <td class="px-6 py-4 text-gray-800">{{ $row->total_distributions }}</td>
                        <td class="px-6 py-4 text-gray-800">{{ \Carbon\Carbon::parse($row->meal_date)->translatedFormat('d M Y') }}</td>
                        <td class="px-6 py-4 text-gray-800">{{ $row->teacher_name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center px-6 py-6 text-gray-500 italic">Tidak ada distribusi ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
