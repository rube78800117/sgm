<div class="  container mt-12">


    <x-jet-form-section submit="save">
        <x-slot name="title">
            Crear nuevo estante para deposito de materiales y repuestos.
        </x-slot>


        <x-slot name="description">
            Complete la siguiente informacion para crear una nuevo estante.
            <div>
                <div class="mb-2">


                    <div class="col-span-6 sm:col-span-4">
                        <div class=" input-group input-group-floating">
                            <span class="input-group-text"></span>
                            <div class= "form-floating">
                                <input wire:model="columns" type="number" min="1" max="6" required
                                    class="form-control" id="basic-columns" placeholder="Numero de columnas"
                                    aria-label="columns" aria-describedby="basic-columns" />
                                <label for="basic-columns">Nro de columnas</label>

                            </div>
                            <span class="form-floating-focused"></span>

                        </div>
                        <x-jet-input-error for="columns" />
                    </div>




                    {{-- <input wire:model="columns" type="number" id="columns" min="1" required
                        class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                </div>


                <div class="col-span-6 sm:col-span-4">
                    <div class="mb-2 flex flex-col-reverse">
                        <div class=" input-group input-group-floating">
                            <span class="input-group-text"></span>
                            <div class= "form-floating">
                                <input wire:model="levels" type="number" min="1" max="8" required
                                    class="form-control" id="basic-levels" placeholder="Numero de niveles"
                                    aria-label="levels" aria-describedby="basic-levels" />
                                <label for="basic-levels">Nro de niveles</label>


                            </div>
                            <span class="form-floating-focused"></span>

                        </div>
                    </div>
                    <x-jet-input-error for="levels" />
                </div>



                {{-- <div class="mb-2 flex flex-col-reverse">
                    <label for="levels" class="block text-sm font-medium text-gray-700">Número de Niveles:</label>
                    <input type="number" id="levels" wire:model="levels" min="1" max="26" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div> --}}




                <button wire:click="generate"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Generar
                </button>
                <x-jet-input-error for="combinedArray" />



                <div class="flex flex-wrap mt-4 ">
                    @foreach ($columnsData as $column)
                        <div class="  gap-1 flex-1 ">
                            <div class="flex flex-col justify-center gap-1">
                                @foreach (array_reverse($column) as $item)
                                    <!-- Mostrar desde abajo hacia arriba -->
                                    <div
                                        class=" border-1 border-{{ $warehouse->station->line->color }} text-center rounded-lg p-2 shadow-lg">
                                        <span
                                            class=" font-bold text-lg">{{ $item['column'] }}{{ $item['level'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach



                </div>
                @if (!empty($combinedArray))
                    <div class="flex  justify-between  text-{{ $warehouse->station->line->color }}">
                        <i class="fas fa-mobile"></i>
                        <i class="fas fa-mobile"></i>
                        <i class="fas fa-mobile"></i>
                    </div>
                @endif
                {{-- star genera estante con localizacion segun entradas --}}
                <div class="flex justify-between">
                    @php
                        $sum = 0;
                        $i = 1; // Inicializar la variable de suma en 0
                    @endphp

                    @foreach ($columnsData as $column)
                        @php
                            $sum += $i; // Sumar el valor actual de i a la variable de suma
                        @endphp

                        <span class="font-bold ">Col {{ $sum }}</span>
                    @endforeach
                </div>
                {{-- END genera estante con localizacion segun entradas --}}

            </div>

        </x-slot>


        <x-slot name="form">

            <div class="col-span-6 sm:col-span-4">





                <div class="col-span-6 sm:col-span-4">
                    <div class="mb-2 flex flex-col-reverse">
                        <div class=" input-group input-group-floating">
                            <span class="input-group-text"></span>
                            <div class= "form-floating">
                                <input wire:model="createForm.name" type="text" required class="form-control"
                                    id="basic-name" placeholder="Nombre delestante" aria-label="createForm.name"
                                    aria-describedby="basic-name" />
                                <label for="basic-name">Nombre de la localización</label>


                            </div>
                            <span class="form-floating-focused"></span>

                        </div>
                    </div>
                    <x-jet-input-error for="createForm.name" />
                </div>


                {{-- 
                
                <x-jet-input wire:model="createForm.name" type="text" class="w-full mt-1" />
                <x-jet-input-error for="createForm.name" /> --}}



                {{-- <div class="p-2 rounded-md my-2 bg-gray-200">
                    <div class="">
                        <x-jet-label>
                            Niveles
                        </x-jet-label>
                        <x-jet-input wire:model="createForm.levels" type="text " class="w-full mt-1 bg-gray-100" />
                        <x-jet-input-error for="createForm.levelsslug" />
                    </div>
                    <div class="">
                        <x-jet-label>
                            Columnas
                        </x-jet-label>
                        <x-jet-input wire:model="createForm.columns" type="text " class="w-full mt-1 bg-gray-100" />
                        <x-jet-input-error for="createForm.columns" />
                    </div>
                </div> --}}

            </div>










        </x-slot>


        <x-slot name="actions">
            <x-jet-action-message class="text-green-400 mr-3" on="saved">
                Estante creado exitosamente
            </x-jet-action-message>
            <x-jet-button>
                Agregar
            </x-jet-button>
        </x-slot>

    </x-jet-form-section>



    <x-jet-action-section>
        <x-slot name="title">
            Lista de estanteria disponible en esta ubicacion:
        </x-slot>

        <x-slot name="description">
            Aqui encontrará todos los estantes agregados
        </x-slot>

        <x-slot name="content">
            <table class="form-control border-0">

                <thead class="border-b  ">
                    <tr class="">
                        <th class="py-2 w-4/12">Nombre</th>
                        <th class="py-2 w-3/12">Localizaciones</th>
                        <th class="py-2 w-2/12">Accion</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    @foreach ($sectors as $sector)
                        <tr>
                            <td class="py-2 text-left">
                                <i
                                    class="text-xl text-{{ $sector->warehouse->station->line->color }} mdi mdi-library-shelves"></i>

                                <span class="inline-block w-8 text-center mr-2"></span>
                                <span class="uppercase">{{ $loop->iteration }}. {{ $sector->name }} </span>
                            </td>

                            <td class="py-2 text-left">
                                @foreach ($sector->locations as $locationKey => $location)
                                    <span class="inline-block w-8 text-center mr-2"><i
                                            class="fas fa-shelves"></i></span>
                                    <span class="uppercase">{{ $locationKey + 1 }}. {{ $location->name }}</span><br>
                                @endforeach
                            </td>

                            <td class="py-2 text-center">
                                {{ $sector->id }}
                                <div class="flex divide-x divide-gray-300 font-semibold">
                                    <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                        wire:click="edit('{{ $sector->id }}')"><i class="fas fa-edit mx-6"></i></a>
                                    <a class="pr-2 hover:text-red-600 cursor-pointer mx-6"
                                        wire:click="$emit('deleteSector', '{{ $sector->id }}')"> <i
                                            class="fas fa fa-trash-alt"> </i> </a>

                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </x-slot>
    </x-jet-action-section>






    <x-jet-dialog-modal wire:model="editForm.open" staticBackdrop>
        <x-slot name="title">
            Editar estante
        </x-slot>
        <x-slot name="content" class="">
            <div class="space-y-3">


                <div class=" w-full">


                    <div class="col-span-6 sm:col-span-4">
                        <div class="mb-2 flex flex-col-reverse">
                            <div class=" input-group input-group-floating">
                                <span class="input-group-text"></span>
                                <div class= "form-floating">
                                    <input wire:model="editForm.name" type="text" required class="form-control"
                                        id="basic-name" placeholder="Nombre delestante" aria-label="editForm.name"
                                        aria-describedby="basic-name" />
                                    <label for="basic-name">Nombre de la localización</label>


                                </div>
                                <span class="form-floating-focused"></span>

                            </div>
                        </div>
                        <x-jet-input-error for="editForm.name" />
                    </div>

                    {{-- <x-jet-input wire:model="editForm.name" type="text" class="w-full mt-1" />
                    <x-jet-input-error for="editForm.name" /> --}}



                </div>

                <div class="p-2 ">




                    <div class="col-span-6 sm:col-span-4">
                        <div class="mb-2">
                            <h3 class="text-lg font-semibold mb-2">Localizaciones:</h3>
                            @if ($this->editForm['locations'] ?? [])
                                <ul class="space-y-2">
                                    @foreach ($this->editForm['locations'] as $key => $locationId)
                                        @php($location = \App\Models\Location::find($locationId))
                                        <table class="table-auto w-full">
                                            <tbody>
                                                @if (!empty($location->id))
                                                    <tr>
                                                        <td class="border px-4 py-2 w-24">{{ $location->id }}</td>
                                                        <td class="border px-4 py-2 w-48">{{$location->name }}</td>
                                                        <td class="border px-4 py-2">
                                                            <span x-data="{ name: '{{ $location->name }}' }" x-init="name = $refs.name.value">
                                                                <div class="mb-2 flex flex-col-reverse">
                                                                    <div class=" input-group input-group-floating">
                                                                        <span class="input-group-text"></span>
                                                                        <div class= "form-floating">
                                                                            <input
                                                                                @change.prevent="$wire.updateLocation({{ $location->id }}, $event.target.value)"
                                                                                x-ref="name" class=" form-control w-24"
                                                                                type="text" :value="name"
                                                                                placeholder="Nombre de la localización"
                                                                                />
                                                                            <label for="basic-locationName">Cambia por...</label>
                                                                        </div>
                                                                        <span class="form-floating-focused"></span>
                                                                    </div>
                                                                </div>
                                                                <button wire:click="updateLocation({{ $location->id }}, $refs.name)"
                                                                    class="bg-slate-700 "><i
                                                                        class="text-green-500 fas fa-save"></i></button>
                                                            </span>
                                                        </td>
                                                        <td class="border px-4 py-2">
                                                            <button wire:click="removeLocation({{ $location->id }})"
                                                                class=""><i class=" text-red-500 fas fa-trash-alt"></i></button>
                                                        </td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-gray-500">Sin localizaciones</p>
                            @endif




                            <div class="">
                                <div class="mb-2 flex flex-col-reverse">
                                    <div class=" input-group input-group-floating">
                                        <span class="input-group-text"></span>
                                        <div class= "form-floating">
                                            <input wire:model="locationName" type="text" class="form-control"
                                                id="basic-locationName" placeholder="Nombre de la localización"
                                                aria-label="locationName" aria-describedby="basic-locationName" />
                                            <label for="basic-locationName">Nombre de la localización</label>


                                        </div>
                                        <span class="form-floating-focused"></span>

                                    </div>
                                </div>
                                <x-jet-input-error for="locationName" />
                            </div>
                            {{--             
                            <div class="my-2">
                                <input wire:model="locationName" class="form-control" type="text" placeholder="Nuevo location">
                            </div> --}}



                            <button wire:click="addLocation" class="btn btn-outline">Agregar Localización</button>

                        </div>



                    </div>


                    {{-- @foreach ($sector->locations as $locationKey => $location)
                    <div class="col-span-6 sm:col-span-4">
                        <div class="flex justify-between">
                            <div class="mb-2 flex flex-col-reverse">
                                <div class="w-full input-group input-group-floating">
                                    <span class="input-group-text"></span>
                                    <div class= "form-floating">
                                        <input wire:model="locations.{{ $location->id }}.levels"
                                            type="text" required class="form-control"
                                            id="basic-levels" placeholder="Localizacion" aria-label="levels" aria-describedby="basic-levels" />
                                        <label for="basic-levels">Localizacion</label>

                                    </div>
                                    <span class="form-floating-focused"></span>

                                </div>
                                <x-jet-input-error for="editForm.locations.{{ $location->id }}.levels" />
                            </div>
                            <div>
                  
                                <button wire:click="deleteLocation({{ $location->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Eliminar
                                </button>
                            </div>
                        </div>
                        <br>
                    @endforeach --}}


                    {{-- <div class="col-span-6 sm:col-span-4">
                        <div class="mb-2 flex flex-col-reverse">
                            <div class=" input-group input-group-floating">
                                <span class="input-group-text"></span>
                                <div class= "form-floating">
                                    <input wire:model="levels" type="number" min="1" max="8" required
                                        class="form-control" id="basic-levels" placeholder="Numero de niveles"
                                        aria-label="levels" aria-describedby="basic-levels" />
                                    <label for="basic-levels">Nro de niveles</label>
    
    
                                </div>
                                <span class="form-floating-focused"></span>
    
                            </div>
                        </div>
                        <x-jet-input-error for="levels" />
                    </div> --}}



                </div>


                {{-- <button wire:click="generate"
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Generar
            </button>
            <x-jet-input-error for="combinedArray" /> --}}

            </div>





        </x-slot>


        <x-slot name="footer">
            <x-jet-danger-button wire:click="update()" wire:loading.attr="disabled" wire:target="update">
                Salir
            </x-jet-danger-button>
        </x-slot>



    </x-jet-dialog-modal>











    @push('script')
        <script>
            Livewire.on('deleteSector', ($sector) => {
                Swal.fire({
                    title: '¿Está usted seguro de eliminar este registro?',
                    text: "¡No podrá revertir esta acción!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: '¡Si, Eliminar!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('admin.show-sector', 'delete', $sector);
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
