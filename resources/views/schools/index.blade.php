<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informasi Sekolah</title>
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
                    <li>
                        <a href="#" class="block px-4 py-2 rounded bg-blue-600 text-white">
                            Data Sekolah
                        </a>
                    </li>
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Data Kelas</a></li>
                    <li><a href="{{ route('teachers') }}" class="block px-4 py-2 rounded hover:bg-blue-100">Manajemen Guru</a></li>
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Distribusi Makan</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main content -->
        <div class="flex-1 flex flex-col">
            <!-- Topbar -->
            <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">Informasi Sekolah</h1>
                <div>
                    <form method="POST" action="{{ route('logout') }}"
                        onsubmit="return confirm('Yakin ingin logout?');" class="inline">
                        @csrf
                        <button type="submit" class="text-sm text-gray-600 hover:text-blue-600">
                            Keluar
                        </button>
                    </form>

                </div>
            </header>

            <!-- Page content -->
            <main class="p-6 overflow-y-auto">
                <div class="mb-6">
                    <a href="#" class="text-blue-600 hover:underline">&larr; Kembali ke Dashboard</a>
                </div>

                <div class="bg-white rounded shadow p-6">
                    <h2 class="text-2xl font-bold mb-4">Profil Sekolah</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-600">Nama Sekolah:</p>
                            <p class="font-semibold text-gray-900">{{ $school->school_name }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Alamat:</p>
                            <p class="font-semibold text-gray-900">{{ $school->address }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Nomor Kontak:</p>
                            <p class="font-semibold text-gray-900">{{ $school->contact_number }}</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('school.detail') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Edit Informasi
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>
