<form @click="open = true" class=" mt-1 relative w-full" autocomplete="off">


    <div @click="open = true" x-data="{ open: false }">



        <input @keyup="open = true" wire:model="search" type="text" id="search" class="w-full pl-3 z-10 pr-10 py-2 border-1 border-green-300 rounded-xl hover:border-gray-200 focus:outline-none focus:border-green-50 transition-colors" placeholder="¿Qué estás buscando...?">

        
    {{-- <input  @click="open = true" wire:model="search" type="text" id="search" class="w-full pl-3 z-10 pr-10 py-2 border-1 border-green-300 rounded-xl hover:border-gray-200 focus:outline-none focus:border-green-50 transition-colors" placeholder="¿Que estas buscando...?"> --}}
    <button class="block w-7 h-7 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-gray-400 transition-colors"><i class="mdi mdi-magnify"></i></button>

    {{-- <button type="button" class="focus:outline-none text-white text-sm py-1 px-2  w-16 h-12 absolute top-0 right-0 rounded-md bg-gradient-to-r from-green-400 to-green-600 transform hover:scale-110">Buscar</button> --}}
   

                @if ($search)
                        <ul class="absolute z-50 left-0 w-full bg-white mt-1 rounded-lg overflow-hidden ">
                                            @forelse ($this->results as $result)
                                            <div wire:click="$emit('updatedart',{{$result->id}})">
                                                 <li x-show="open" @click.away="open = false"  class="text-gray-600  font-semibold leading-7 px-5 text-sm cursor-pointer hover:bg-blue-100 bg-white"> 
                                                 {{$result->name}} ID : {{$result->id_dopp}}
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