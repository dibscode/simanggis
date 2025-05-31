@extends('layouts.admin')

@section('title', 'Edit Informasi Sekolah')

@section('content')
    <div class="mb-6">
        <a href="{{ route('school.data') }}" class="text-blue-600 hover:underline">&larr; Kembali ke Informasi Sekolah</a>
    </div>

    <div class="bg-white rounded shadow p-6 max-w-xl mx-auto">
        <h2 class="text-2xl font-bold mb-4">Form Edit Profil Sekolah</h2>

        @if ($errors->any())
            <div class="text-red-600 mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('school.update', $school->school_id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="school_name" class="block text-gray-700">Nama Sekolah</label>
                <input
                    type="text"
                    id="school_name"
                    name="school_name"
                    class="w-full mt-1 px-3 py-2 border rounded"
                    value="{{ old('school_name', $school->school_name) }}"
                    required
                >
            </div>

            <div>
                <label for="address" class="block text-gray-700">Alamat</label>
                <input
                    type="text"
                    id="address"
                    name="address"
                    class="w-full mt-1 px-3 py-2 border rounded"
                    value="{{ old('address', $school->address) }}"
                    required
                >
            </div>

            <div>
                <label for="contact_number" class="block text-gray-700">Nomor Kontak</label>
                <input
                    type="text"
                    id="contact_number"
                    name="contact_number"
                    class="w-full mt-1 px-3 py-2 border rounded"
                    value="{{ old('contact_number', $school->contact_number) }}"
                    required
                >
            </div>

            <div class="pt-4 flex justify-end space-x-2">
                <a href="{{ route('school.data') }}" class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection
