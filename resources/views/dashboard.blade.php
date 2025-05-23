<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-screen bg-gray-100">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg hidden md:block">
        <div class="p-6">
            <h1 class="text-2xl font-bold text-blue-600">Admin Panel</h1>
        </div>
        <nav class="px-6">
            <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-50 text-gray-700">Dashboard</a>
            <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-50 text-gray-700">Users</a>
            <a href="#" class="block py-2.5 px-4 rounded hover:bg-blue-50 text-gray-700">Settings</a>
            <form method="POST" action="{{ route('logout') }}" class="mt-4">
                @csrf
                <button type="submit"
                    class="w-full text-left py-2.5 px-4 text-red-600 hover:bg-red-100 rounded">
                    Logout
                </button>
            </form>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-semibold text-gray-700">Halo, {{ auth()->user()->username }}</h2>
            <div class="md:hidden">
                <!-- Optional: toggle sidebar for mobile -->
                <button class="text-gray-600">
                    ☰
                </button>
            </div>
        </div>

        <!-- Content box -->
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Selamat datang di dashboard admin</h3>
            <p class="text-gray-600">Di sini kamu bisa mengelola konten, pengguna, dan pengaturan aplikasi.</p>
        </div>
    </div>

</body>
</html>
