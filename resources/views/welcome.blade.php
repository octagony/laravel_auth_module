<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="w-full">
        <div class="flex justify-end gap-4 py-2 px-4">
            <a href={{ route('register') }} class="border p-2 bg-red-400 rounded-xl text-white">Login</a>
            <a href={{ route('register') }} class="border p-2 bg-gray-100 rounded-xl text-black">Register</a>
        </div>
    </header>
</body>

</html>
