<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Aplicacion de peliculas</title>
</head>
<body class=" font-sans bg-gray-800 text-white">
    <nav class="border-b border-gray-700">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row  items-center">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"><path style="opacity:1;fill:#000;fill-opacity:1;stroke:none;stroke-width:.49999997;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" d="M5 8a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2v-4.4l8 6.4V8l-8 6.4V10a2 2 0 0 0-2-2H5z"/></svg>
                </li>
                <li class="md:ml-6">
                    <a href="#" class="hover:text-gray-300">Peliculas</a>
                </li>
                <li class="md:ml-6">
                    <a href="#" class="hover:text-gray-300">Series</a>
                </li>
                <li class="md:ml-6">
                    <a href="#" class="hover:text-gray-300">Actores</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-gray-700 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Buscar...">
                    <div class="absolute top-0">
                        <svg class="fill-current text-gray-400 mt-1 ml-1" height="21" width="21" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve"><path d="M125.005 165.008c-22.058 0-40.003-17.945-40.003-40.002 0-8.284-6.716-15-15-15-8.284 0-15 6.716-15 15 0 38.6 31.403 70.002 70.003 70.002 8.284 0 15-6.716 15-15 0-8.284-6.716-15-15-15z"/><path d="M325.606 304.394 223.329 202.117c16.706-21.256 26.682-48.04 26.682-77.111C250.011 56.077 193.934 0 125.005 0 56.077 0 0 56.077 0 125.005S56.077 250.01 125.005 250.01c29.07 0 55.855-9.975 77.111-26.681l102.278 102.277A14.946 14.946 0 0 0 315 330c3.839 0 7.678-1.464 10.606-4.394 5.858-5.857 5.858-15.355 0-21.212zM30 125.005C30 72.619 72.619 30 125.005 30c52.386 0 95.006 42.619 95.006 95.005 0 52.386-42.62 95.005-95.006 95.005S30 177.391 30 125.005z"/></svg>
                    </div>
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="#" alt="avatar" class="rounded-full w-8 h-8">    
                    </a>  
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>