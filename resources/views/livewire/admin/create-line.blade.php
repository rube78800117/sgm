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
                <div class=" input-group input-group-floating">
                    <span class="input-group-text"></span>
                    <div class= "form-floating">
                        <input wire:model="createForm.name" type="text" class=" form-control"
                            id="basic-createForm.name" placeholder="LINEA ..." aria-label="createForm.name"
                            aria-describedby="basic-createForm.name" />
                        <label for="basic-createForm.name">Nombre</label>
                    </div>
                    <span class="form-floating-focused"></span>
                </div>
                <x-jet-input-error for="createForm.name" />
            </div>



            {{-- <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Nombre
                </x-jet-label>
                <x-jet-input wire:model="createForm.name" type="text" placeholder="LINEA ROJA" class="w-full mt-1" />
                <x-jet-input-error for="createForm.name" />
            </div> --}}

            {{-- <div class="hidden col-span-6 sm:col-span-4">
                <x-jet-label>
                    Slug
                </x-jet-label>
                <x-jet-input disabled wire:model="createForm.slug" type="text" class="w-full mt-1 bg-gray-100" />
                <x-jet-input-error for="createForm.slug" />
            </div> --}}



            <div class="col-span-6 sm:col-span-4">


                <div class=" input-group input-group-floating">
                    <span class="input-group-text"></span>
                    <div class= "form-floating">
                        <input wire:model="createForm.acronym" type="text" class=" form-control"
                            id="basic-createForm.acronym" placeholder="Acrónimo de Línea"
                            aria-label="createForm.acronym" aria-describedby="basic-createForm.acronym" />
                        <label for="basic-createForm.acronym">Acrónimo del nombre de la Línea</label>

                    </div>
                    <span class="form-floating-focused"></span>

                </div>
                <x-jet-input-error for="createForm.acronym" />
            </div>






            {{-- <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Acrónimo del nombre de la Línea
                </x-jet-label>
                <x-jet-input wire:model="createForm.acronym" type="text " placeholder="LRO"
                    class="w-full mt-1 bg-gray-100" />
                <x-jet-input-error for="createForm.acronym" />
            </div> --}}










            <div class="col-span-6 sm:col-span-4">


                <div class=" input-group input-group-floating">
                    <span class="input-group-text"></span>
                    <div class= "form-floating">
                        <input wire:model="createForm.color" type="text" class=" form-control"
                            id="basic-createForm.color" placeholder="red-600" aria-label="createForm.color"
                            aria-describedby="basic-createForm.color" oninput="this.value = this.value.toLowerCase()"
                            value ="" />

                        <label for="basic-createForm.color">Codigo de color de la Línea</label>

                    </div>

                    @if ($selectedColor)
                        <div class="px-4 py-2 w-36 rounded-lg bg-{{ $selectedColor }}">
                            
                        </div>
                    @else
                        <button class="px-4 py-2 rounded-lg text-white bg-gray-500">
                            No Color Selected
                        </button>
                    @endif



                </div>
                <x-jet-input-error for="createForm.color" />
            </div>





            <div class="col-span-6 ">
                <!--  Share Project -->
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body text-center">


                            <i class="menu-icon tf-icons mdi mdi-palette"></i>
                            <i class="w-10 h-20 font-extrabold  "></i>
                            <h5 class="mt-3 fw-medium">Ver Colores</h5>
                            <p></p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#shareProject">
                                Show
                            </button>
                        </div>
                    </div>
                </div>
                <!--/  Share Project -->



                













            </div>

            <div class=" col-span-6 sm:col-span-4">
                {{-- <x-jet-label class="form-control border-0" value="Zona asignada" /> --}}
                <select wire:model="createForm.zone_select" placeholder="Zona" name="zone_select"
                    class="form-control rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  mb-1 mt-1 sm:text-sm   focus:outline-none  ">
                    <option value="">Zona asignada</option>
                    @foreach ($zones as $zone)
                        <option value="{{ $zone->id }}">{{ $zone->name }}</option>
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



    <x-jet-action-section>

        <div class=" form-control ">
            <x-slot name="title">
                Lista de líneas
            </x-slot>

            <x-slot name="description">
                Aqui encontrará todas las líneas agregadas
            </x-slot>

            <x-slot name="content">
                <table class="">

                    <thead class="border-b ">
                        <tr class="text-left">
                            <th class="py-2 w-full">Nombre</th>
                            <th class="py-2 ">Accion</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($lines as $line)
                            <tr>
                                <td class="py-2">
                                    <span class="text-justify  inline-block w-8  mr-2">
                                        
                                        {{-- STAR icono linea --}}
                                        
                                        <div class="mr-2">


                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"
                                                width="32" height="32" x="0" y="0"
                                                viewBox="0 0 512.001 512.001"
                                                style="enable-background:new 0 0 512 512"
                                                xml:space="preserve" {{-- class="fill-current text-{{ $item->options->line_color }}"> --}}
                                                class="fill-current text-{{ $line->color }}">
                                                <g>
                                                    <g xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path fill="currentcolor"
                                                                d="M406.543,188.63c-3.085-3.35-7.428-5.255-11.981-5.255H186.954c-4.554,0-8.899,1.905-11.982,5.255    c-37.133,40.315-58.429,98.289-58.429,159.059c0,57.446,19.382,116.669,58.429,159.059c3.085,3.349,7.43,5.254,11.982,5.254    h207.607c4.553,0,8.898-1.905,11.982-5.254c38.929-42.261,58.43-101.378,58.43-159.059    C464.973,286.92,443.677,228.944,406.543,188.63z M274.468,334.16H149.529c2.67-45.034,18.595-87.191,44.775-118.203h80.164    V334.16z M307.049,334.16V215.957h80.163c26.182,31.012,42.106,73.169,44.776,118.203H307.049z"
                                                                fill="#024820" data-original="#000000"
                                                                style="" class="" />
                                                        </g>
                                                    </g>
                                                    <g xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path fill="currentcolor"
                                                                d="M495.299,13.917c-1.313-8.901-9.581-15.064-18.494-13.737L256.607,32.678c-8.942-19.27-28.464-32.673-51.068-32.673    c-28.368,0-51.888,21.103-55.717,48.433L30.439,66.056c-8.901,1.313-15.051,9.593-13.737,18.494    c1.195,8.094,8.151,13.914,16.095,13.914c0.792,0,1.592-0.057,2.399-0.178l119.612-17.654    c5.084,10.548,13.367,19.271,23.577,24.919v43.554h87.866l-33.563-23.473v-20.078c14.937-8.264,25.743-23.116,28.457-40.613    l220.416-32.53C490.463,31.098,496.613,22.818,495.299,13.917z M205.537,79.975c-13.065,0-23.694-10.629-23.694-23.694    s10.629-23.694,23.694-23.694c13.065,0,23.694,10.629,23.694,23.694C229.233,69.346,218.603,79.975,205.537,79.975z"
                                                                fill="#024820" data-original="#000000"
                                                                style="" class="" />
                                                        </g>
                                                    </g>

                                                </g>
                                            </svg>
                                        </div>
                                    
                                       {{-- END icono linea --}}
                                    
                                    
                                    </span>
                                    <a href=" {{ route('admin.lines.show', $line) }} "
                                        class="uppercase underline hover:text-blue-600">{{ $line->name }} </a>
                                </td>
                                <td class="py-2">
                                    <div class=" flex divide-x  font-semibold">

                                            <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                                wire:click="edit('{{ $line->id }}')"><i
                                                    class="text-blue-600 fas fa-edit mx-6"></i></a>
                                            {{-- <a class="pr-2 hover:text-red-600 cursor-pointer mx-6"
                                                wire:click="$emit('deleteCategory', '{{$line->slug}}')"    
                                               > <i class="fas fa fa-trash-alt"> </i> N </a> --}}



                                 


                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </x-slot>
        </div>





    </x-jet-action-section>


    <x-jet-dialog-modal wire:model="editForm.open" class="form-control">
        <x-slot name="title">
            Editar linea
        </x-slot>
        <x-slot name="content" class="">
            <div class="form-control space-y-3">

           

                    {{-- <x-jet-input wire:model="editForm.name" type="text" class="form-control border-0 w-full mt-1" /> --}}

                    <div class="">
                        <div class=" input-group input-group-floating">
                            <span class="input-group-text"></span>
                            <div class= "form-floating">
                                <input wire:model="editForm.name" type="text" class=" form-control"
                                    id="basic-createForm.name" placeholder="LINEA ..." aria-label="editForm.name"
                                    aria-describedby="basic-editForm.name" />
                                <label for="basic-editForm.name">Nombre</label>
                            </div>
                            <span class="form-floating-focused"></span>
                        </div>
                        <x-jet-input-error for="editForm.name" />
                    </div>


            
                {{-- <div class="form-control border-0">
                    <x-jet-label>
                        Slug
                    </x-jet-label>
                    <x-jet-input disabled wire:model="editForm.slug" type="text "
                        class="w-full mt-1 bg-gray-100" />
                    <x-jet-input-error for="editForm.slug" />
                </div> --}}




                <div class="col-span-6 sm:col-span-4">


                    <div class=" input-group input-group-floating">
                        <span class="input-group-text"></span>
                        <div class= "form-floating">
                            <input wire:model="editForm.acronym" type="text" class=" form-control"
                                id="basic-editForm.acronym" placeholder="Acrónimo de Línea"
                                aria-label="editForm.acronym" aria-describedby="basic-editForm.acronym" />
                            <label for="basic-editForm.acronym">Acrónimo Línea</label>
    
                        </div>
                        <span class="form-floating-focused"></span>
    
                    </div>
                    <x-jet-input-error for="editForm.acronym" />
                </div>
    











                <div class="col-span-6 sm:col-span-4">


                    <div class=" input-group input-group-floating">
                        <span class="input-group-text"></span>
                        <div class= "form-floating">
                            <input wire:model="editForm.color" type="text" class=" form-control"
                                id="basic-editForm.color" placeholder="red-600" aria-label="editForm.color"
                                aria-describedby="basic-editForm.color" oninput="this.value = this.value.toLowerCase()"
                                value ="" />
    
                            <label for="basic-editForm.color">Codigo de color de la Línea</label>
    
                        </div>
    
                        @if ($selectedColor)
                            <div class="px-4 py-2 w-36 rounded-lg bg-{{ $selectedColor }}">
                                
                            </div>
                        @else
                            <div class="px-4 py-2 rounded-lg text-white bg-gray-500">
                                No Color Selected
                            </div>
                        @endif
    
               </div>
                    <x-jet-input-error for="createForm.color" />
                </div>

       



                         <!--  Share Project -->
                         <div class="col-12 col-sm-6 col-lg-4 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
        
        
                                    <i class="menu-icon tf-icons mdi mdi-palette"></i>
                                    <i class="w-10 h-20 font-extrabold  "></i>
                                    <h5 class="mt-3 fw-medium">Ver Colores</h5>
                                    <p></p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#shareProject">
                                        Show
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--/  Share Project -->

                {{-- <div class="form-control border-0 col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Color de la Línea
                    </x-jet-label>
                    <x-jet-input wire:model="editForm.color" type="text " placeholder="red-600"
                        class="w-full mt-1 bg-gray-100" />
                    <x-jet-input-error for="editForm.color" />

                    <span> Ejemplo: color Rojo: red-500, azul: blue-500 o consulte la siguiente pagina:</span>
                    <a href="https://tailwindcss.com/docs/customizing-colors">https://tailwindcss.com/docs/customizing-colors
                    </a>
                </div> --}}

                <div class="col-span-6 sm:col-span-4">
                    {{-- <x-jet-label class="" value="Zona asignada" /> --}}
                    <select wire:model="editForm.zone_id" placeholder="Zona" name="editForm.zone_id"
                        class="form-control rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  mb-1 mt-1 sm:text-sm    focus:outline-none  ">
                        <option value="">Zona asignada</option>
                        @foreach ($zones as $zone)
                            <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                        @endforeach

                    </select>
                    <x-jet-input-error for="editForm.zone_id" />

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
<!-- Share Project Modal -->
<div class="modal fade" id="shareProject" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body pt-3 pt-md-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="text-center">
                    <h3 class=" font-bold mb-2">Paleta de colores</h3>
                    <p>Seleccione el color mas apropiado para la linea</p>
                </div>
            </div>
            @livewire('mycomponents.color-selector')
            <div class="d-flex align-items-start mt-4 align-items-sm-center">
                <i class="mdi mdi-account-supervisor me-2"></i>
                <div
                    class="d-flex justify-content-between flex-grow-1 align-items-center flex-wrap gap-2">
                    <h6 class="mb-0"></h6>
                   
                    <button
                    type="reset"
                    class="btn btn-outline-secondary btn-reset"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                    Salir
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Share Project Modal -->
