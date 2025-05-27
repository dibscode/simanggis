<!-- Flowbite CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<!-- Tailwind CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto px-4 py-8">
  <a href="#" class="text-blue-600 hover:underline flex items-center mb-4">
    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
    Kembali ke Daftar Kelas
  </a>
  <div class="bg-white rounded shadow p-6">
    <h2 class="text-2xl font-bold mb-4">Detail Kelas</h2>
    <div class="mb-4">
      <span class="font-semibold">Nama Kelas:</span>
      <span class="ml-2">X IPA 1</span>
    </div>
    <div class="mb-4">
      <span class="font-semibold">Sekolah:</span>
      <span class="ml-2">SMA Negeri 1</span>
    </div>
    <div class="mb-4">
      <span class="font-semibold">Wali Kelas:</span>
      <span class="ml-2">Budi Santoso, S.Pd</span>
    </div>
    <div class="mb-4">
      <span class="font-semibold">Jumlah Siswa:</span>
      <span class="ml-2">32</span>
    </div>
    <div>
      <span class="font-semibold">Deskripsi:</span>
      <p class="ml-2 mt-1 text-gray-700">Kelas X IPA 1 merupakan kelas unggulan dengan fokus pada bidang ilmu pengetahuan alam.</p>
    </div>
    <div class="mt-6 flex space-x-2">
      <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</button>
      <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700" onclick="alert('Yakin hapus kelas ini?')">Hapus</button>
    </div>
  </div>
</div>