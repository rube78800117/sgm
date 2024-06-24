
<div class="container mt-12">
    <x-jet-form-section submit="save">
        <x-slot name="title">
            Crear nueva Subcategoria
        </x-slot>


        <x-slot name="description">
            Complete la siguiente informacion para crear una nueva subcategoría 
        </x-slot>
                  

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <label for="createForm.image" class="form-label">Nombre nueva sub categoria</label>
                    <div class="input-group input-group-floating">
                        <span class="input-group-text"></span>
                        <div class="form-floating">
                            <input wire:model="createForm.name" type="text"
                                class="form-control" id="basic-createForm.name"
                                placeholder="Nombre de la subcategoria " aria-label="createForm.name"
                                aria-describedby="basic-createForm.name" />
                            <label for="basic-createForm.name">Nombre subcategoria...</label>
                        </div>
                        <span class="form-floating-focused"></span>
                    </div>
                    <x-jet-input-error for="createForm.name" />
                </div>
    
 
            {{-- <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Slug
                </x-jet-label>
                <x-jet-input disabled wire:model="createForm.slug" type="text" class="w-full mt-1 bg-gray-100"/>
                <x-jet-input-error for="createForm.slug"/>
            </div> --}}
            
           
  

        </x-slot>


        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                Subcategoría creada exitosamente
            </x-jet-action-message>
            <x-jet-button>
                Agregar
            </x-jet-button>
        </x-slot>

</x-jet-form-section>



<x-jet-action-section>
    <x-slot name="title">
     Lista de Subcategorías
    </x-slot> 

    <x-slot name="description">
    Aqui encontrará todas las subcategorias agregadas
    </x-slot> 

    <x-slot name="content">
    <table class="">

            <thead class="border-b  ">
                <tr class="text-left">
                    <th class="py-2 w-full">Nombre</th>
                    <th class="py-2 ">Accion</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300">
                @foreach ($subcategories as $subcategory)
                    <tr>
                        <td class="py-2">
                            <span class="inline-block w-8 text-center mr-2"><i class="far fa-folder"></i></span>
                            <span class="uppercase">{{$subcategory->name}}   </span>
                        </td>
                        <td class="py-2">


                            <div class="flex  font-semibold">
                                <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                    wire:click="edit('{{ $subcategory->id }}')"><i class="text-blue-500 fas fa-edit mx-6" ></i></a>
                                <a class="pr-2 hover:text-red-600 cursor-pointer mx-6"
                                wire:click="$emit('deleteSubcategory', '{{$subcategory->id}}')"    
                               > <i class="text-red-500 fas fa fa-trash-alt"> </i> </a>

                        
                        
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
        Editar Subcategoria
    </x-slot>
    <x-slot name="content" class="">
        <div class="space-y-3">
         

            <div class="">

                <label for="createForm.name" class="form-label">Sub categoria</label>
                <div class="input-group input-group-floating">
                    <span class="input-group-text"></span>
                    <div class="form-floating">
                        <input wire:model="editForm.name" type="text"
                            class="form-control" id="basic-createForm.name"
                            placeholder="Nombre de la subcategoria " aria-label="editForm.name"
                            aria-describedby="basic-createForm.name" />
                        <label for="basic-createForm.name">subcategoria...</label>
                    </div>
                    <span class="form-floating-focused"></span>
                </div>
                <x-jet-input-error for="editForm.name" />
            </div>

            {{-- <div class="">
                <x-jet-label>
                    Slug
                </x-jet-label>
                <x-jet-input disabled wire:model="editForm.slug" type="text " class="w-full mt-1 bg-gray-100" />
                <x-jet-input-error for="editForm.slug" />
            </div> --}}
    </div>

    </x-slot>
    <x-slot name="footer">
        <x-jet-danger-button wire:click="update()" wire:loading.attr="disabled" wire:target="update">
            Actualizar Subcategoria
        </x-jet-danger-button>
    </x-slot>

</x-jet-dialog-modal>











@push('script')
<script>
    Livewire.on('deleteSubcategory', ($subcategory) => {
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
                Livewire.emitTo('admin.show-category', 'delete', $subcategory);
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
