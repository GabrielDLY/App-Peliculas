@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">PELICULAS POPULARES</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/thething.jpg" alt="thething" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">The Thing</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/65.jpg" alt="65" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">65: Al borde de la extinción</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/jurassicword.jpg" alt="jurassicword" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Jurassic World: Dominio</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/batman.jpg" alt="batman" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Batman: el caballero de la noche</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/mk.jpg" alt="mk" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Mortal Kombat</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/gvk.jpg" alt="gvk" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Godzilla VS Kong</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/doctorstrange.jpg" alt="doctorstrange" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Doctor Strange en el Multiverso de la Locura</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/scream4.jpg" alt="scream4" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Scream 4</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/spiderman.jpg" alt="spiderman" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Spider-Man</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/shazam-2.jpg" alt="mario" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-1 hover:text-gray-400">Shazam: La furia de los dioses</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">MIRANDO AHORA</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/thething.jpg" alt="thething" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">The Thing</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/65.jpg" alt="65" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">65: Al borde de la extinción</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/jurassicword.jpg" alt="jurassicword" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Jurassic World: Dominio</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/batman.jpg" alt="batman" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Batman: el caballero de la noche</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/mk.jpg" alt="mk" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Mortal Kombat</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/gvk.jpg" alt="gvk" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Godzilla VS Kong</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/doctorstrange.jpg" alt="doctorstrange" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Doctor Strange en el Multiverso de la Locura</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/scream4.jpg" alt="scream4" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Scream 4</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/spiderman.jpg" alt="spiderman" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Spider-Man</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/shazam-2.jpg" alt="mario" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-1 hover:text-gray-400">Shazam: La furia de los dioses</a>
                        <div class="flex items-center text-gray-500 text-sm">
                            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Junio 25, 1982</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Terror, Misterio, Ciencia Ficción
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection