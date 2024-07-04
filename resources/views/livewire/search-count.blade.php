<form class="mt-1 relative w-full" autocomplete="off">
    <div x-data="{ open: false }">

     <!-- Float label (Filled) -->

   
            <div class="form-floating">
               
 
            

                    <div class="input-group input-group-floating">
                        {{-- <label for="">Busqueda de articulos por ID dentro de la tabla</label> --}}

                        <span class="input-group-text "><a class="cursor-pointer hover:text-white " 
                         >  <i class="text- text-blue-500 fas fa-search" ></i> </a> </span>

                        <div class="form-floating">
                            <input @keyup="open = true"
                            wire:model="search" 
                            type="text" 
                            class="form-control  "
                                id="search" 
                                placeholder="¿Que estas buscando?..." 
                                aria-describedby="floatingInputFilledHelp" />
                                <button @click="clearSearch()" class="absolute inset-y-0 -right-1  p-3 rounded-r-lg bg-bl bg-blue-500 flex items-center text-white focus:outline-none hover:text-gray-600 transition-colors" type="button">
                                    <i class="text-md fas fa-times"></i>
                                  </button>
                              <label for="floatingInputFilled">Busqueda del articulo por ID´s, nombre o descripción para el registro</label>
                           
                  
                        </div>
                        <span class="form-floating-focused"></span>
                    </div>


              













              {{-- <input @keyup="open = true" 
              wire:model="search "
                type="text"
                class="form-control  "
                id="search"
                placeholder= "Selecciona el articulo"
                aria-describedby="floatingInputFilledHelp" />
            
                <button @click="clearSearch()" class="absolute inset-y-0 -right-1  p-3 rounded-r-lg bg-bl bg-blue-500 flex items-center text-white focus:outline-none hover:text-gray-600 transition-colors" type="button">
                    <i class="text-md fas fa-times"></i>
                  </button>
              <label for="floatingInputFilled">seleccionar el articulo a adicionar</label> --}}
           
            </div>
     
   
        
    
        
        {{-- <input @keyup="open = true" wire:model="search" type="text" id="search" class="w-full pl-3 z-10 pr-10 py-2 border-1 border-green-300 rounded-xl hover:border-blue-600 focus:outline-none focus:border-green-50 transition-colors" placeholder="¿Qué estás buscando...?">
        <button @click="clearSearch()" type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 focus:outline-none hover:text-gray-600 transition-colors">
            <!-- Puedes usar cualquier ícono aquí, por ejemplo: -->
            <!-- <i class="mdi mdi-close"></i> -->
            &#x2715; <!-- Este es el símbolo de "X" -->
        </button> --}}

        @if ($search)
            <ul class="form-control border-0 absolute z-50 left-0 w-full  rounded-lg overflow-hidden">
                @forelse ($this->results as $result)
                    <div wire:click="$emit('updatedart',{{$result->id}})">
                        <li x-show="open" @click.away="open = false" class=" font-semibold leading-1  hover:text-white text-sm cursor-pointer hover:bg-blue-900 mb-2"> 
                            {{$result->name}} ID : {{$result->id_dopp}}&nbsp&nbsp/&nbsp&nbsp{{$result->id_eetc}}
                        </li>
                    </div>
                @empty
                    <li x-show="open" @click.away="open = false" class="text-gray-600 font-semibold leading-10 px-5 text-sm cursor-pointer hover:bg-blue-500 "> 
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