<div class="mt-8">
    <a href="{{ route('movies.show', $movie['id']) }}">
        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="" class="hover:opacity-75 transition-ease-in-out duration-1">
    </a>
    <div class="mt-2">
        <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray-400">{{ $movie['title'] }}</a>
        <div class="flex items-center text-gray-500 text-sm">
            <svg width="15" height="15" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m16 0 5.44 9.27L32 11.54l-7.2 8 1.09 10.68L16 25.9l-9.89 4.32L7.2 19.55l-7.2-8 10.56-2.28L16 0Z" fill="#FFCB45"/></svg>
            <span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
            <span class="mx-2">|</span>
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach ($movie['genre_ids'] as $genre)
                {{ $genres->get($genre) }} @if (!$loop->last), @endif
            @endforeach
        </div>
    </div>
</div>