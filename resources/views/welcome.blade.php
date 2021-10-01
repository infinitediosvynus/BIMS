<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Barangay Information Management System</title>
</head>

<body>
    <div class="grid md:grid-cols-2 min-h-screen bg-green-200">
        <div class="self-center text-center bg-blue-300">
            <h1 class="text-4xl font-bold">Barangay Information Management System</h1>
            <span class="text-sm font-light">AlphaTest1.1</span>
        </div>
        <div class="self-center bg-red-300 flex flex-col items-center">
            <div class="w-1/2 p-5 rounded-lg bg-purple-300">
                <h2 class="text-2xl font-bold">Sign In</h2>
                <span class="text-sm font-light">Please login with the provided credentials</span>
                <form action="" method="post" class="mt-5 flex flex-col">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="p-3 rounded">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="p-3 rounded">
                    <button type="submit" class="p-3 rounded bg-green-300 mt-5">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>