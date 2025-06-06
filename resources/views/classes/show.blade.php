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
    <aside class="hidden w-64 bg-white shadow-md md:block">
      <div class="p-6 text-xl font-bold text-blue-600 border-b">Admin Panel</div>
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
    <div class="flex flex-col flex-1">
      <!-- Topbar -->
      <header class="flex items-center justify-between px-6 py-4 bg-white shadow">
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

        <div class="p-6 bg-white rounded shadow">
          <h2 class="mb-4 text-2xl font-bold">Detail Kelas: {{$class->class_name}}</h2>

          <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
              <p class="text-gray-600">Nama Kelas:</p>
              <p class="font-semibold text-gray-900">{{$class->class_name}}</p>
            </div>
            <div>
              <p class="text-gray-600">Sekolah:</p>
              <p class="font-semibold text-gray-900">{{$class->school->school_name}}</p>
            </div>
            <div>
              <p class="text-gray-600">Jumlah Siswa:</p>
              <p class="font-semibold text-gray-900">32</p>
            </div>
            <div>
              <p class="text-gray-600">Wali Kelas:</p>
              <p class="font-semibold text-gray-900">{{$class->teacher->name}}</p>
            </div>
          </div>

          <div class="mt-6">
            <h3 class="mb-2 text-xl font-semibold">Deskripsi:</h3>
            <p class="text-gray-700">{{$class->description}}</p>
          </div>
        </div>
      </main>
    </div>
  </div>

</body>

</html>
