<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Kelas</title>
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
        <h1 class="text-xl font-semibold">Detail Kelas</h1>
        <div>
          <button class="text-sm text-gray-600 hover:text-blue-600">Keluar</button>
        </div>
      </header>

      <!-- Page content -->
      <main class="p-6 overflow-y-auto">
        <div class="mb-6">
          <a href="{{ route('class') }}" class="text-blue-600 hover:underline">&larr; Kembali ke Daftar Kelas</a>
        </div>

        <div class="bg-white rounded shadow p-6">
          <h2 class="text-2xl font-bold mb-4">Detail Kelas: X IPA 1</h2>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <p class="text-gray-600">Nama Kelas:</p>
              <p class="font-semibold text-gray-900">X IPA 1</p>
            </div>
            <div>
              <p class="text-gray-600">Sekolah:</p>
              <p class="font-semibold text-gray-900">SMA Negeri 1</p>
            </div>
            <div>
              <p class="text-gray-600">Jumlah Siswa:</p>
              <p class="font-semibold text-gray-900">32</p>
            </div>
            <div>
              <p class="text-gray-600">Wali Kelas:</p>
              <p class="font-semibold text-gray-900">Ibu Siti Aminah</p>
            </div>
          </div>

          <div class="mt-6">
            <h3 class="text-xl font-semibold mb-2">Deskripsi:</h3>
            <p class="text-gray-700">Kelas unggulan untuk jurusan IPA dengan fokus pada sains dan matematika.</p>
          </div>
        </div>
      </main>
    </div>
  </div>

</body>

</html>
