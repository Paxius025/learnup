<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="Sat, 01 Jan 2000 00:00:00 GMT">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnUP</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('bookshelf.ico') }}" type="image/x-icon">
</head>
<body class="bg-green-50 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-3xl font-bold text-center text-green-700 mb-6">Register</h2>

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-600 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-gray-700 text-lg">Full Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-600 focus:outline-none" required>
            </div>

            <div class="mb-6">
                <label for="email" class="block text-gray-700 text-lg">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-600 focus:outline-none" required>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-lg">Password</label>
                <input type="password" id="password" name="password" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-600 focus:outline-none" required>
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 text-lg">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-600 focus:outline-none" required>
            </div>

            <button type="submit" class="w-full bg-green-600 text-white p-3 rounded-lg hover:bg-green-700 transition-all duration-300">
                Register
            </button>
        </form>

        <p class="mt-4 text-center text-gray-600">
            Already have an account? <a href="{{ route('login') }}" class="text-green-600 hover:underline">Login</a>
        </p>
    </div>

</body>
</html>
