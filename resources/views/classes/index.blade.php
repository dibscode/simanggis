<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
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
                <h1 class="text-xl font-semibold">Admin Dashboard</h1>
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

                <!-- Konten halaman Daftar Kelas disisipkan di sini -->
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold">Daftar Kelas</h2>
                    @if (session('success'))
                        <div class="bg-green-100 text-green-800 px-4 py-2 rounded">
                            {{ session('success') }}
                        </div>
                    @endif
                    <a href="{{ route('class.add') }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        + Tambah Kelas
                    </a>

                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border rounded shadow">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 border">#</th>
                                <th class="px-4 py-2 border">Nama Kelas</th>
                                <th class="px-4 py-2 border">Wali Kelas</th>
                                <th class="px-4 py-2 border">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classes as $class)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-2 border">{{ $class->class_name }}</td>
                                    <td class="px-4 py-2 border">{{ $class->teacher->name ?? 'Belum ada wali kelas' }}
                                    </td>
                                    <td class="px-4 py-2 border flex space-x-2">
                                        <a href="#"
                                            class="text-blue-600 hover:underline">Detail</a>
                                        <a href="{{ route('class.edit', ['id' => $class->class_id]) }}"
                                            class="text-yellow-600 hover:underline">edit</a>
                                        {{-- <form action="#"
                                            method="POST" onsubmit="return confirm('Yakin hapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-600 hover:underline">Hapus</button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td class="px-4 py-2 border">1</td>
                                <td class="px-4 py-2 border">X IPA 1</td>
                                <td class="px-4 py-2 border">Bu Siti</td>
                                <td class="px-4 py-2 border flex space-x-2">
                                    <a href="{{ route('class.detail') }}"
                                        class="text-blue-600 hover:underline">Detail</a>
                                    <button class="text-yellow-600 hover:underline">Edit</button>
                                    {{-- <button class="text-red-600 hover:underline"
                                        onclick="alert('Yakin hapus data ini?')">Hapus</button> --}}
                                </td>
                            </tr>
                            <!-- Baris tambahan bisa disisipkan di sini -->
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>

</body>

</html>
