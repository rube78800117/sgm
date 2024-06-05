<div>
    <div class=" text-sm px-8 pt-6   gap-4">
        {{ $article->name ?? '<h1>Seleccione un artículo</h1>' }}
   
    </div>

    <div class="mx-16 grid sm:grid-cols-4  md:grid-cols-3 xl:grid-cols-4  ">

        <div class="  col-span-1  ">




            @if (!empty($article) && !empty($article->image) && !empty($article->image->url))
            <div class="flex flex-wrap justify-center">
                <div class="w-full sm:w-full mt-4 px-4 rounded-lg">

                    <img src="{{ asset('/storage/' . $article->image->url) }}" alt="..."
                        class="shadow rounded-lg max-w-full h-auto align-middle border-none" style="width: 300px; height: 300px; object-fit: contain;" />
                </div>
            </div>
        @else
            <div class="">
                <div class="w-8/12 sm:w-8/12 px-2">
                    <img src="{{ asset('storage/articles/def.jpg') }}" alt="..."
                        class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                </div>
            </div>
        @endif






            {{-- @if ($article->image != null)
                <div class="  ">
                    <div class="w-8/12 sm:w-8/12 px-2">
                        <img src="{{ asset('/storage/' . $article->image->url) }} " alt="..."
                            class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                    </div>
                </div>
            @else
                <div class=" ">
                    <div class="w-8/12 sm:w-8/12 px-2">
                        <img src="{{ asset('/storage/' . 'articles/def.jpg') }} " alt="..."
                            class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                    </div>
                </div>
            @endif --}}


        </div>


    </div>

    @if ($counter == 0)
        No existe ningun articulo registrado, Porfavor registrelos primero para poder continuar.
    @else
        <div class="">


            <div class="   grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 lg:grid-rows-4 mt-4 ">




                {{-- apertura targeta ids --}}





                <div class=" grid-cols-2 text-md px-4 text-gray-800">

                    {{-- 
                <p class="  font-semibold text-center">ID's del Insumo o repuesto</p> --}}



                    @if (!empty($article->id_dopp))
                        <p class=" text-gray-900 mr-2"></p>
                        <ul class="flex">
                            <li class=" text-gray-800 mr-2"><i class="text-blue-500 mr-2 fas fa-key"> </i>
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
                            <li class=" text-gray-800 mr-2"><i class="text-gray-400 mr-2 fas fa-key"></i>
                                Zona:</li>
                            <li class=" text-gray-900 font-bold ">{{ $article->id_zona }}</li>
                        </ul>
                    @endif


                </div>
                {{-- cierre tarjeta ids --}}






           






                {{-- div cierre informacion cantidad total --}}
                {{-- div cierre informacion cantidad total --}}

                {{-- div apertura datos del articulo --}}


                <div class="  bg-gray-100    rounded-xl p-4   row-span-4 ">

                    <ul class="flex">
                        <li class=" text-gray-900 text-sm mr-2"> <i
                                class="text-yellow-500 fas fa-check-circle mr-2"></i>
                            Marca o proveedor:</li>
                        <li class="text-gray-700 text-xs ">{{ $article->trademark->name }}</li>
                    </ul>
                    <ul class="flex">
                        <li class=" text-gray-900 text-sm mr-2"><i class="text-yellow-500 fas fa-check-circle mr-2"></i>
                            Medida en por:</li>
                        <li class="text-gray-700 ">{{ $article->Unit->name }}</li>
                    </ul>
                    <ul class="flex">
                        <li class=" text-gray-900 text-sm mr-2"><i class="text-yellow-500 fas fa-check-circle mr-2"></i>
                            Sub Categoria:</li>
                        <li class="text-gray-700 ">{{ $article->category->name }}</li>
                    </ul>
                    <ul class="flex">
                        <li class=" text-gray-900 text-sm mr-2"><i class="text-yellow-500 fas fa-check-circle mr-2"></i>
                            Categoria:</li>
                        <li class="text-gray-700 ">{{ $article->category->department->name }}</li>
                    </ul>
                    
                    {{-- <ul class="">
                    <li class=" text-gray-400 text-sm mr-2">Categoria:</li> --}}
                </div>

                {{-- div cierre datos del articulo --}}





            </div>







            {{-- <div>
            <img class="oobject-scale-down h-40 w-full" src="{{ asset('/storage/' . 'articles/def.jpg') }}" alt="">
        </div>
        --}}




    @endif
</div>
