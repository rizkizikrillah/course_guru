<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS – Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .brand-gradient {
            background: linear-gradient(135deg, #2563eb, #06b6d4);
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-xl shadow-sm border max-w-md w-full">
            <h1 class="text-2xl font-bold mb-6 text-center">Login ke Course</h1>

            @if (session('status'))
                <div class="mb-4 text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 text-red-600">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                           class="mt-1 block w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required
                           class="mt-1 block w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>