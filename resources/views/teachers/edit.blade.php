<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Guru</title>
    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-6 font-bold text-xl text-blue-600 border-b">Admin Panel</div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Dashboard</a></li>
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Data Sekolah</a></li>
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Data Kelas</a></li>
                    <li><a href="#" class="block px-4 py-2 rounded bg-blue-600 text-white">Manajemen Guru</a></li>
                    <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-100">Distribusi Makan</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">Edit Guru</h1>
                <form method="POST" action="{{ route('logout') }}" onsubmit="return confirm('Yakin ingin logout?');">
                    @csrf
                    <button type="submit" class="text-sm text-gray-600 hover:text-blue-600">
                        Keluar
                    </button>
                </form>
            </header>

            <!-- Form Content -->
            <main class="p-6">
                <div class="bg-white rounded shadow p-6 max-w-2xl mx-auto">
                    @if ($errors->any())
                        <div class="text-red-600 mb-4">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('teachers.editForm', $teacher->id) }}" method="POST" class="space-y-4">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required
                                value="{{ old('name', $teacher->name) }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                        </div>

                        <div>
                            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                            <input type="text" id="username" name="username" required
                                value="{{ old('username', $teacher->username) }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" required
                                value="{{ old('email', $teacher->email) }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">
                                Password <small>(kosongkan jika tidak ingin mengubah)</small>
                            </label>
                            <input type="password" id="password" name="password"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" autocomplete="new-password" />
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                                Konfirmasi Password
                            </label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" autocomplete="new-password" />
                        </div>

                        <div class="flex justify-end space-x-2 pt-4">
                            <a href="{{ route('teachers') }}" class="text-gray-600 hover:underline">Batal</a>
                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

</body>

</html>
