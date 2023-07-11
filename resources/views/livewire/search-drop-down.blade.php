<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.300ms="search" type="text" class="bg-gray-700 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Buscar...">
    <div class="absolute top-0">
        <svg class="fill-current text-gray-400 mt-1 ml-1" height="21" width="21" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve"><path d="M125.005 165.008c-22.058 0-40.003-17.945-40.003-40.002 0-8.284-6.716-15-15-15-8.284 0-15 6.716-15 15 0 38.6 31.403 70.002 70.003 70.002 8.284 0 15-6.716 15-15 0-8.284-6.716-15-15-15z"/><path d="M325.606 304.394 223.329 202.117c16.706-21.256 26.682-48.04 26.682-77.111C250.011 56.077 193.934 0 125.005 0 56.077 0 0 56.077 0 125.005S56.077 250.01 125.005 250.01c29.07 0 55.855-9.975 77.111-26.681l102.278 102.277A14.946 14.946 0 0 0 315 330c3.839 0 7.678-1.464 10.606-4.394 5.858-5.857 5.858-15.355 0-21.212zM30 125.005C30 72.619 72.619 30 125.005 30c52.386 0 95.006 42.619 95.006 95.005 0 52.386-42.62 95.005-95.006 95.005S30 177.391 30 125.005z"/></svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>

    @if (strlen($search) > 2)
        <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4">
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-gray-700">
                            <a href=" {{ route('movies.show', $result['id'])}} " class="flex content-between hover:bg-gray-700 px-3 py-3"> 
                                @if ($result['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path']}}" alt="" class="w-8">
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="" class="w-8">
                                @endif
                                <span class="ml-4">{{ $result['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul> 
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div> 
    @endif
</div>