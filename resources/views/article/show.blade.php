<x-app-layout>

    <div class="container mt-6 sm:my-8">
        <section>

            <div class="  -z-50 grid grid-cols-1 lg:grid-cols-1 rounded-md gap-6">


                <!-- This is an example component, el baner de cabecera -->


                <div class="-z-50 relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 ">

                    <div
                        class="-z-50  md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
                        {{-- imagen --}}





                        @if ($article->image != null)
                            {{-- {{-- // un rem tiene 16 px --}}

                            {{-- <div
                            class="absolute -z-50 inset-0 w-full h-full object-fill object-center bg-blue-300 bg-opacity-30 bg-cover bg-bottom"
                            style="background-image: url({{ asset('/storage/' . $article->image->url) }} ); background-blend-mode: multiply;">
                        </div> --}}



                            {{-- <img class="h-60 w-full object-cover" src="{{Storage::url($article->image->url)}}" alt="">
                        --}}



                            <div class="flex flex-wrap justify-center ">
                                <div class="w-8/12 sm:w-6/12 px-4">
                                    <img src="{{ asset('/storage/' . $article->image->url) }} " alt="..."
                                        class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                                </div>
                            </div>
                        @else
                            <div class="flex flex-wrap justify-center">
                                <div class="w-8/12 sm:w-6/12 px-4">
                                    <img src="{{ asset('/storage/' . 'articles/def.jpg') }} " alt="..."
                                        class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                                </div>
                            </div>
                        @endif

                        {{-- 
                        <div
                            class="md:hidden absolute  inset-0 h-full px-6 pb-6 flex flex-col justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                            <h3 class="w-full font-bold text-xl text-black leading-tight mb-2">{{$article->name}}</h3>
                            <h4 class="w-full text-xl text-gray-800 leading-tight">Bienvenido a</h4>
                        </div> --}}


                        <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12"
                            viewBox="0 0 100 100" preserveAspectRatio="none">
                            <polygon points="50,0 100,0 50,100 0,100" />
                        </svg>
                    </div>

                    <div class="z-10 order-2 md:order-1 w-full  flex items-center  md:mt-0">






                        <div
                            class="block sm:hidden px-4 bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                            <div>
                                <div class="mt-0">
                                    <a class="flex items-baseline mt-1 text-blue-600 hover:text-blue-900 focus:text-blue-900"
                                        href="{{ url('/') }}">
                                        <span class="text-xs ml-1"> <i class="text-l fas fa-chevron-circle-left"> </i>
                                            &nbsp </span>
                                        <span> Volver a la página principal</span>

                                    </a>
                                </div>
                            </div>

                            <div class="my-2">
                                <h4 class="hidden md:block text-xl text-gray-800">Bienvenido a</h4>
                                <h3 class="hidden md:block font-bold text-2xl text-gray-900">{{ $article->name }}</h3>
                                <p class="text-gray-600 text-justify">{{ $article->description }}</p>
                            </div>


                        </div>







                        <div
                            class=" hidden sm:block  p-8 md:pr-18 md:pl-14 md:py-2 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                            <div>
                                <div class="mt-4">
                                    <a class="flex items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900"
                                        href="{{ url('/') }}">
                                        <span class="text-xs ml-1"> <i class="text-l fas fa-chevron-circle-left"> </i>
                                            &nbsp </span>
                                        <span> Volver a la página principal</span>

                                    </a>
                                </div>
                            </div>

                            <div class="my-2">
                                <h4 class="hidden md:block text-xl text-gray-800">Bienvenido a</h4>
                                <h3 class="hidden md:block font-bold text-2xl text-gray-900">{{ $article->name }}</h3>
                                <p class="text-gray-600 text-justify">{{ $article->description }}</p>
                            </div>


                        </div>


                    </div>

                </div>

            </div>


        </section>







        <section class="bg-gray-100   ">



            <div>
                <div class="">
                    <div class="   grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-4">





                        {{-- <ul class="">
                            <li class=" text-gray-400 text-sm mr-2">Categoria:</li> --}}




                        {{-- apertura targeta ids --}}



                        <div class="relative bg-gray-100   m-6  px-6 rounded-xl   shadow-xl">

                            {{-- icono circular --}}
                            <div
                                class=" text-white flex items-center absolute rounded-full py-2 px-2 shadow-xl bg-green-400 left-4 -top-4">
                                <!-- svg  -->


                                <svg id="Capa_1" enable-background="new 0 0 512 512" height="30"
                                    viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path
                                                d="m115 63.12v-43.12c0-8.284-6.716-15-15-15s-15 6.716-15 15v43.12c4.893-.736 9.902-1.12 15-1.12s10.107.384 15 1.12z" />
                                        </g>
                                        <path
                                            d="m511.075 319.367-18.442-50.14c-2.293-6.235-8.414-10.218-15.043-9.791l-24.804 1.6-11.548-23.356c-2.684-5.428-8.369-8.71-14.411-8.32l-26.001 1.677-81.919-47.296c9.247-41.505-8.85-85.939-47.625-108.326-8.71-5.029-17.865-8.573-27.175-10.758 10.327 9.112 19.322 19.965 26.478 32.36 14.113 24.444 19.83 52.149 16.534 80.119-2.328 19.758-8.975 38.361-19.473 54.791l8.068 13.974c4.64-3.005 9.06-6.404 13.193-10.199l187.55 108.282c4.343 2.508 9.653 2.679 14.148.456l13.042-6.449c6.87-3.398 10.075-11.43 7.428-18.624z" />
                                        <path
                                            d="m331.261 374.54-22.281-11.017 1.677-26.002c.39-6.043-2.892-11.728-8.32-14.411l-23.356-11.548-47.296-81.919c28.761-31.321 35.305-78.85 12.918-117.625-12.94-22.413-33.247-37.916-56.095-45.226 3.391 3.152 6.629 6.492 9.689 10.017 20.508 23.622 31.803 53.877 31.803 85.191 0 28.226-8.901 55.078-25.74 77.652-6.589 8.833-14.151 16.691-22.525 23.475l106.27 184.065c2.508 4.343 7.02 7.146 12.025 7.469l14.519.937c7.65.493 14.441-4.861 15.746-12.414l9.098-52.643c1.132-6.547-2.177-13.057-8.132-16.001z" />
                                        <path
                                            d="m200 162c0-50.13-36.888-91.642-85-98.88v43.88h4.576c8.077 0 15.027 6.207 15.407 14.275.406 8.614-6.458 15.725-14.983 15.725h-39.576c-8.077 0-15.027-6.207-15.407-14.275-.406-8.614 6.458-15.725 14.983-15.725h5v-43.88c-48.112 7.238-85 48.75-85 98.88 0 44.774 29.432 82.663 70 95.408v226.521c0 5.015 2.507 9.699 6.679 12.481l12.106 8.07c6.378 4.252 14.936 3.011 19.844-2.878l34.201-41.041c4.253-5.103 4.642-12.396.957-17.923l-13.787-20.681 14.453-21.679c3.359-5.039 3.359-11.603 0-16.641l-14.453-21.68v-104.549c40.568-12.745 70-50.634 70-95.408z" />
                                    </g>
                                </svg>
                            </div>

                            <div class=" text-md mt-2 text-gray-800">
                                <p class="  font-semibold text-center">ID's del Insumo o repuesto</p>


                                <p class="text-gray-900 whitespace-no-wrap">





                                    @if (!empty($article->id_dopp))
                                        <p class=" text-gray-900 mr-2"></p>
                                        <ul class="flex">
                                            <li class=" text-gray-800 mr-2"><i class="text-blue-500 mr-2 fas fa-key">
                                                </i>
                                                Dopplmayr:</li>
                                            <li class=" text-gray-900 font-bold  ">{{ $article->id_dopp }}</li>
                                        </ul>
                                    @endif



                                    @if (!empty($article->id_eetc))
                                        <p class=" text-gray-900 mr-2"></p>

                                        <ul class="flex">
                                            <li class=" text-gray-800 mr-2">
                                                <i class="text-yellow-400 mr-2 fas fa-key"></i> MiTeleferico:
                                            </li>
                                            <li class=" text-gray-900 font-bold "> {{ $article->id_eetc }}</li>
                                        </ul>
                                    @endif



                                    @if (!empty($article->id_zona))
                                        <p class=" text-gray-900 mr-2"> </p>
                                        <ul class="flex">
                                            <li class=" text-gray-800 mr-2"><i
                                                    class="text-gray-400 mr-2 fas fa-key"></i>
                                                Zona:</li>
                                            <li class=" text-gray-900 font-bold ">{{ $article->id_zona }}</li>
                                        </ul>
                                    @endif
                                    {{-- aaaaaaaaaaaaaaaaaaa
                                   @foreach ( $article->locations as $item)
                                      {{ $item->name}}
                                   @endforeach

                                    {{$article->warehousesLocation}} --}}

                                </p>
                                {{-- <ul class="flex">
                                        <li class=" text-gray-300 mr-2"><i class="text-yellow-500 mr-2 fas fa-key"></i>
                                            Dopplmayr:</li>
                                        <li class=" text-gray-100 ">{{ $article->id_dopp }}</li>
                                    </ul>

                                    --}}

                            </div>



                        </div>
                        {{-- cierre tarjeta ids --}}



                        {{-- div apertura datos del articulo --}}


                        <div class="  bg-gray-100   m-6  p-4 rounded-xl   shadow-xl ">

                            <ul class="flex">
                                <li class=" text-gray-900 text-sm mr-2"> <i
                                        class="text-yellow-500 fas fa-check-circle mr-2"></i> Marca:</li>
                                <li class="text-gray-700 ">{{ $article->trademark->name }}</li>
                            </ul>
                            <ul class="flex">
                                <li class=" text-gray-900 text-sm mr-2"><i
                                        class="text-yellow-500 fas fa-check-circle mr-2"></i>
                                    Medida en por:</li>
                                <li class="text-gray-700 ">{{ $article->Unit->name }}</li>
                            </ul>
                            <ul class="flex">
                                <li class=" text-gray-900 text-sm mr-2"><i
                                        class="text-yellow-500 fas fa-check-circle mr-2"></i>
                                    Sub Categoria:</li>
                                <li class="text-gray-700 ">{{ $article->category->name }}</li>
                            </ul>
                            <ul class="flex">
                                <li class=" text-gray-900 text-sm mr-2"><i
                                        class="text-yellow-500 fas fa-check-circle mr-2"></i>
                                    Categoria:</li>
                                <li class="text-gray-700 ">{{ $article->category->department->name }}</li>
                            </ul>
                            {{-- <ul class="">
                                    <li class=" text-gray-400 text-sm mr-2">Categoria:</li> --}}
                        </div>

                        {{-- div cierre datos del articulo --}}



                        {{-- div apertura informacion cantidad total --}}


                        <div class=" bg-gray-100   m-6  p-4 rounded-xl   shadow-xl ">



                            @if ($article->Stock)
                                <h4 class="hidden md:block text-sm text-gray-500">Disponibilidad total de este artículo:
                                </h4>
                                <h4 class="hidden md:block font-bold text-sm text-gray-700">{{ $article->name }}</h4>
                                <div class=" flex justify-center items-center">





                                    <i class="font-bold text-2xl text-green-500 fas fa-warehouse">&nbsp&nbsp</i> <i
                                        class="font-bold text-2xl text-blue-500 fas fa-layer-group"></i>

                                    <h2 class="text-center  font-bold text-2xl text-blue-500">&nbsp
                                        {{ $article->stock }}
                                    </h2>
                                </div>
                            @else
                                {{-- div de apertura cuando no existe stock en almacen o la cantidad es cero --}}



                                <h4 class="hidden md:block text-sm text-gray-500">No hay disponibilidad de este artículo
                                    en
                                    almacenes</h4>
                                <h4 class="hidden md:block font-bold text-sm text-gray-700">{{ $article->name }}</h4>
                                <div class=" flex justify-center pt-2 items-center">
                                    <i class="font-bold text-2xl text-red-500 fas fa-warehouse"></i>

                                    {{-- <h2 class="text-center  font-bold text-2xl text-blue-500">&nbsp
                                        {{$article->stock}}
                                    </h2> --}}


                                </div>



                                {{-- div de apertura cuando no existe stock en almacen o la cantidad es cero --}}
                            @endif




                        </div>
                        {{-- div cierre informacion cantidad total --}}



                    </div>
                    {{-- <div>
                        <img class="oobject-scale-down h-40 w-full" src="{{ asset('/storage/' . 'articles/def.jpg') }}"
                            alt="">
                    </div>
                    --}}
                </div>


        </section>












        {{-- {{prueba ids stok}} --}}
















        <!-- component -->
        <div class=" items-center justify-center  my-8 ">
            <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4">

                @foreach ($warehouses as $item)
                    @if ($item->pivot->quantity == 0)
           
                        {{-- No mostrar nada de este almacén --}}
                    @else
                
                                
                                     

                         <div class=" bg-gray-200 rounded-2xl text-gray-500 items-center h-15 w-full shadow-xl">


                            {{-- tarjeta de almaccenpara el articulo --}}
                            <div  class="  relative bg-gray-100  py-4 px-6 rounded-2xl w-128   shadow-2xl">

                                {{-- div del icono y fondos de color automaticos segun linea --}}

                                <div x-data="{ open: false }" class="relative">
                                    <button @click="open = !open" 
                                    class="border-4 bg-{{ $item->station->line->color }} text-gray-400 flex items-center justify-center absolute rounded-full h-15 w-15 shadow-xl left-0 -top-10 focus:outline-none">

                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="36"
                                            height="36" x="0" y="0" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="items-center justify-center mx-2 my-2">
                                            <g>
                                                <g xmlns="http://www.w3.org/2000/svg" transform="translate(1 1)">
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M254.991,212.339c35.355,0,64-28.645,64-64s-28.645-64-64-64s-64,28.645-64,64S219.636,212.339,254.991,212.339z      M254.991,127.006c11.791,0,21.333,9.542,21.333,21.333s-9.542,21.333-21.333,21.333c-11.791,0-21.333-9.542-21.333-21.333     S243.2,127.006,254.991,127.006z"
                                                                fill="#e3e4e5" data-original="#000000" style=""
                                                                class="" />
                                                            <path
                                                                d="M227.229,396.518l8.681,17.362c7.863,15.726,30.305,15.723,38.164-0.004l18.389-36.8     c18.466-36.902,35.939-66.021,75.763-128.619l1.036-1.629c5.852-9.199,8.681-13.651,12.042-18.961     c14.956-23.623,23.02-50.992,23.02-79.527c0-89.032-77.35-158.521-166.786-148.343c-66.548,7.591-121.188,60.835-130.398,127.125     c-5.511,39.683,4.604,78.394,27.526,109.517C165.5,278.435,189.243,320.574,227.229,396.518z M149.402,132.992     c6.528-46.989,45.76-85.218,92.967-90.603c64.055-7.29,119.289,42.33,119.289,105.951c0,20.39-5.735,39.855-16.403,56.706     c-3.34,5.276-6.155,9.708-11.991,18.88l-1.036,1.629c-40.148,63.109-58.184,93.122-77.28,131.152     c-33.196-65.363-56.271-105.169-85.935-145.383C152.636,189.087,145.437,161.538,149.402,132.992z"
                                                                fill="#e3e4e5" data-original="#000000" style=""
                                                                class="" />
                                                            <path
                                                                d="M387.88,312.04c-11.464-2.719-22.961,4.371-25.68,15.835c-2.719,11.464,4.371,22.962,15.835,25.68     c57.212,13.567,90.298,35.274,90.298,50.773c0,29.478-94.949,64-213.333,64c-118.398,0-213.333-34.518-213.333-64     c0-15.508,33.053-37.209,90.236-50.773c11.464-2.719,18.553-14.217,15.834-25.681c-2.719-11.464-14.217-18.553-25.681-15.833     C47.205,329.796-1,361.445-1,404.329c0,64.804,115.134,106.667,256,106.667c140.853,0,256-41.865,256-106.667     C511,361.444,462.765,329.798,387.88,312.04z"
                                                                fill="#e3e4e5" data-original="#000000" style=""
                                                                class="" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>

                                    </button>
                                    <!-- Contenido emergente -->
                                    <div x-show="open" 
                                        @click.outside="open = false"
                                        @click.away="open = false"
                                        x-transition:enter="transition ease-out duration-200"
                                        x-transition:enter-start="opacity-0 transform scale-95"
                                        x-transition:enter-end="opacity-100 transform scale-100"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-start="opacity-100 transform scale-100"
                                        x-transition:leave-end="opacity-0 transform scale-95"
                                        class="absolute z-50 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        style="display: none;">
                                        <!-- Contenido del menú emergente -->
                                        <div class="p-4 text-sm">
                                    
                                         
                                      

                                           
                                                <p class="text-gray-500 text-sm"> Fecha de control:</p> <span class="text-gray-700 font-bold ">{{$item->pivot->control_date}}</span>  <hr> 
                                                
                                                @livewire('mycomponents.location-article', ['locationId' => $item->pivot->location_id], key($item->id))
                                                
             
                                      
                                          
                                    
                                    
                                       
                                           
                                          
                                        </div>
                                    </div>


                                </div>
                                <div class="mt-4">
                                    <p class="text-xm font-semibold my-2">{{ $item->name }}</p>
                                    <div class="flex space-x-2 text-gray-700 text-sm">
                                        <!-- svg  -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <p> {{ $item->station->name }} - {{ $item->station->line->name }}</p>
                                    </div>

                                    <div class="border-t-2 "></div>



                                    <div class="flex space-x-2">




                                    </div>
                                    {{-- @livewire('card-update', ['article' => $article, 'WarehouseId'=> $item->id]) --}}
                                    @livewire('add-cart-item', ['article' => $article, 'WarehouseId' => $item->id, 'warehouses_name' => $item->name, 'line_color' => $item->station->line->color])
                                                      </div>



                            </div>


                        </div>
                    @endif
                @endforeach


            </div>
        </div>

        </section>
    </div>

    </div>
</x-app-layout>
