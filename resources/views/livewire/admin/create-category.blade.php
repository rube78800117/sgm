<div>
    <x-jet-form-section submit="save">
        <x-slot name="title">
            Crear nueva categoria
        </x-slot>


        <x-slot name="description">
            Complete la siguiente informacion para crear una nueva categoría
        </x-slot>


        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Nombre
                </x-jet-label>
                <x-jet-input wire:model="createForm.name" type="text" class="w-full mt-1" />
                <x-jet-input-error for="createForm.name" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Slug
                </x-jet-label>
                <x-jet-input disabled wire:model="createForm.slug" type="text " class="w-full mt-1 bg-gray-100" />
                <x-jet-input-error for="createForm.slug" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Imagen
                </x-jet-label>
                <input wire:model="createForm.image" type="file" name="" id="" class="mt-1" />
                <x-jet-input-error for="createForm.image" />
            </div>

        </x-slot>


        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                Categoría creada exitosamente
            </x-jet-action-message>
            <x-jet-button>
                Agregar
            </x-jet-button>
        </x-slot>

    </x-jet-form-section>



    <x-jet-action-section>

        <div class="mt-12">
            <x-slot name="title">
                Lista de categorías
            </x-slot>

            <x-slot name="description">
                Aqui encontrará todas las categorias agregadas
            </x-slot>

            <x-slot name="content">
                <table class="text-gray-600">

                    <thead class="border-b  border-gray-600">
                        <tr class="text-left">
                            <th class="py-2 w-full">Nombre</th>
                            <th class="py-2 text-center mx-6 ">Accion</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-300">
                        @foreach ($departments as $department)
                            <tr>
                                <td class="py-2">
                                    <span class="inline-block w-8 text-center mr-2"><i class="fas fa-tram"></i></span>
                                    <a href=" {{ route('admin.categories.show', $department) }} "
                                        class="uppercase underline hover:text-blue-600">{{ $department->name }} </a>
                                </td>
                                <td class="py-2">
                                    <div class="flex divide-x divide-gray-300 font-semibold">
                                        <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                            wire:click="edit('{{ $department->slug }}')"><i class="fas fa-edit mx-6" ></i></a>
                                        <a class="pr-2 hover:text-red-600 cursor-pointer mx-6"
                                        wire:click="$emit('deleteCategory', '{{$department->slug}}')"    
                                       > <i class="fas fa fa-trash-alt"> </i> </a>

                                
                                       {{-- wire:click="delete('{{ $department->slug }}') --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </x-slot>
        </div>

    </x-jet-action-section>


    <x-jet-dialog-modal wire:model="editForm.open">
        <x-slot name="title">
            Editar categoria
        </x-slot>
        <x-slot name="content" class="">
            <div class="space-y-3">
                <div>
                    @if ($editImage)
                        {{-- {{ dd($editImage)}} --}}

                        <img class="w-full h-64 object-cover object-center" src="{{ $editImage->temporaryUrl() }}"
                            alt="">
                    @else
                        <img class="w-full h-64 object-cover object-center" src="{{ Storage::url($editForm['image']) }}"
                            alt="">
                    @endif

                </div>

                <div class="">





                    <x-jet-label>
                        Nombre
                    </x-jet-label>
                    <x-jet-input wire:model="editForm.name" type="text" class="w-full mt-1" />
                    <x-jet-input-error for="editForm.name" />
                </div>

                <div class="">
                    <x-jet-label>
                        Slug
                    </x-jet-label>
                    <x-jet-input disabled wire:model="editForm.slug" type="text " class="w-full mt-1 bg-gray-100" />
                    <x-jet-input-error for="editForm.slug" />
                </div>
                <div class="">
                    <x-jet-label>
                        Imagen
                    </x-jet-label>
                    <input wire:model="editImage" type="file" name="" id="" class="mt-1" />
                    <x-jet-input-error for="editImage" />
                </div>
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-jet-danger-button wire:click="update()" wire:loading.attr="disabled" wire:target="editImage, update">
                Actualizar categoria
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>



    @push('script')
        <script>
            Livewire.on('deleteCategory', (slug) => {
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
                        Livewire.emitTo('admin.create-category', 'delete', slug);
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
