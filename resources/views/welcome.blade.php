<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel + Keycloak</title>
</head>
<body class="antialiased flex items-center justify-center h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-2xl font-bold mb-6">Welcome to Laravel</h1>

        @auth
            <p class="mb-4">Halo, {{ auth()->user()->name }} 🎉</p>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" 
                    class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                    Logout
                </button>
            </form>
        @else
            <a href="{{ url('/auth/redirect') }}" 
               class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Login via Keycloak
            </a>
        @endauth
    </div>
</body>
</html>
