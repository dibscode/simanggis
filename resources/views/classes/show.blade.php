@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Detail Kelas</h2>
        <div class="mb-4">
            <div><strong>Nama Kelas:</strong> {{ $class->class_name }}</div>
            <div><strong>Sekolah:</strong> {{ $class->school->school_name ?? '-' }}</div>
        </div>
        <hr class="my-6">
        <h3 class="text-xl font-semibold mb-2">Daftar Siswa</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded shadow">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border">#</th>
                        <th class="px-4 py-2 border">Nama Siswa</th>
                        <th class="px-4 py-2 border">NISN</th>
                        <th class="px-4 py-2 border">Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($class->students as $student)
                    <tr>
                        <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 border">{{ $student->student_name }}</td>
                        <td class="px-4 py-2 border">{{ $student->nisn }}</td>
                        <td class="px-4 py-2 border">{{ $student->gender }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-4 py-2 border text-center">Belum ada siswa di kelas ini.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection