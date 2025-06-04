<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Admin Dashboard')</title>

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
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-blue-100">Dashboard</a></li>
                    <li>
                        <a href="{{ route('school.data') }}" class="block px-4 py-2 rounded {{ request()->routeIs('school*') ? 'bg-blue-600 text-white' : 'hover:bg-blue-100' }}">Data Sekolah</a>
                    </li>
                    <li>
                        <a href="{{ route('class') }}" class="block px-4 py-2 rounded {{ request()->routeIs('class*') ? 'bg-blue-600 text-white' : 'hover:bg-blue-100' }}">Data Kelas</a>
                    </li>
                    <li>
                        <a href="{{ route('teachers') }}" class="block px-4 py-2 rounded {{ request()->routeIs('teachers*') ? 'bg-blue-600 text-white' : 'hover:bg-blue-100' }}">Data Guru</a>
                    </li>
                    <li>
                        <a href="{{ route('students') }}" class="block px-4 py-2 rounded {{ request()->routeIs('students*') ? 'bg-blue-600 text-white' : 'hover:bg-blue-100' }}">Data Murid</a>
                    </li>
                    <li>
                        <a href="{{ route('meals') }}"class="block px-4 py-2 rounded {{ request()->routeIs('meals*') ? 'bg-blue-600 text-white' : 'hover:bg-blue-100' }}">Data Distribusi Makanan</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Topbar -->
            <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">@yield('title')</h1>
                <form method="POST" action="{{ route('logout') }}" onsubmit="return confirm('Yakin ingin logout?');">
                    @csrf
                    <button type="submit" class="text-sm text-gray-600 hover:text-blue-600">Keluar</button>
                </form>
            </header>

            <!-- Page Content -->
            <main class="p-6 overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
