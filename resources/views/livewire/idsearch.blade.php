<form @click="open = true" class="z-50 mt-2 relative" autocomplete="off">
    <div @click="open = true" class="container mt-1">
        <div x-data="{ open: false }">
            <div class="relative">
                <input @keyup="open = true" wire:model="idsearch" type="text" id="idsearch" class="text-align:right w-full shadow-2xl py-2 pl-3 pr-10 border-1 border-green-100 rounded-xl hover:border-gray-200 focus:border-green-50 transition-colors" placeholder="¿Qué estás buscando...?">
                <button @click="clearIdSearch()" type="button" class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-400 focus:outline-none hover:text-gray-600 transition-colors">
                    &#x2715;
                </button>
            </div>

            @if ($idsearch)
                <ul class="absulute z-50 left-0 w-full bg-white mt-1 rounded-md">
                    @forelse ($this->Idresults as $idresult)
                        <a href="{{route('article.show', $idresult)}}"> 
                            <li x-show="open" @click.away="open = false" class="text-gray-600  font-semibold leading-0 py-1 px-5 w-full rounded-md text-sm cursor-pointer hover:bg-blue-100 bg-white"> 
                                ID {{$idresult->id_dopp}}, {{$idresult->name}}
                            </li>
                        </a>
                    @empty
                        <li x-show="open" @click.away="open = false" class="leading-10 text-gray-600  font-semibold  px-5 w-full rounded-md  cursor-pointer hover:bg-blue-100 bg-white"> 
                            No hay ninguna coincidencia :(
                        </li>
                    @endforelse
                </ul>
            @endif
        </div>
    </div>
</form>

