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
            <a href={{ route('login') }} class="border p-2 bg-red-400 rounded-xl text-white">Login</a>
        </div>
    </header>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign Up</h2>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action={{ route('register') }} method="POST">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium leading-6 {{ $errors->has('name') ? 'text-red-400' :'text-gray-900' }}">Name</label>
                    <div class="mt-2">
                        <input id="name" name="name" value="{{ old('name') }}" type="text" autofocus required class="block w-full rounded-md {{ $errors->has('name') ? 'border-red-500' :'border-0' }} py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('name')
                    <div class="relative mt-1 rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 text-red-400 text-sm">
                            {{ $message }}
                        </div>
                    </div>
                    @enderror
                    <div class="mt-8">
                        <label for="email" class="block text-sm font-medium leading-6 {{ $errors->has('email') ? 'text-red-400' :'text-gray-900' }}">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" value="{{ old('email') }}" type="email" autocomplete="email" required class="block w-full rounded-md {{ $errors->has('email') ? 'border-red-500' :'border-0' }} py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('email')
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 text-red-400 text-sm">
                                {{ $message }}
                            </div>
                        </div>
                        @enderror
                    </div>

                    <div class="mt-8">
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6 {{ $errors->has('email') ? 'text-red-400' :'text-gray-900' }}">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md {{ $errors->has('password') ? 'border-red-500' :'border-0' }} py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('password')
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 text-red-400 text-sm">
                                {{ $message }}
                            </div>
                        </div>
                        @enderror
                    </div>

                    <div class="mt-8">
                        <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm password</label>
                        <div class="mt-2">
                            <input id="password_confirmation" name="password_confirmation" type="password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('password_confirmation')
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 text-red-400 text-sm">
                                {{ $message }}
                            </div>
                        </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-8">Sign up</button>
                    </div>
            </form>

        </div>
    </div>
</body>

</html>
