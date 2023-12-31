@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-700">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="thething" class="w-70 md:w-96">
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold py-10">{{ $movie['title'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-500 text-sm">
                    <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
                    <span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
                    <span class="mx-2">|</span>
                    <span>Junio 25, 1982</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span>
                        @foreach ($movie['genres'] as $genre)
                            {{ $genre['name'] }} @if (!$loop->last), @endif
                        @endforeach
                    </span>
                </div>

                <p class="text-gray-300 mt-8">{{ $movie['overview'] }}</p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Reparto</h4>
                    <div class="flex mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 2)
                            <div class="mr-8">
                                <div class="text-sm text-gray-950">{{ $crew['name']}}</div>
                                <div class="text-sm text-gray-500">{{ $crew['job']}}</div>
                            </div>
                            @endif
                        @endforeach
                    </div>

                    @if (count($movie['videos'] ['results']) > 0)
                    <div class="mt-12">
                        <a href="http://youtube.com/watch?v={{ $movie['videos'] ['results'] [0] ['key'] }}" class="inline-flex items-center border-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                            <svg width="200" height="100" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.87 20.08a.75.75 0 0 0-.74-1.3l.74 1.3ZM5.5 20h-.75a.75.75 0 0 0 1.12.65L5.5 20Zm0-16 .37-.65A.75.75 0 0 0 4.75 4h.75Zm.63 1.22a.75.75 0 1 0 .74-1.3l-.74 1.3ZM5.9 18.97a.75.75 0 1 0 1.18.92l-1.18-.92Zm9.18-9.37a.75.75 0 0 0-1.18-.92l1.18.92Zm-8.96 9.18a.75.75 0 0 0 .74 1.3l-.74-1.3Zm8.74-3.27a.75.75 0 0 0-.74-1.3l.74 1.3Zm0-7.02a.75.75 0 0 0-.74 1.3l.74-1.3ZM19.5 12l.37.65a.75.75 0 0 0 0-1.3l-.37.65Zm-5.37 2.2a.75.75 0 0 0 .74 1.3l-.74-1.3Zm0-4.4a.75.75 0 1 0 .74-1.3l-.74 1.3ZM6.87 3.91a.75.75 0 1 0-.74 1.3l.74-1.3Zm.22.2a.75.75 0 0 0-1.18.91l1.18-.92Zm6.82 11.2a.75.75 0 1 0 1.18-.92l-1.18.92Zm-7.78 3.46-1 .57.74 1.3 1-.57-.74-1.3ZM6.25 20V4h-1.5v16h1.5ZM5.13 4.65l1 .57.74-1.3-1-.57-.74 1.3ZM7.09 19.9l8-10.29-1.18-.92-8 10.29 1.18.92Zm-.22.19 8-4.57-.74-1.3-8 4.57.74 1.3Zm7.26-10.29 5 2.86.74-1.3-5-2.86-.74 1.3Zm5 1.56-5 2.86.74 1.3 5-2.86-.74-1.3Zm-4.26-2.86-8-4.57-.74 1.3 8 4.57.74-1.3ZM5.91 5.03l8 10.29 1.18-.92-8-10.29-1.18.92Z" fill="#000"/></svg>
                            <div class="text-xl text-black">Reproducir Trailer</div>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-8">
                @foreach ($movie['credits']['cast'] as $cast)
                @if ($loop->index < 5)
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ 'http://image.tmdb.org/t/p/w300'.$cast['profile_path']}}" alt="thething" class="hover:opacity-75 transition-ease-in-out duration-1">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">T. {{ $cast['name'] }} </a>
                        <div class="text-gray-400 text-sm">
                            {{$cast['character']}}
                        </div>
                    </div>
                </div>
                @endif
                @endforeach           
        </div>
    </div>

    <div class="movie-image">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl mx-auto px-4 py-16">Imagenes</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($movie['images']['backdrops'] as $image)
                    @if ($loop->index < 9)
                    <div class="mt-8">
                        <a href="">
                            <img src="{{ 'http://image.tmdb.org/t/p/w500'.$image['file_path']}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection