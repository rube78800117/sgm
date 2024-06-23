<div class="container form-control mt-12">
    <x-jet-form-section submit="save" class="">
        <x-slot name="title" class="">
            <p class="font-bold "> Crear nueva Estacion</p>

        </x-slot>


        <x-slot name="description" class="form-control">
            <span class="">Complete la siguiente informacion para crear una nueva Estacion de esta Linea</span>




            <div class="flex justify-between mr-2">

                <div>
                    {{-- STAR icono linea --}}
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="64" height="64" x="0" y="0"
                        viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512 512" xml:space="preserve"
                        {{-- class="fill-current text-{{ $item->options->line_color }}"> --}} class="fill-current text-{{ $line->color }}">
                        <g>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path fill="currentcolor"
                                        d="M406.543,188.63c-3.085-3.35-7.428-5.255-11.981-5.255H186.954c-4.554,0-8.899,1.905-11.982,5.255    c-37.133,40.315-58.429,98.289-58.429,159.059c0,57.446,19.382,116.669,58.429,159.059c3.085,3.349,7.43,5.254,11.982,5.254    h207.607c4.553,0,8.898-1.905,11.982-5.254c38.929-42.261,58.43-101.378,58.43-159.059    C464.973,286.92,443.677,228.944,406.543,188.63z M274.468,334.16H149.529c2.67-45.034,18.595-87.191,44.775-118.203h80.164    V334.16z M307.049,334.16V215.957h80.163c26.182,31.012,42.106,73.169,44.776,118.203H307.049z"
                                        fill="#024820" data-original="#000000" style="" class="" />
                                </g>
                            </g>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path fill="currentcolor"
                                        d="M495.299,13.917c-1.313-8.901-9.581-15.064-18.494-13.737L256.607,32.678c-8.942-19.27-28.464-32.673-51.068-32.673    c-28.368,0-51.888,21.103-55.717,48.433L30.439,66.056c-8.901,1.313-15.051,9.593-13.737,18.494    c1.195,8.094,8.151,13.914,16.095,13.914c0.792,0,1.592-0.057,2.399-0.178l119.612-17.654    c5.084,10.548,13.367,19.271,23.577,24.919v43.554h87.866l-33.563-23.473v-20.078c14.937-8.264,25.743-23.116,28.457-40.613    l220.416-32.53C490.463,31.098,496.613,22.818,495.299,13.917z M205.537,79.975c-13.065,0-23.694-10.629-23.694-23.694    s10.629-23.694,23.694-23.694c13.065,0,23.694,10.629,23.694,23.694C229.233,69.346,218.603,79.975,205.537,79.975z"
                                        fill="#024820" data-original="#000000" style="" class="" />
                                </g>
                            </g>

                        </g>
                    </svg> 
                    {{-- END icono linea --}}
                </div>
               
            </div>

        </x-slot>


        <x-slot name="form">
            <div class=" form-control border-0 col-span-6 sm:col-span-4">
                <div class="col-span-6 sm:col-span-4">
                    <div class=" input-group input-group-floating">
                        <span class="input-group-text"></span>
                        <div class= "form-floating">
                            <input wire:model="createForm.name" type="text" class="form-control"
                                id="basic-createForm.name" placeholder="Nombre..." aria-label="createForm.name"
                                aria-describedby="basic-createForm.name" />
                            <label for="basic-createForm.name">Nombre de la Estación</label>

                        </div>
                        <span class="form-floating-focused"></span>

                    </div>
                    <x-jet-input-error for="createForm.name" />
                </div>




                {{-- <x-jet-input wire:model="createForm.name" type="text" placeholder="ESTACION-16 DE JULIO "
                    class="w-full mt-1" />
                <x-jet-input-error for="createForm.name" /> --}}
            </div>

            {{-- <div class="hidden col-span-6 sm:col-span-4">
                <x-jet-label>
                    Slug
                </x-jet-label>
                <x-jet-input disabled wire:model="createForm.slug" type="text" class="w-full mt-1" />
                <x-jet-input-error for="createForm.slug" />
            </div> --}}



            <div class="col-span-6 sm:col-span-4">
                <div class="flex items-center">
                    <p> </p>

                </div>
            </div>

        </x-slot>


        <x-slot name="actions">
            <x-jet-action-message class=" text-green-400 mr-3" on="saved">
                <span class="form-control "> Estación creada exitosamente</span>
            </x-jet-action-message>
            <x-jet-button>
                Agregar
            </x-jet-button>
        </x-slot>

    </x-jet-form-section>



    <x-jet-action-section class="form-control">
        <x-slot name="title">
            <p class=""> Lista de Estaciones de esta Linea</p>
        </x-slot>

        <x-slot name="description">
            <span class="">Aqui encontrará todas las estaciones agregadas para esta Linea</span>




        </x-slot>

        <x-slot name="content" class="form-control">
            <table class="">

                <thead class="border-b  border-gray-600">
                    <tr class="text-left">
                        <th class="py-2 w-full">Nombre</th>
                        <th class="py-2  ">Accion</th>
                    </tr>
                </thead>
                <tbody class="divide-y ">
                    @foreach ($stations as $station)
                        <tr class=" ">
                            <td class="py-2">

                                <span class="inline-block w-8 text-center mr-2"><i class="fas fa-tram"></i></span>

                                <a href=" {{ route('admin.warehouses.show', $station) }} "
                                    class="uppercase underline hover:text-blue-600">{{ $line->name }} - <span
                                        class="uppercase">{{ $station->name }} </span> </a>




                            </td>
                            <td class="py-2">
                                <div class="flex divide-x font-semibold">
                                    <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                        wire:click="edit('{{ $station->id }}')"> Edit</a>
                                    <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                        wire:click="emit('deleteCategory','{{ $station->id }}')  "> Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </x-slot>
    </x-jet-action-section>




</div>
