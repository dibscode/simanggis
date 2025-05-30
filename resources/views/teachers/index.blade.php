<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manajemen Guru</title>
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
                <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Dashboard</a></li>
                <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Data Sekolah</a></li>
                <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Data Kelas</a></li>
                <li>
                    <a href="#" class="block px-4 py-2 rounded bg-blue-600 text-white">Manajemen Guru</a>
                </li>
                <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Distribusi Makan</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main content -->
    <div class="flex-1 flex flex-col">
        <!-- Topbar -->
        <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold">Manajemen Guru</h1>
            <form method="POST" action="#" onsubmit="return confirm('Yakin ingin logout?');">
                <button type="submit" class="text-sm text-gray-600 hover:text-blue-600">
                    Keluar
                </button>
            </form>
        </header>

        <!-- Page content -->
        <main class="p-6 overflow-y-auto">
            <div class="flex justify-between mb-4">
                <h2 class="text-2xl font-bold">Daftar Guru</h2>
                <a href="{{ route('teachers.add') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    + Tambah Guru
                </a>
            </div>

            <div class="bg-white rounded shadow p-4 overflow-x-auto">
                <table class="min-w-full table-auto text-left">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Wali Kelas</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh 1 -->
                        <tr class="border-b">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">Budi Santoso</td>
                            <td class="px-4 py-2">budi@example.com</td>
                            <td class="px-4 py-2">Kelas 3A</td>
                            <td class="px-4 py-2 flex gap-2">
                                <a href="#" class="text-blue-600 hover:underline">Edit</a>
                                <button onclick="confirm('Yakin ingin menghapus guru ini?')" class="text-red-600 hover:underline">Hapus</button>
                            </td>
                        </tr>
                        <!-- Contoh 2 -->
                        <tr class="border-b">
                            <td class="px-4 py-2">2</td>
                            <td class="px-4 py-2">Siti Aminah</td>
                            <td class="px-4 py-2">siti@example.com</td>
                            <td class="px-4 py-2">Kelas 1B</td>
                            <td class="px-4 py-2 flex gap-2">
                                <a href="#" class="text-blue-600 hover:underline">Edit</a>
                                <button onclick="confirm('Yakin ingin menghapus guru ini?')" class="text-red-600 hover:underline">Hapus</button>
                            </td>
                        </tr>
                        <!-- Jika kosong -->
                        <!--
                        <tr>
                            <td colspan="5" class="text-center text-gray-500 py-4">Belum ada data guru.</td>
                        </tr>
                        -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

</body>

</html>
