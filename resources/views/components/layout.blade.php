<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>JustgoBlogging</title>
</head>
<body>
    <div class="bg-white">
        <x-navbar></x-navbar>
      
            <div class="pt-20">
            <x-header>{{ $title }}</x-header>
            <div class=" mx-10">
                {{ $slot }}
            </div>
            </div>
        </div>
    </div>
</body>
</html>
