 <div class="container  max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24  grid grid-cols-5 gap-6">








 <div class="hidden md:block  col-span-5 pl-4 bg-gray-200 rounded-lg"> 
                <div class="col-span-3 pl-4 bg-gray-200 rounded-lg">
        <div class="bg-withe rounded shadow p-6">
            <div class="mb-4 ">
                <x-jet-label value=" Razón, motivo o trabajo para el cual será destinado el insumo o repuesto." />

                <x-jet-input Type="text" wire:model.defer="reason"  class=" w-full" />
                <x-jet-input-error for="reason"/>
                {{-- <textarea class="w-full h-16 px-3 py-2 text-base text-gray-700 placeholder-gray-600  rounded-lg "></textarea> --}}


            </div>
            <div>

                <x-jet-button 
                wire:loading.attr="disabled"
                wire:targuet="create_order"
                class="mt-6 mb-4"
                wire:click="create_order" >
                    Enviar salida
                </x-jet-button>
                <hr>
             
            </div>



        </div>
        <div class="mb-4">
            <h1>...</h1>
        </div>

    </div>



                <div class="col-span-2  bg-gray-200 rounded-lg">
        <div class="  bg-withe rounded shadow p-4">
            <ul>
                @forelse (Cart::content() as $item)

                    <li class="flex">
                        <article class="flex-1">
                            <div class="grid grid-cols-6">

                                <div class=" col-span-1">
                                    <img class="h-15 w-20 object-cover ml-2 mr-4" src=" {{ $item->options->image }} "
                                        alt="">

                                </div>
                                <div class="col-span-4 px-3">
                                    <div class="">
                                        <h1 class="font-bold text-sm text-gray-900 mr=4 my-0">{{ $item->name }}</h1>
                                        <p class="text-xs  text-gray-700 mt-0 ">
                                            {{ $item->options->warehouse }}</p>


                                        <p class=" text-xs text-gray-700 mr=4 my-0 ">ID:{{ $item->options->id_dopp }}
                                        </p>
                                        <p class=" text-xs text-gray-700 mr=4 my-0 ">ID:{{ $item->options->id_eetc }}
                                        </p>
                                    </div>


                                </div>
                                <div class="col-span-1">
                    <li class="mx-2 text-xs text-gray-700 ">Cant: {{ $item->qty }}</li>

        </div>
    </div>
    </article>



    </li>

@empty
    <li>
        <p class="text-center text-gray-800 bg-gray-200 px-4 py-4">No tiene ningún artículo seleccionado!</p>
    </li>
    @endforelse
    </ul>

</div>


</div>

</div>






<!--responsivo -->
     <div class="block md:hidden col-span-5 pl-4 bg-gray-200 rounded-lg"> 
                <div class="col-span-3 pl-4 bg-gray-200 rounded-lg">
        <div class="bg-withe rounded shadow p-6">
            <div class="mb-4 ">
                <x-jet-label value=" Razón, motivo o trabajo para el cual será destinado el insumo o repuesto." />

                <x-jet-input Type="text" wire:model.defer="reason"  class=" w-full" />
                <x-jet-input-error for="reason"/>
                {{-- <textarea class="w-full h-16 px-3 py-2 text-base text-gray-700 placeholder-gray-600  rounded-lg "></textarea> --}}


            </div>
            <div>

                <x-jet-button 
                wire:loading.attr="disabled"
                wire:targuet="create_order"
                class="mt-6 mb-4"
                wire:click="create_order" >
                    Enviar salida
                </x-jet-button>
                <hr>
            
            </div>



        </div>
        <div class="mb-4">
            <h1>...</h1>
        </div>

    </div>



                <div class="col-span-2  bg-gray-200 rounded-lg">
        <div class="  bg-withe rounded shadow p-4">
            <ul>
                @forelse (Cart::content() as $item)

                    <li class="flex">
                        <article class="flex-1">
                            <div class="grid grid-cols-6">

                                <div class=" col-span-1">
                                    <img class="h-15 w-20 object-cover ml-2 mr-4" src=" {{ $item->options->image }} "
                                        alt="">

                                </div>
                                <div class="col-span-4 px-3">
                                    <div class="">
                                        <h1 class="font-bold text-sm text-gray-900 mr=4 my-0">{{ $item->name }}</h1>
                                        <p class="text-xs  text-gray-700 mt-0 ">
                                            {{ $item->options->warehouse }}</p>


                                        <p class=" text-xs text-gray-700 mr=4 my-0 ">ID:{{ $item->options->id_dopp }}
                                        </p>
                                        <p class=" text-xs text-gray-700 mr=4 my-0 ">ID:{{ $item->options->id_eetc }}
                                        </p>
                                    </div>


                                </div>
                                <div class="col-span-1">
                    <li class="mx-2 text-xs text-gray-700 ">Cant: {{ $item->qty }}</li>

        </div>
    </div>
    </article>



    </li>

@empty
    <li>
        <p class="text-center text-gray-800 bg-gray-200 px-4 py-4">No tiene ningún artículo seleccionado!</p>
    </li>
    @endforelse
    </ul>

</div>


</div>





    </div>

    



<!--movimiento entre almacenes-->


<div class=" col-span-5 md:col-span-3">
  
<p class=" text-gray-900">MOVIMIENTO ENTRE ALMACENES</p>
    



 
 </div>

<div class="col-span-5 md:col-span-3">
        <div class="">
            <select wire:model="linewarehouse" placeholder="Estación"
            name="linewarehouse"
                class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">


                <option value="">Seleccione una ubicación</option>
                @forelse($lines ?? [] as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @empty
                <option value="">Seleccione una ubicación</option>
                @endforelse ()

            </select>
            <x-jet-input-error for="linewarehouse"/>
        </div>
    </div>
   <div class="col-span-5 md:col-span-3">
        <div class="col-span-5">
            <select wire:model="stationselect" placeholder="Estación" name="stationselect"
                class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">


                <option value="">Seleccione una Estacion</option>
                @forelse($stations ?? [] as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @empty
                {{-- <option value="">Seleccione una Estacion</option> --}}
                @endforelse ()


            </select>
            <x-jet-input-error for="stationselect"/>
        </div>
    </div>

    <div class="col-span-5 md:col-span-3">
        <div class="">
            <select wire:model="warehouseselect" placeholder="Almacén" name="warehouseselect"
                class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">

                <option value="">Seleccione un Almacén</option>
                @foreach ($warehouses ?? [] as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
                

            </select>
            <x-jet-input-error for="warehouseselect"/>
        </div>
     <button 
    wire:loading.attr="disabled"
    wire:targuet="create_mov"
    wire:click="create_mov"
    
    type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">Enviar movimiento entre almacenes</button></div>




   



   {{-- <x-jet-button 
    class="mt-6 mb-4"
    wire:loading.attr="disabled"
    wire:targuet="create_mov"
    wire:click="create_mov" >
        Enviar movimiento entre almacenes
    </x-jet-button> --}}


</div>
</div>
</div>
