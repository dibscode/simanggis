@extends('layouts.admin')

@section('title', 'Edit Siswa')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-6">Edit Siswa</h2>
    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('students.editData', $student->student_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block font-semibold mb-1">Nama Siswa</label>
            <input type="text" name="name" id="name" value="{{ old('name', $student->name) }}" class="w-full border px-3 py-2 rounded" required>
        </div>
        <div class="mb-4">
            <label for="class_id" class="block font-semibold mb-1">Kelas</label>
            <select name="class_id" id="class_id" class="w-full border px-3 py-2 rounded">
                <option value="">-- Pilih Kelas --</option>
                @foreach($classes as $class)
                    <option value="{{ $class->class_id }}" {{ old('class_id', $student->class_id) == $class->class_id ? 'selected' : '' }}>
                        {{ $class->class_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('students') }}" class="mr-3 px-4 py-2 rounded bg-gray-200 hover:bg-gray-300">Batal</a>
            <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@endsection