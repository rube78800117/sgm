
<div class="container mt-12">
    <x-jet-form-section submit="save">
        <x-slot name="title">
            Crear nueva Estacion
        </x-slot>


        <x-slot name="description">
            Complete la siguiente informacion para crear una nueva Estacion de esta Linea
        </x-slot>
                  

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Nombre Estacion
                </x-jet-label>
                <x-jet-input wire:model="createForm.name" type="text" placeholder="ESTACION-16 DE JULIO " class="w-full mt-1"/>
                <x-jet-input-error for="createForm.name"/>
                </div>

            <div class="hidden col-span-6 sm:col-span-4">
                <x-jet-label>
                    Slug
                </x-jet-label>
                <x-jet-input disabled wire:model="createForm.slug" type="text" class="w-full mt-1 bg-gray-100"/>
                <x-jet-input-error for="createForm.slug"/>
            </div>
           
               
            
            <div class="col-span-6 sm:col-span-4">
                <div class="flex items-center">
                    <p> </p>

                </div>
            </div>       

        </x-slot>


        <x-slot name="actions">
            <x-jet-action-message class=" text-green-400 mr-3" on="saved">
                Estación creada exitosamente
            </x-jet-action-message>
            <x-jet-button>
                Agregar
            </x-jet-button>
        </x-slot>

</x-jet-form-section>



<x-jet-action-section>
    <x-slot name="title">
     Lista de Estaciones de esta Linea
    </x-slot> 

    <x-slot name="description">
    Aqui encontrará todas las estaciones agregadas para esta Linea
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
                @foreach ($stations as $station)
                    <tr>
                        <td class="py-2">
                            <span class="inline-block w-8 text-center mr-2"><i class="fas fa-tram"></i></span>

                            <a href=" {{route('admin.warehouses.show', $station)}} " class="uppercase underline hover:text-blue-600">{{$line->name}} - <span class="uppercase">{{$station->name}}   </span> </a>
                            
                           


                        </td>
                        <td class="py-2">
                            <div class="flex divide-x divide-gray-300 font-semibold">
                                <a class="pr-2 hover:text-blue-600 cursor-pointer" wire:click="edit('{{$station->id}}')">Editar</a>
                                <a class="pr-2 hover:text-blue-600 cursor-pointer" wire:click="emit('deleteCategory','{{$station->id}}')  ">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
               
            </tbody>

    </table>
    </x-slot> 
</x-jet-action-section> 




</div>
