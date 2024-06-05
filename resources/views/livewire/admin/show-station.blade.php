<div>

    {{-- The best athlete wants his opponent at his best. --}}
    <div class="rounded-xl flex justify-start ">
        <div class="w-full  py-2   ">
            <h1 class="font-semibold text-gray-600 px-12"></h1>
        </div>
    </div>


    <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 ">




        <div class="col-span-1 gap-4">




            {{-- aside de Lineas --}}
            <aside class=" py-6">
                <p class="text-center ...">Líneas</p>
                {{-- <button class="mt-8" wire:click="limpiar">
                </button>


                <x-jet-button class="my-12" wire:click="limpiar">
                    Mostrar todos
                </x-jet-button> --}}
                <div class="min-h-screen bg-gray-100 space-y-1 py-10">
                    <!-- component tarjetas de lineas-->
                    @foreach ($lines as $line)






                    <div class="container mx-auto">
                        <div wire:click="$set('lineaselect','{{$line->id}}')"
                            class="bg-white max-w-sm mx-auto rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-105 cursor-pointer">


                            <div class="h-20 bg-{{$line->color}} flex items-center justify-between">
                                <h1 class="text-white w-full py-2 px-4 ">{{$line->name}}</h1>
                                <p class="mr-20 text-white text-lg"> </p>
                                <p class="mr-4 text-white font-thin text-lg">{{$line->acronym}}</p>
                            </div>





                            <!-- <hr > -->
                            <div class="flex justify-between px-5 mb-2 text-sm text-gray-600">
                                {{-- boton ir linea --}}
                                <div
                                    class="bg-gray-100 rounded-md w-52 px-4 m-1 py-1 flex justify-center cursor-pointer">
                                    <a class="cursor-pointer hover:text-{{$line->color}} capitalize {{$line == $line->name? ' text-gray-200 font-semibold  ':'text-gray-100 '}} "
                                        wire:click="$set('lineaselect','{{$line->id}}')">
                                        <i class=" hover:text-{{$line->color}} fas fa-share">&nbsp</i> {{$line->name}}

                                        {{-- icono svg --}}

                                      
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="64" height="64"
                                            x="0" y="0" viewBox="0 0 512.001 512.001"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="fill-current text-{{ $line->color }}">
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

                                        {{--FIN icono svg --}}

                                    </a>

                                </div>
                                {{-- final boton ir linea --}}
                            </div>








                        </div>
                    </div>




                    <div class="justify-center  py-4 grid gap-4 bg-gray-100">





                    </div>
                    @endforeach
                </div>
                <!-- final component tarjetas de lineas -->


            </aside>

            {{-- Final aside de lineas --}}
        </div>






        {{-- tarjeta de estaciones --}}

        <div class="lg:col-span-4 md:col-span-2 sm:col-span-1 ">

            <section>
                <h1>{{$linename}}</h1>

                <ul class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-1 gap-1">
                    @forelse ($stations as $station)


                    <div class="  bg-gray-100  py-3 px-4 rounded-2xl w-512 my-2  ">

                        {{-- div del icono y fondos de color automaticos segun linea --}}
                        <div wire:click="$set('estacionselect','{{$station->id}}')"
                            class=" border-4  bg-{{ $color }} text-gray-700 items-center  rounded-full h-15 w-15   shadow-xl  left-2 -top-7">





                            {{-- tarjeta de almaccenpara el articulo --}}
                            <div class=" relative bg-gray-100  py-3 px-6 rounded-2xl w-128 my-2  shadow-2xl">

                                {{-- div del icono y fondos de color automaticos segun linea --}}
                                <div
                                    class=" border-4  bg-{{ $color }} text-gray-400 items-center absolute rounded-full h-15 w-15   shadow-xl  left-2 -top-7">


                                    {{--
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="36" height="36" x="0"
                                        y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="items-center justify-center mx-2 my-2">
                                        <g>
                                            <g xmlns="http://www.w3.org/2000/svg" transform="translate(1 1)">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M254.991,212.339c35.355,0,64-28.645,64-64s-28.645-64-64-64s-64,28.645-64,64S219.636,212.339,254.991,212.339z      M254.991,127.006c11.791,0,21.333,9.542,21.333,21.333s-9.542,21.333-21.333,21.333c-11.791,0-21.333-9.542-21.333-21.333     S243.2,127.006,254.991,127.006z"
                                                            fill="#767575" data-original="#000000" style="" class="" />
                                                        <path
                                                            d="M227.229,396.518l8.681,17.362c7.863,15.726,30.305,15.723,38.164-0.004l18.389-36.8     c18.466-36.902,35.939-66.021,75.763-128.619l1.036-1.629c5.852-9.199,8.681-13.651,12.042-18.961     c14.956-23.623,23.02-50.992,23.02-79.527c0-89.032-77.35-158.521-166.786-148.343c-66.548,7.591-121.188,60.835-130.398,127.125     c-5.511,39.683,4.604,78.394,27.526,109.517C165.5,278.435,189.243,320.574,227.229,396.518z M149.402,132.992     c6.528-46.989,45.76-85.218,92.967-90.603c64.055-7.29,119.289,42.33,119.289,105.951c0,20.39-5.735,39.855-16.403,56.706     c-3.34,5.276-6.155,9.708-11.991,18.88l-1.036,1.629c-40.148,63.109-58.184,93.122-77.28,131.152     c-33.196-65.363-56.271-105.169-85.935-145.383C152.636,189.087,145.437,161.538,149.402,132.992z"
                                                            fill="#767575" data-original="#000000" style="" class="" />
                                                        <path
                                                            d="M387.88,312.04c-11.464-2.719-22.961,4.371-25.68,15.835c-2.719,11.464,4.371,22.962,15.835,25.68     c57.212,13.567,90.298,35.274,90.298,50.773c0,29.478-94.949,64-213.333,64c-118.398,0-213.333-34.518-213.333-64     c0-15.508,33.053-37.209,90.236-50.773c11.464-2.719,18.553-14.217,15.834-25.681c-2.719-11.464-14.217-18.553-25.681-15.833     C47.205,329.796-1,361.445-1,404.329c0,64.804,115.134,106.667,256,106.667c140.853,0,256-41.865,256-106.667     C511,361.444,462.765,329.798,387.88,312.04z"
                                                            fill="#767575" data-original="#000000" style="" class="" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                        </g>
                                    </svg> --}}


                                </div>
                                <div class="mt-4">
                                    <p class="text-xm font-semibold my-2"> </p>
                                    <div class="flex space-x-2 text-gray-700 text-sm">
                                        <!-- svg  -->

                                        {{-- <p> {{ $color}} - {{ $station->name }}</p> --}}
                                    </div>

                                    <div class="border-t-2 "></div>
                                    {{-- {{$this->warehouses_all->station->warehouses->name}} --}}

                                    <div class="flex space-x-2">
                                    </div>



                                    {{-- boton ir linea --}}<a
                                        class="cursor-pointer hover:text-blue-500 capitalize {{$station == $station->name? 'text-blue-600 font-semibold  ':''}} "
                                        wire:click="$set('estacionselect','{{$station->id}}')">
                                        <i class=" text-{{$color}} fas fa-city">&nbsp</i>
                                        <span>{{$station->name}}</span> <br>
                                        <span>{{$linename}}</span>
                                        

                                    </a>
                                    <div
                                        class="bg-gray-100 text-gray-500 border-l-4 rounded-md w-full px-6 py-1 cursor-pointer">

                                    </div>
                                    {{-- final boton ir linea --}}

                                    @if ($station->warehouses()->count())
                                    <div class="text-green-500"><i class="fas fa-warehouse"></i>&nbsp <span
                                            class="text-gray-700 text-xs ">{{$station->warehouses()->first()->name}}</span>
                                    </div>

                                    @endif

                                </div>
                            </div>

                        </div>

                    </div>


                    @empty
                    <li class="lg:col-span-4  md:col-span-2 ">
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Upss..!</strong>
                            <span class="block sm:inline">No existe ningúna estacion en esta Línea</span>


                        </div>
                    </li>
                    @endforelse




                </ul>
            </section>







            {{-- seccion de tarjeta de almacenes --}}
            <section>

                <h1 class="m-6"> Almacenes disponibles en la estación</h1>

                <div class="bg-gray-100">
                    <ul class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
                        @forelse ($warehouses as $warehouse)


































                        <div class="  bg-gray-100  py-3 px-6 rounded-2xl w-full my-2  shadow-2xl">

                            {{-- div del icono y fondos de color automaticos segun linea --}}
                            <div
                                class=" border-4  bg-gray-200 text-gray-600 items-center  rounded-full h-15 w-15   shadow-xl  left-2 -top-7">





                                {{-- tarjeta de almaccenpara el articulo --}}
                                <div class=" relative bg-gray-100  py-3 px-6 rounded-2xl w-128 my-2  shadow-2xl">

                                    {{-- div del icono y fondos de color automaticos segun linea --}}
                                    <div
                                        class=" border-4  bg-{{ $color }} text-gray-400 items-center absolute rounded-full h-15 w-15   shadow-xl  left-2 -top-7">



                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="36" height="36"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="items-center justify-center mx-2 my-2">
                                            <g>
                                                <g xmlns="http://www.w3.org/2000/svg" transform="translate(1 1)">
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M254.991,212.339c35.355,0,64-28.645,64-64s-28.645-64-64-64s-64,28.645-64,64S219.636,212.339,254.991,212.339z      M254.991,127.006c11.791,0,21.333,9.542,21.333,21.333s-9.542,21.333-21.333,21.333c-11.791,0-21.333-9.542-21.333-21.333     S243.2,127.006,254.991,127.006z"
                                                                fill="#767575" data-original="#000000" style=""
                                                                class="" />
                                                            <path
                                                                d="M227.229,396.518l8.681,17.362c7.863,15.726,30.305,15.723,38.164-0.004l18.389-36.8     c18.466-36.902,35.939-66.021,75.763-128.619l1.036-1.629c5.852-9.199,8.681-13.651,12.042-18.961     c14.956-23.623,23.02-50.992,23.02-79.527c0-89.032-77.35-158.521-166.786-148.343c-66.548,7.591-121.188,60.835-130.398,127.125     c-5.511,39.683,4.604,78.394,27.526,109.517C165.5,278.435,189.243,320.574,227.229,396.518z M149.402,132.992     c6.528-46.989,45.76-85.218,92.967-90.603c64.055-7.29,119.289,42.33,119.289,105.951c0,20.39-5.735,39.855-16.403,56.706     c-3.34,5.276-6.155,9.708-11.991,18.88l-1.036,1.629c-40.148,63.109-58.184,93.122-77.28,131.152     c-33.196-65.363-56.271-105.169-85.935-145.383C152.636,189.087,145.437,161.538,149.402,132.992z"
                                                                fill="#767575" data-original="#000000" style=""
                                                                class="" />
                                                            <path
                                                                d="M387.88,312.04c-11.464-2.719-22.961,4.371-25.68,15.835c-2.719,11.464,4.371,22.962,15.835,25.68     c57.212,13.567,90.298,35.274,90.298,50.773c0,29.478-94.949,64-213.333,64c-118.398,0-213.333-34.518-213.333-64     c0-15.508,33.053-37.209,90.236-50.773c11.464-2.719,18.553-14.217,15.834-25.681c-2.719-11.464-14.217-18.553-25.681-15.833     C47.205,329.796-1,361.445-1,404.329c0,64.804,115.134,106.667,256,106.667c140.853,0,256-41.865,256-106.667     C511,361.444,462.765,329.798,387.88,312.04z"
                                                                fill="#767575" data-original="#000000" style=""
                                                                class="" />
                                                        </g>
                                                    </g>
                                                </g>

                                            </g>
                                        </svg>


                                    </div>
                                    <div class="mt-4">
                                        <p class="text-xm font-semibold my-2">{{$statname}}</p>



                                        <div class="flex space-x-2 text-gray-700 text-sm">
                                            <!-- svg  -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            <div>
                                                <ul>{{ $warehouse->name }}</ul>
                                                <ul>{{ $warehouse->description }}</ul>
                                            </div>

















                                        </div>



                                        <div class="border-t-2 "></div>
                                        <div class="flex space-x-2"></div>
                                        {{-- boton ir linea --}}
                                        <div class="bg-gray-100 border-l-4 rounded-md w-full px-6 py-1 cursor-pointer">
                                            {{-- <a
                                                class="cursor-pointer hover:text-blue-500 capitalize {{$station == $satation->name? 'text-blue-600 font-semibold  ':''}} "
                                                wire:click="$set('stationselect','{{$station->id}}')">
                                                <i class=" text-blue-600 fas fa-folder">&nbsp</i> {{ $station->name}}
                                                </li>
                                            </a> --}}
                                        </div>
                                        {{-- final boton ir linea --}}

                                    </div>








                                    @if($warehouse->image!= null)



                                    <div class="flex flex-wrap justify-center ">
                                        <div class="w-3/3 sm:w-3/3 px-4">
                                            <img src="{{asset('/storage/'.$warehouse->image->url) }} " alt="..."
                                                class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                                        </div>
                                    </div>


                                    @else
                                    <div class="flex flex-wrap justify-center">
                                        <div class="w-8/12 sm:w-6/12 px-4">
                                            <img src="{{ asset('/storage/' . 'almacenes/almdef.jpg') }} " alt="..."
                                                class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                                        </div>
                                    </div>

                                    @endif









                                </div>

                            </div>

                        </div>












                        @empty
                        <li class="lg:col-span-4  md:col-span-2 ">
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Upss..!</strong>
                                <span class="block sm:inline">No a seleccionado la estación ó no existe ningún almacén
                                    en esta estación</span>


                            </div>
                        </li>
                        @endforelse




                    </ul>
                </div>


            </section>


        </div>
        {{-- Final tarjeta de articulos de la subcategoria --}}
        {{-- Final tarjeta de articulos de la subcategoria --}}
    </div>



</div>