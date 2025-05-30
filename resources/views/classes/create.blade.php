<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Kelas</title>
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
                    <li><a href="{{ route('school.data') }}" class="block px-4 py-2 rounded hover:bg-blue-100">Data
                            Sekolah</a></li>
                    <li><a href="{{ route('class') }}" class="block px-4 py-2 rounded bg-blue-600 text-white">Daftar
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
                <h1 class="text-xl font-semibold">Tambah Kelas</h1>
                <form method="POST" action="{{ route('logout') }}" onsubmit="return confirm('Yakin ingin logout?');"
                    class="inline">
                    @csrf
                    <button type="submit" class="text-sm text-gray-600 hover:text-blue-600">
                        Keluar
                    </button>
                </form>
            </header>

            <!-- Page content -->
            <main class="p-6 overflow-y-auto">
                <div class="mb-6">
                    <a href="{{ route('class') }}" class="text-blue-600 hover:underline">&larr; Kembali ke Daftar
                        Kelas</a>
                </div>

                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-2xl font-bold mb-4">Form Tambah Kelas</h2>

                    @if ($errors->any())
                        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('class.addData') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-gray-700">Nama Kelas</label>
                            <input type="text" name="class_name" placeholder="Contoh: X IPA 1"
                                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required />
                        </div>

                        <div>
                            <label class="block text-gray-700">Wali Kelas</label>
                            <select name="teacher_id"
                                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                                <option value="">-- Pilih Wali Kelas --</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700">Deskripsi (opsional)</label>
                            <textarea name="description" rows="4"
                                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Deskripsi kelas..."></textarea>
                        </div>

                        <div class="pt-4">
                            <button type="submit"
                                class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Simpan</button>
                            <a href="{{ route('class') }}"
                                class="ml-2 px-4 py-2 text-gray-700 border rounded hover:bg-gray-100">Batal</a>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

</body>

</html>
