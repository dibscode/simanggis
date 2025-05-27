<!-- Flowbite CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<!-- Tailwind CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto px-4 py-8">
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Daftar Kelas</h2>
    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Kelas</button>
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
                <a href="{{ route('schools.detail')}}" class="text-blue-600 hover:underline">Detail</a>
                <button class="text-yellow-600 hover:underline">Edit</button>
                <button class="text-red-600 hover:underline" onclick="alert('Yakin hapus data ini?')">Hapus</button>
            </td>
        </tr>
        <tr>
          <td class="px-4 py-2 border">2</td>
          <td class="px-4 py-2 border">X IPA 2</td>
          <td class="px-4 py-2 border">SMA Negeri 1</td>
          <td class="px-4 py-2 border flex space-x-2">
            <button class="text-blue-600 hover:underline">Detail</button>
            <button class="text-yellow-600 hover:underline">Edit</button>
            <button class="text-red-600 hover:underline" onclick="alert('Yakin hapus data ini?')">Hapus</button>
          </td>
        </tr>
        <tr>
          <td class="px-4 py-2 border">3</td>
          <td class="px-4 py-2 border">XI IPS 1</td>
          <td class="px-4 py-2 border">SMA Negeri 2</td>
          <td class="px-4 py-2 border flex space-x-2">
            <button class="text-blue-600 hover:underline">Detail</button>
            <button class="text-yellow-600 hover:underline">Edit</button>
            <button class="text-red-600 hover:underline" onclick="alert('Yakin hapus data ini?')">Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>