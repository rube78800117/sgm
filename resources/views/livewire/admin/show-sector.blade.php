<div class="container mt-12">


    <x-jet-form-section submit="save">
        <x-slot name="title">
            Crear nuevo estante para deposito de materiales y repuestos.
        </x-slot>


        <x-slot name="description">
            Complete la siguiente informacion para crear una nuevo estante.
            <div>
                <div class="mb-2">
                    <label for="columns" class="block text-sm font-medium text-gray-700">Número de Columnas:</label>
                    <input wire:model="columns"  type="number" id="columns" min="1"
                        required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
                <div class="mb-2 flex flex-col-reverse">
                    <label for="levels" class="block text-sm font-medium text-gray-700">Número de Niveles:</label>
                    <input type="number" id="levels" wire:model="levels" min="1" max="26" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
                <button wire:click="generate"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Generar</button>

                <div class="flex flex-wrap gap-4 mt-4">
                    @foreach ($columnsData as $column)
                        <div class="border-2 border-gray-600  flex-1 flex flex-col">



                            @foreach (array_reverse($column) as $item)
                                <!-- Mostrar desde abajo hacia arriba -->
                                <div class=" border border-gray-700 text-center ">
                                    <span class=" w-3 border-t  py-2">{{ $item['column'] }}{{ $item['level'] }}</span>

                                </div>
                            @endforeach

                        </div>
                    @endforeach



                    {{-- 

                     @foreach ($columnsData as $column)
                          
                                 <span>{{i++}}</span>
                       
                                
                            @endforeach --}}

                </div>
                {{-- star genera estante con localizacion segun entradas --}}
                <div class="flex justify-between">
                    @php
                        $sum = 0;
                        $i = 1; // Inicializar la variable de suma en 0
                    @endphp

                    @foreach ($columnsData as $column)
                        <span></span>

                        @php
                            $sum += $i; // Sumar el valor actual de i a la variable de suma
                        @endphp
                        <span>Col: {{ $sum }}</span>
                    @endforeach
                </div>
                  {{-- END genera estante con localizacion segun entradas --}}

            </div>

        </x-slot>


        <x-slot name="form">

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Nombre
                </x-jet-label>
                <x-jet-input wire:model="createForm.name" type="text" class="w-full mt-1" />
                <x-jet-input-error for="createForm.name" />



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
            <table class="text-gray-600">

                <thead class="border-b  border-gray-600">
                    <tr class="text-left">
                        <th class="py-2 w-full">Nombre</th>
                        <th class="py-2 ">Accion</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    @foreach ($sectors as $sector)
                        <tr>
                            <td class="py-2">
                                <span class="inline-block w-8 text-center mr-2"><i class="fas fa-tram"></i></span>
                                <span class="uppercase">{{ $sector->name }} </span>
                            </td>
                            <td class="py-2">



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






    <x-jet-dialog-modal wire:model="editForm.open">
        <x-slot name="title">
            Editar estante
        </x-slot>
        <x-slot name="content" class="">
            <div class="space-y-3">


                <div class=" w-full">

                    <x-jet-label>
                        Nombre
                    </x-jet-label>
                    <x-jet-input wire:model="editForm.name" type="text" class="w-full mt-1" />
                    <x-jet-input-error for="editForm.name" />
                </div>

                <div class="p-2 bg-gray-200">
                    <div class="">
                        <x-jet-label>
                            Niveles
                        </x-jet-label>
                        <x-jet-input wire:model="editForm.slug" type="text " class="w-full mt-1 bg-gray-100" />
                        <x-jet-input-error for="editForm.slug" />
                    </div>
                    <div class="">
                        <x-jet-label>
                            Columnas
                        </x-jet-label>
                        <x-jet-input wire:model="editForm.slug" type="text " class="w-full mt-1 bg-gray-100" />
                        <x-jet-input-error for="editForm.slug" />
                    </div>
                </div>
            </div>





        </x-slot>


        <x-slot name="footer">
            <x-jet-danger-button wire:click="update()" wire:loading.attr="disabled" wire:target="update">
                Actualizar sector
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
