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
                <h1 class="text-xl font-semibold">Tambah Kelas</h1>
                <div>
                    <button class="text-sm text-gray-600 hover:text-blue-600">Keluar</button>
                </div>
            </header>

            <!-- Page content -->
            <main class="p-6 overflow-y-auto">
                <div class="mb-6">
                    <a href="{{ route('class') }}" class="text-blue-600 hover:underline">&larr; Kembali ke Daftar
                        Kelas</a>
                </div>

                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-2xl font-bold mb-4">Form Tambah Kelas</h2>

                    <form action="{{ route('class.addData') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-gray-700">Nama Kelas</label>
                            <input type="text" name="nama_kelas" placeholder="Contoh: X IPA 1"
                                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required />
                        </div>

                        <div>
                            <label class="block text-gray-700">Wali Kelas</label>
                            <select name="wali_kelas"
                                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                                <option value="">-- Pilih Wali Kelas --</option>
                                <option value="1">Ibu Siti Aminah</option>
                                <option value="2">Pak Budi</option>
                                <option value="3">Ibu Rina</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700">Jumlah Siswa</label>
                            <input type="number" name="jumlah_siswa" min="1"
                                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </div>

                        <div>
                            <label class="block text-gray-700">Deskripsi (opsional)</label>
                            <textarea name="deskripsi" rows="4"
                                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Deskripsi kelas..."></textarea>
                        </div>

                        <div class="pt-4">
                            <button type="submit"
                                class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Simpan</button>
                            <a href="index.html"
                                class="ml-2 px-4 py-2 text-gray-700 border rounded hover:bg-gray-100">Batal</a>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

</body>

</html>
