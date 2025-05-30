<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Informasi Sekolah</title>
    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-6 font-bold text-xl text-blue-600 border-b">Admin Panel</div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li><a href="{{ route('school.data') }}"
                            class="block px-4 py-2 rounded hover:bg-blue-100">Dashboard</a></li>
                    <li><a href="{{ route('school.data') }}" class="block px-4 py-2 rounded bg-blue-600 text-white">Data
                            Sekolah</a></li>
                    <li><a href="{{ route('class') }}" class="block px-4 py-2 rounded hover:bg-blue-100">Daftar
                            Kelas</a></li>
                    <li><a href="{{ route('teachers') }}" class="block px-4 py-2 rounded hover:bg-blue-100">Daftar
                            Guru</a></li>
                    <li><a href="{{ route('school.data') }}"
                            class="block px-4 py-2 rounded hover:bg-blue-100">Distribusi Makan</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main content -->
        <div class="flex-1 flex flex-col">
            <!-- Topbar -->
            <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">Edit Informasi Sekolah</h1>
                <div>
                    <form method="POST" action="{{ route('logout') }}"
                        onsubmit="return confirm('Yakin ingin logout?');" class="inline">
                        @csrf
                        <button type="submit" class="text-sm text-gray-600 hover:text-blue-600">Keluar</button>
                    </form>
                </div>
            </header>

            <!-- Page content -->
            <main class="p-6 overflow-y-auto">
                <div class="mb-6">
                    <a href="{{ route('school.data') }}" class="text-blue-600 hover:underline">&larr; Kembali ke
                        Informasi Sekolah</a>
                </div>

                <div class="bg-white rounded shadow p-6">
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
                            <input type="text" id="school_name" name="school_name"
                                class="w-full mt-1 px-3 py-2 border rounded" value="{{ $school->school_name }}"
                                required>
                        </div>

                        <div>
                            <label for="address" class="block text-gray-700">Alamat</label>
                            <input type="text" id="address" name="address"
                                class="w-full mt-1 px-3 py-2 border rounded" value="{{ $school->address }}" required>
                        </div>

                        <div>
                            <label for="contact_number" class="block text-gray-700">Nomor Kontak</label>
                            <input type="text" id="contact_number" name="contact_number"
                                class="w-full mt-1 px-3 py-2 border rounded" value="{{ $school->contact_number }}"
                                required>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

</body>

</html>
