@extends('layouts.admin')

@section('title', 'Tambah Guru')

@section('content')
    <div class="bg-white rounded shadow p-6 max-w-2xl mx-auto">
        @if ($errors->any())
            <div class="text-red-600 mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('teachers.addData') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="name" name="name" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>

            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>

            <div>
                <label for="password_confirmation"
                    class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            </div>

            <div class="flex justify-end space-x-2 pt-4">
                <a href="{{ route('teachers') }}" class="text-gray-600 hover:underline">Batal</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection
