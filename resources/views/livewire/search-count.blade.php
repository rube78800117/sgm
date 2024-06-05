<form class="mt-1 relative w-full" autocomplete="off">
    <div x-data="{ open: false }">
        <input @keyup="open = true" wire:model="search" type="text" id="search" class="w-full pl-3 z-10 pr-10 py-2 border-1 border-green-300 rounded-xl hover:border-blue-600 focus:outline-none focus:border-green-50 transition-colors" placeholder="¿Qué estás buscando...?">
        <button @click="clearSearch()" type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 focus:outline-none hover:text-gray-600 transition-colors">
            <!-- Puedes usar cualquier ícono aquí, por ejemplo: -->
            <!-- <i class="mdi mdi-close"></i> -->
            &#x2715; <!-- Este es el símbolo de "X" -->
        </button>

        @if ($search)
            <ul class="absolute z-50 left-0 w-full bg-white mt-2 rounded-lg overflow-hidden">
                @forelse ($this->results as $result)
                    <div wire:click="$emit('updatedart',{{$result->id}})">
                        <li x-show="open" @click.away="open = false" class="text-gray-600  font-semibold leading-1 px-5 text-sm cursor-pointer hover:bg-blue-300 bg-white mb-2"> 
                            {{$result->name}} ID : {{$result->id_dopp}}&nbsp&nbsp/&nbsp&nbsp{{$result->id_eetc}}
                        </li>
                    </div>
                @empty
                    <li x-show="open" @click.away="open = false" class="text-gray-600 font-semibold leading-10 px-5 text-sm cursor-pointer hover:bg-blue-100 bg-white"> 
                        No hay ninguna coincidencia :(
                    </li>
                @endforelse
            </ul>                 
        @endif 
    </div>
</form>

<script>
    function clearSearch() {
        document.getElementById('search').value = ''; // Limpiar el valor del campo de búsqueda
        // Opcionalmente, puedes emitir el evento de cambio de input si estás usando Alpine.js
        // document.getElementById('search').dispatchEvent(new Event('input'));
    }
</script>