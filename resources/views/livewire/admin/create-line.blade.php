<div>
    <x-jet-form-section submit="save">
            <x-slot name="title">
                Crear nueva Línea



            </x-slot>


            <x-slot name="description">
                Complete la siguiente informacion para crear un nueva Línea 
            </x-slot>
                      

            <x-slot name="form">
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Nombre
                    </x-jet-label>
                    <x-jet-input wire:model="createForm.name" type="text" placeholder="LINEA ROJA" class="w-full mt-1"/>
                    <x-jet-input-error for="createForm.name" />
                    </div>

                <div class="hidden col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Slug
                    </x-jet-label>
                    <x-jet-input disabled wire:model="createForm.slug" type="text"  class="w-full mt-1 bg-gray-100"/>
                    <x-jet-input-error for="createForm.slug" />
                </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label>
                            Acrónimo del nombre de la Línea
                        </x-jet-label>
                        <x-jet-input  wire:model="createForm.acronym" type="text " placeholder="LRO" class="w-full mt-1 bg-gray-100"/>
                        <x-jet-input-error for="createForm.acronym" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Color de la Línea 
                    </x-jet-label>
                    <x-jet-input  wire:model="createForm.color" type="text " placeholder="red-600" class="w-full mt-1 bg-gray-100"/>
                    <x-jet-input-error for="createForm.color" />
                    
                    <span> Ejemplo: color Rojo: red-500, azul: blue-500 o consulte la siguiente pagina:</span>
                    <a href="https://tailwindcss.com/docs/customizing-colors">https://tailwindcss.com/docs/customizing-colors </a>  
                    </div>

                    <div class="col-span-6 sm:col-span-4" >
                        <x-jet-label class="" value="Zona asignada" />
                        <select wire:model="createForm.zone_select" placeholder="Zona" name="zone_select"
                            class="form-control rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  mb-1 mt-1 sm:text-sm   bg-white  focus:outline-none  ">
                            <option value="">Zona asignada</option>
                            @foreach ($zones as $zone)
                            <option value="{{$zone->id}}">{{$zone->name}}</option>
                            @endforeach

                        </select>
                        <x-jet-input-error for="createForm.zone_select" />
                 
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



    <x-jet-action-section >

        <div class="mt-12">
                <x-slot name="title">
                Lista de líneas
                </x-slot> 

                <x-slot name="description">
                Aqui encontrará todas las líneas agregadas
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
                            @foreach ($lines as $line)
                                <tr>
                                    <td class="py-2">
                                        <span class="inline-block w-8 text-center mr-2"><i class="fas fa-tram"></i></span>
                                        <a href=" {{route('admin.lines.show', $line)}} " class="uppercase underline hover:text-blue-600">{{$line->name}}   </a>
                                    </td>
                                    <td class="py-2">
                                        <div class="flex divide-x divide-gray-300 font-semibold">
                                     
                                            <div class="flex divide-x divide-gray-300 font-semibold">
                                                <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                                    wire:click="edit('{{ $line->id }}')"><i class="fas fa-edit mx-6" ></i></a>
                                                {{-- <a class="pr-2 hover:text-red-600 cursor-pointer mx-6"
                                                wire:click="$emit('deleteCategory', '{{$line->slug}}')"    
                                               > <i class="fas fa fa-trash-alt"> </i> N </a> --}}
        
                                        
                                        
                                            </div>



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
                Editar linea
            </x-slot>
            <x-slot name="content" class="">
                <div class="space-y-3">
                   
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
              
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label>
                            Acrónimo del nombre de la Línea
                        </x-jet-label>
                        <x-jet-input  wire:model="editForm.acronym" type="text " placeholder="LRO" class="w-full mt-1 bg-gray-100"/>
                        <x-jet-input-error for="editForm.acronym" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Color de la Línea 
                    </x-jet-label>
                    <x-jet-input  wire:model="editForm.color" type="text " placeholder="red-600" class="w-full mt-1 bg-gray-100"/>
                    <x-jet-input-error for="editForm.color" />
                    
                    <span> Ejemplo: color Rojo: red-500, azul: blue-500 o consulte la siguiente pagina:</span>
                    <a href="https://tailwindcss.com/docs/customizing-colors">https://tailwindcss.com/docs/customizing-colors </a>  
                    </div>
                        
                    <div class="col-span-6 sm:col-span-4" >
                        <x-jet-label class="" value="Zona asignada" />
                        <select wire:model="editForm.zone_select" placeholder="Zona" name="zone_select"
                            class="form-control rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  mb-1 mt-1 sm:text-sm   bg-white  focus:outline-none  ">
                            <option value="">Zona asignada</option>
                            @foreach ($zones as $zone)
                            <option value="{{$zone->id}}">{{$zone->name}}</option>
                            @endforeach

                        </select>
                        <x-jet-input-error for="editForm.zone_select" />
                 
                    </div>








                </div>
    
            </x-slot>
            <x-slot name="footer">
                <x-jet-danger-button wire:click="update()" wire:loading.attr="disabled" wire:target="update">
                    Actualizar linea
                </x-jet-danger-button>
            </x-slot>
    
        </x-jet-dialog-modal>
    
    



    </div>
