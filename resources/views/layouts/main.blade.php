<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Aplicacion de peliculas</title>
    <livewire:styles />
</head>
<body class=" font-sans bg-gray-800 text-white">
    <nav class="border-b border-gray-700">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row  items-center">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"><path style="opacity:1;fill:#000;fill-opacity:1;stroke:none;stroke-width:.49999997;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" d="M5 8a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2v-4.4l8 6.4V8l-8 6.4V10a2 2 0 0 0-2-2H5z"/></svg>
                </li>
                <li class="md:ml-6">
                    <a href="{{ route('movies.index')}}" class="hover:text-gray-300">Peliculas</a>
                </li>
                <li class="md:ml-6">
                    <a href="#" class="hover:text-gray-300">Series</a>
                </li>
                <li class="md:ml-6">
                    <a href="#" class="hover:text-gray-300">Actores</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-drop-down>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="#" alt="avatar" class="rounded-full w-8 h-8">    
                    </a>  
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <livewire:scripts />
</body>
</html>