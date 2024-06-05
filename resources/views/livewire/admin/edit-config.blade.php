<div>
    <x-jet-form-section submit="save">
        <x-slot name="title">
            Configuraciones


















        </x-slot>


        <x-slot name="description">
            En esta seccion puede realizar configuraciones para el sistema
        </x-slot>


        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label class="text-xl font-bold ">
                    Habilitar el registro de nuevos usuarios?
                </x-jet-label>

                <div class="flex gap-6">


                    <div>
                        <label for="">
                            <input {{$estado->activ_register ? 'checked' :''}} value='1' type="radio" name='ppp'
                                wire:change="assignValue({{1}}, $event.target.value)">
                            Si
                        </label>

                        <label class="ml-4">
                            <input {{$estado->activ_register ? '' :'checked'}} value='0' type="radio" name='ppp'
                                wire:change="assignValue({{1}}, $event.target.value)">
                            No
                        </label>
                    </div>
                    <div>

                

                        <p class="text-gray-900 text-center ">
                            @if (($estado->activ_register)==1)
                            <span
                                class="inline-flex bg-green-500 text-white rounded-full h-6 px-3 justify-center items-center">El
                                registro de nuevos usuarios ya esta HABILITADO</span>
                            @else
                            <span class="inline-flex  text-red-700 rounded-full h-6 px-3 justify-center items-center">
                                El registro de nuevos usuarios está deshabilitado
                            </span>

                            @endif
                        </p> 


                    </div>

                </div>

            <h3 class="mt-4 font-bold text-xl">Vaciar almacen</h3>
              

              <div class="form-group ">
     
                    <div class="col-span-2  md:col-span-2">
                        
                        <div class=""><span class=" sm:block">Datos del almacen (Ubicación):</span>
                            <select wire:model="linewarehouse" placeholder="Estación" name="linewarehouse"
                                class="rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">


                                <option value="">Seleccione una ubicación</option>
                                @forelse($lines ?? [] as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @empty
                                <option value="">Seleccione una ubicación</option>
                                @endforelse ()

                            </select>
                            <x-jet-input-error for="linewarehouse" />
                        </div>
                    </div>

                    <div class="col-span-2 sm:pt-2 md:col-span-2">
                        <div class="">
                            <select wire:model="stationselect" placeholder="Estación" name="stationselect"
                                class="rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">


                                <option value="">Seleccione una Estacion</option>
                                @forelse($stations ?? [] as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @empty
                                {{-- <option value="">Seleccione una Estacion</option> --}}
                                @endforelse ()


                            </select>
                            <x-jet-input-error for="stationselect" />
                        </div>
                    </div>

                    <div class="col-span-2 sm:pt-2 md:col-span-2">
                        <div class="">
                            <select wire:model="warehouseselect" placeholder="Almacén" name="warehouseselect"
                                class="rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">

                                <option value="">Seleccione un Almacén</option>
                                @foreach ($warehouses ?? [] as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach

                            </select>
                            <x-jet-input-error for="warehouseselect" />
                        </div>
                    </div>
                <div class="flex justify-between">                                                                                                                          
                <x-button-enlace wire:click="stockWarehouse()" color="blue" class="mt-4">  Mostrar stock actual de almacén seleccionado</x-button-enlace><x-button-enlace  wire:click="$emit('deleteWarehouseArticle')" color="red" class="mt-4">Vaciar almacén</x-button-enlace>

                </div>
              
              </div>
              <x-jet-action-message 
               on="deleted" class="mr-4">
                <p class="text-red-600"> Los registros se han eliminado permanentemente</p> 
              </x-jet-action-message> 
    

    <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            ID1
                        </th>
                        <th
                            class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            ID2
                        </th>
                        <th
                            class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            ID3
                        </th>

                        <th
                            class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nombre
                        </th>
                        <th
                            class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Cantidad
                        </th>


                    </tr>
                </thead>
                <tbody>
                @if($result)
    <!-- Iterar sobre cada elemento de la colección -->
    @foreach($result as $articleWarehouse)

                    <tr>


                        </td>
                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$articleWarehouse->article->id_dopp  }} 
                         <!-- ?? ''   -->
                            </p> 
                        </td>


                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$articleWarehouse->article->id_eetc}}
                            </p>
                        </td>
                        
                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$articleWarehouse->article->id_zona}}
                            </p>
                        </td>


                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$articleWarehouse->article->name}}
                            </p>
                        </td>


                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$articleWarehouse->quantity}}
                            </p>
                        </td>



                   

                    </tr>
                    @endforeach

                    </tbody>
                    </table>
        <!-- Acceder al id de cada modelo individual -->

                    @else
                        No hay resultados
                    @endif
        </x-slot>

    </x-jet-form-section>






    @push('script')
                <script>
                   
                     
                            
                        Livewire.on('deleteWarehouseArticle',() =>{
                        Swal.fire({
                        title: '¿Está usted seguro de eliminar estos registro?',
                        text: "¡No podrá revertir esta acción!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: '¡Si, Eliminar!'
                        }).then((result) => {
                                    if (result.isConfirmed) {
                                       Livewire.emitTo('admin.edit-config','stockDelete');
                                        Swal.fire(
                                            
                                        '¡Eliminado!',
                                        'El registro de este artículo ha sido eliminado.',
                                        'success'
                                        )
                                    }
                                })       

                        })


                      



                </script>
            @endpush


</div>