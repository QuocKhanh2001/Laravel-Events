<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Laravel Subscribe Form</title>
</head>
<body class="bg-gray-200 w-full h-full font-sans flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
        <h1 class="text-center text-2xl font-bold pb-6">Subscribe to Laravel</h1>
        <form action="/subscribe" method="POST">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm font-semibold mb-2">Email:</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter email..."
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    required
                >
            </div>

            <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                Subscribe
            </button>
        </form>
    </div>

</body>
</html>
