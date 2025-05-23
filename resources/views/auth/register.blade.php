<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-4">Register</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-500">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label class="block mb-2">Username:</label>
            <input type="text" name="username" class="w-full border p-2 mb-4" required>

            <label class="block mb-2">Password:</label>
            <input type="password" name="password" class="w-full border p-2 mb-4" required>

            <label class="block mb-2">Confirm Password:</label>
            <input type="password" name="password_confirmation" class="w-full border p-2 mb-4" required>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">
                Register
            </button>
        </form>
    </div>
</body>
</html>
