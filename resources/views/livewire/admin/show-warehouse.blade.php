<div class="container pt-12">
    <x-jet-form-section submit="save">
        <x-slot name="title">
            Crear nuevo almacen
        </x-slot>


        <x-slot name="description">
            Complete la siguiente informacion para crear un nuevo almacen

            {{-- <div>
                <svg  class="fill-current text-red-600"
                width="64" height="64" x="0" y="0"> xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <title>warehouse</title>
                    <path
                        d="M6 19H8V21H6V19M12 3L2 8V21H4V13H20V21H22V8L12 3M8 11H4V9H8V11M14 11H10V9H14V11M20 11H16V9H20V11M6 15H8V17H6V15M10 15H12V17H10V15M10 19H12V21H10V19M14 19H16V21H14V19Z" />
                </svg>
            </div> --}}

            <div class="py-12">

        

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class ="fill-current text-{{$station->line->color}}" height="60px" width="60px" version="1.1" id="Layer_1" viewBox="0 0 512.001 512.001" xml:space="preserve">
                <g>
                    <g>
                        <path d="M133.566,244.87v267.13h244.87V244.87H133.566z M328.348,445.218H183.653c-9.217,0-16.696-7.479-16.696-16.696    s7.479-16.696,16.696-16.696h144.696c9.217,0,16.696,7.479,16.696,16.696S337.565,445.218,328.348,445.218z M328.348,378.436    H183.653c-9.217,0-16.696-7.479-16.696-16.696s7.479-16.696,16.696-16.696h144.696c9.217,0,16.696,7.479,16.696,16.696    S337.565,378.436,328.348,378.436z M328.348,311.653H183.653c-9.217,0-16.696-7.479-16.696-16.696    c0-9.217,7.479-16.696,16.696-16.696h144.696c9.217,0,16.696,7.479,16.696,16.696    C345.044,304.174,337.565,311.653,328.348,311.653z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M500.478,78.729L261.174,0.816c-3.369-1.087-6.979-1.087-10.348,0L11.522,78.729C4.653,80.968,0,87.381,0,94.61v50.087    c0,9.217,7.479,16.696,16.696,16.696h16.696v333.913c0,9.217,7.479,16.696,16.696,16.696h50.087V228.175    c0-9.217,7.479-16.696,16.696-16.696h278.261c9.217,0,16.696,7.479,16.696,16.696v283.826h50.087    c9.217,0,16.696-7.478,16.696-16.696V161.392h16.696c9.217,0,16.696-7.479,16.696-16.696V94.61    C512,87.381,507.348,80.968,500.478,78.729z M150.261,178.088H116.87c-9.22,0-16.696-7.475-16.696-16.696    s7.475-16.696,16.696-16.696h33.391c9.22,0,16.696,7.475,16.696,16.696S159.482,178.088,150.261,178.088z M272.696,178.088    h-33.391c-9.22,0-16.696-7.475-16.696-16.696s7.475-16.696,16.696-16.696h33.391c9.22,0,16.696,7.475,16.696,16.696    S281.916,178.088,272.696,178.088z M395.131,178.088H361.74c-9.22,0-16.696-7.475-16.696-16.696s7.475-16.696,16.696-16.696    h33.391c9.22,0,16.696,7.475,16.696,16.696S404.351,178.088,395.131,178.088z"/>
                    </g>
                </g>
                </svg>











            </div>
            </x-slot>


        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">




                <div class="col-span-6 sm:col-span-4">
                    <div class=" input-group input-group-floating">
                        <span class="input-group-text"></span>
                        <div class= "form-floating">
                            <input wire:model="createForm.name" type="text" class=" form-control"
                                id="basic-createForm.name" placeholder="Nombre del almacén" aria-label="createForm.name"
                                aria-describedby="basic-createForm.name" />
                            <label for="basic-createForm.name">Nombre del almacén</label>
                        </div>
                        <span class="form-floating-focused"></span>
                    </div>
                    <x-jet-input-error for="createForm.name" />
                </div>

        
                {{-- <x-jet-input wire:model="createForm.name" type="text" placeholder="LBL SAN JORGE ALMACEN 1 (Garaje) "
                    class="w-full mt-1" />
                <x-jet-input-error for="createForm.name" /> --}}
            </div>

            {{-- <div class="hidden col-span-6 sm:col-span-4">
                <x-jet-label>
                    Slug
                </x-jet-label>
                <x-jet-input disabled wire:model="createForm.slug" type="text " class="w-full mt-1 bg-gray-100" />
                <x-jet-input-error for="createForm.slug" />
            </div> --}}





            <div class="col-span-6 sm:col-span-4">
                <div class=" input-group input-group-floating">
                    <span class="input-group-text"></span>
                    <div class= "form-floating">
                        <input wire:model="createForm.description" type="text" class=" form-control"
                            id="basic-createForm.description" placeholder="Descripcion de lugar" aria-label="createForm.description"
                            aria-describedby="basic-createForm.description" />
                        <label for="basic-createForm.description">Descripcion de la ubicación del almacén</label>
                    </div>
                    <span class="form-floating-focused"></span>
                </div>
                <x-jet-input-error for="createForm.description" />
            </div>




{{-- 
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Descripcion de lugar de deposito
                </x-jet-label>
                <x-jet-input wire:model="createForm.description" type="text " placeholder="Garage de Cabinas"
                    class="w-full mt-1 bg-gray-100" />
                <x-jet-input-error for="createForm.description" />
            </div> --}}

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Fotografia descriptiva de ubicacion del almacén (OPCIONAL)
                </x-jet-label>
                <input wire:model="createForm.image" type="file" name="urlimage" id="urlimag" class="mt-1" />

                {{-- <x-jet-input-error for="createForm.image" /> --}}
            </div>







        </x-slot>


        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                Almacen creada exitosamente
            </x-jet-action-message>
            <x-jet-button>
                Agregar
            </x-jet-button>
        </x-slot>

    </x-jet-form-section>



    <x-jet-action-section>

        <div class="form-control mt-12">
            <x-slot name="title">
                Lista de almacenes
            </x-slot>

            <x-slot name="description">
                Aqui encontrará todos los almacenes agregados
            </x-slot>

            <x-slot name="content">
                <table class="form-control">

                    <thead class="border-b ">
                        <tr class="text-left">
                            <th class="py-2 w-full">Nombre</th>
                            <th class="py-2 ">Accion</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-300">
                        @foreach ($warehouses as $warehouse)
                            <tr>
                                <td class="py-2">



                                    <span class="inline-block w-8 text-center mr-2"><i class="fas fa-tram"></i></span>

                                    <a href=" {{ route('admin.sectors.show', $warehouse) }} "
                                        class="uppercase underline hover:text-blue-600">{{ $warehouse->name }} </a>





                                    {{-- <a href="{{route('admin.warehouses.show', $station)}}  " class="uppercase underline hover:text-blue-600">{{$warehouse->name}}   </a> --}}
                                </td>
                                <td class="py-2">


                                    <div class="flex divide-x divide-gray-300 font-semibold">
                                        <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                            wire:click="edit('{{ $station->id }}')">Editar</a>
                                        <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                            wire:click="emit('deleteCategory','{{ $station->id }}')  ">Eliminar</a>
                                    </div>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </x-slot>
        </div>

    </x-jet-action-section>





</div>
