<div class="form-control relative mb-4" x-data="{ isVisible: false, open: true}" @click.away="isVisible = false">
    <div x-show="open">
        <input wire:model="searchText" @focus="isVisible = true" type="text"
            class=" rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full mb-1"
            placeholder="Prov...">
    </div>




    {{-- /*********Botones emerjentes despues de seleccionar un item --}}
    <div class="flex flex-wrap flex-1 gap-1 mb-1">
        <span class="">{{$label}} </span>
        @foreach($selectedItems as $selected)
        <div class="grid grid-cols-1">
            <div>
                <span @click=" open = true"
                    class="transition-all bg-green-400 hover:bg-red-400 rounded p-1 text-sm text-white font-bold cursor-pointer"
                    wire:click="remove({{$selected->id}})">
                    {{ $selected->name_company}}
                </span>
            </div>
            {{-- <input name="{{$name}}[]" value="{{$selected->name}}"> --}}
            <div>
                <span>
                    <p><span class="font-bold">Proveedor: </span><span class=" "> {{ $selected->name}} </span></p>
                    <p> <span class="font-bold">Teléfono: </span> <span>{{ $selected->phone}} - </span> <span
                            class="font-bold"> Dirección: </span> <span> {{ $selected->address}} </span></p>

            </div>
        </div>

        @endforeach
    </div>
    {{-- END /*********Botones emerjentes despues de seleccionar un item --}}






    <x-card x-show="isVisible" style="display: none"
        class="absolute w-full max-h-40 overflow-scroll border-b border-gray-300 overscroll-contain">
        @foreach($items as $item)
        <div class=" text-sm w-full bg-gray-100 p-1 mb-1 rounded-md hover:bg-gray-200 cursor-pointer pl-2 font-semibold"
            wire:click="choose({{$item->id}}, '{{$item->name}}')" @click="isVisible = false, open = false">
            {{$item->name}}




        </div>
        @endforeach
        <div>

        </div>
    </x-card>



</div>