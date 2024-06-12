<div>
    {{-- Be like water. --}}
    <div>
        <div class=" bg-withe rounded shadow p-4 ">
            <div class="mb-4 ">
                <x-jet-label value=" Razón, motivo para el cual será destinado el articulo, insumo o repuesto." />

                <x-jet-input Type="text" wire:model.defer="reasonMove" class=" w-full" />
                <x-jet-input-error for="reasonMove" />
                {{-- <textarea class="w-full h-16 px-3 py-2 text-base text-gray-700 placeholder-gray-600  rounded-lg "></textarea> --}}


            </div>



            <div>
                <x-jet-label value="Seleccione la ubicacion del destino de este movimiento" />
                <div class="col-span-5 md:col-span-3">

                    <select wire:model="linewarehouse" placeholder="Estación" name="linewarehouse"
                        class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">


                        <option value="">Seleccione una ubicación</option>
                        @forelse($lines ?? [] as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @empty
                            <option value="">Seleccione una ubicación</option>
                        @endforelse ()

                    </select>
                    <x-jet-input-error for="linewarehouse" />

                </div>

                <div class="col-span-5 md:col-span-3">

                    <select wire:model="stationselect" placeholder="Estación" name="stationselect"
                        class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">


                        <option value="">Seleccione una Estacion</option>
                        @forelse($stations ?? [] as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @empty
                            {{-- <option value="">Seleccione una Estacion</option> --}}
                        @endforelse ()


                    </select>
                    <x-jet-input-error for="stationselect" />

                </div>

                <div class="col-span-5 md:col-span-3">
                    <div class="">
                        <select wire:model="warehouseselect" placeholder="Almacén" name="warehouseselect"
                            class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">

                            <option value="">Seleccione un Almacén</option>
                            @foreach ($warehouses ?? [] as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach


                        </select>
                        <x-jet-input-error for="warehouseselect" />
                    </div>
                    <div class="mt-2">


                        <x-jet-label value="Fecha del movimiento" />

                        <x-jet-input Type="date" wire:model.defer="date_out_move" class="rounded-lg border-gray-300 " />

                        <x-jet-input-error for="date_out_move" />



                    </div>
                    <div class="flex justify-end ">
                        <button 
                            wire:loading.attr="disabled" 
                            wire:targuet="create_mov" 
                            wire:click="create_mov"
                            type="button"
                            class="focus:outline-none text-white text-sm m-2 py-2.5 px-5 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">Enviar
                            movimiento
                        </button>
                    </div>


                </div>



            </div>









            {{-- <div>

                <x-jet-button wire:loading.attr="disabled" wire:targuet="create_order" class="mt-6 mb-4"
                    wire:click="create_order">
                    Enviar movimiento
                </x-jet-button>
                <hr>

            </div> --}}



        </div>
    </div>



</div>
