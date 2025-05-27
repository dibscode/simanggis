@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-6">Edit Kelas</h2>
        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('classes.update', $class->class_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="school_id" class="block font-semibold mb-1">Sekolah</label>
                <select name="school_id" id="school_id" class="w-full border px-3 py-2 rounded" required>
                    <option value="">-- Pilih Sekolah --</option>
                    @foreach($schools as $school)
                        <option value="{{ $school->school_id }}" {{ old('school_id', $class->school_id) == $school->school_id ? 'selected' : '' }}>
                            {{ $school->school_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="class_name" class="block font-semibold mb-1">Nama Kelas</label>
                <input type="text" name="class_name" id="class_name" value="{{ old('class_name', $class->class_name) }}" class="w-full border px-3 py-2 rounded" required>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('classes.index') }}" class="mr-3 px-4 py-2 rounded bg-gray-200 hover:bg-gray-300">Batal</a>
                <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection