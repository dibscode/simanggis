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
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Dashboard</a></li>
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Data Sekolah</a></li>
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Data Kelas</a></li>
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Tambah Guru</a></li>
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Distribusi Makan</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main content -->
        <div class="flex-1 flex flex-col">
            <!-- Topbar -->
            <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">Admin Dashboard</h1>
                <div>
                    <button class="text-sm text-gray-600 hover:text-blue-600">Keluar</button>
                </div>
            </header>

            <!-- Page content -->
            <main class="p-6 overflow-y-auto">

                <!-- Konten halaman Daftar Kelas disisipkan di sini -->
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold">Daftar Kelas</h2>
                    <a href="{{ route('class.add') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        + Tambah Kelas
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border rounded shadow">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 border">#</th>
                                <th class="px-4 py-2 border">Nama Kelas</th>
                                <th class="px-4 py-2 border">Sekolah</th>
                                <th class="px-4 py-2 border">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border">1</td>
                                <td class="px-4 py-2 border">X IPA 1</td>
                                <td class="px-4 py-2 border">SMA Negeri 1</td>
                                <td class="px-4 py-2 border flex space-x-2">
                                    <a href="{{ route('class.detail') }}" class="text-blue-600 hover:underline">Detail</a>
                                    <button class="text-yellow-600 hover:underline">Edit</button>
                                    <button class="text-red-600 hover:underline"
                                        onclick="alert('Yakin hapus data ini?')">Hapus</button>
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
