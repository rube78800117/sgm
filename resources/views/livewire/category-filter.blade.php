<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="rounded-xl flex justify-start ">
        <!--<div class="w-full  py-2   ">-->
        <!--    <h1 class="font-semibold text-gray-700 px-12">{{$department->name}} </h1>-->
        <!--</div>-->

    </div>


    <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 ">


        {{-- aside de subcategorias --}}
        <aside class=" mx-4 py-6">
            <h2 class="font-bold text-center mb-2 ">Subcategorías</h2>
            <ul>
                @foreach ($department->categories as $category)
                <ul class="flex flex-col space-y-1 text-gray-600">
                    <div class="bg-gray-100 border-l-4 border-blue-600 rounded-md w-full px-6 py-1 cursor-pointer">
                        <a class="cursor-pointer hover:text-blue-500 capitalize {{$categoria == $category->name? 'text-blue-600 font-semibold  ':''}} "
                            wire:click="$set( 'categoria','{{$category->name}}')">
                            <i class=" text-blue-600 fas fa-folder">&nbsp</i> {{ $category->name}} </li>
                        </a>
                    </div>
                    <ul>
                        @endforeach

                    </ul>

                    <button class="mt-8" wire:click="limpiar">
                    </button>


                    <x-jet-button class="my-12" wire:click="limpiar">
                        Mostrar todos
                    </x-jet-button>

        </aside>
        {{-- Final aside de subcategorias --}}


        {{-- tarjeta de articulos de la subcategoria --}}
        <div class="lg:col-span-4 md:col-span-2 sm:col-span-1 ">




            <ul class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-1 gap-4">
                @forelse ($articles as $article)



                <!-- CARD o tarjetas de productos mas solicitados -->


                {{-- // alinea el boton a la base en este div--}}
                <div
                    class=" flex items-end self-stretch relative bg-gray-100  py-2 px-2 rounded-xl w-128 my-4  shadow-xl">

                    {{-- div del icono y fondos de color automaticos segun linea --}}
                    <div
                        class=" border-4  bg-gray-300 text-gray-400 items-center absolute rounded-full h-15 w-15   shadow-xl  left-2 -top-4">
                    </div>


                    <div class="mt-4  ">


                        <a href=" {{route('article.show',$article)}} ">



                            <article class="h-74 bg-white shadow-xl rounded-md overflow-hidden ">

                                @if ($article->image!=null)
                                {{-- <div class="flex flex-wrap justify-center">
                                    <div class="w-full sm:w-full px-4">
                                        <img src="{{ asset('/storage/' . $article->image->url) }} " alt="..."
                                            class="shadow rounded-md max-w-full h-auto align-middle border-none" />
                                    </div>
                                </div> --}}





             


                                <div class="flex flex-wrap justify-center">
                                    <div class="w-full sm:w-full mt-4 px-4 rounded-lg">

                                        <img src="{{ asset('/storage/' . $article->image->url) }}" alt="..."
                                            class="shadow rounded-lg max-w-full h-auto align-middle border-none" style="width: 300px; height: 300px; object-fit: contain;" />
                                    </div>
                                </div>

                                {{-- <div class="flex flex-wrap justify-center">
                                    <div class="w-full sm:w-full px-4">
                                        <img src="{{ asset('/storage/' . $article->image->url) }}" alt="..."
                                            class="shadow rounded-md max-w-full h-auto align-middle border-none" style="width: 300px; height: 300px; object-fit: cover;" />
                                    </div>
                                </div> --}}

                                {{-- <div class="flex flex-wrap justify-center">
                                    <div class="w-full sm:w-full px-4">
                                        <img src="{{ asset('/storage/' . $article->image->url) }}" alt="..."
                                            class="shadow rounded-md max-w-full h-auto align-middle border-none" style="width: 300px; height: 300px;" />
                                    </div>
                                </div> --}}

                                {{--
                                <img class="h-36 w-full object-cover" src=" {{asset('/storage/'.$article->image->url)}}"
                                    alt=""> --}}
                                @else
                                <div class="flex flex-wrap justify-center">
                                    <div class="w-full sm:w-full px-4">
                                        <img src="{{ asset('/storage/' . 'articles/def.jpg') }} " alt="..."
                                            class="shadow rounded-md max-w-full h-auto align-middle border-none" />
                                    </div>
                                </div>
                                @endif





                                <div class=" px-2 py-1">
                                    <h1 class="text-sm text-center text-gray-900 mb-0 leading-2 ">
                                        {{Str::limit($article->name, 50) }}</h1>
                                    <p class="font-bold text-center mb-4 leading-4 text-gray-700">
                                        {{str::limit($article->description, 30)}}, </p>
                                    {{-- <ul> solicitado:{{($article->required)}} veces </ul> --}}
                                    <div class="  ">

                                    </div>

                                </div>
                            </article>

                        </a>




                        <div class="border-t-2 "></div>
                        <div class="flex space-x-2"></div>



                        <div class="  place-items-center ">


                            <a href=" {{route('article.show',$article)}} "
                                class="block text-center w-full mb-1 bg-yellow-500  hover:bg-yellow-400 text-white font-semibold hover:text-gray-200 py-1 px-2 border border-yellow-300 hover:border-transparent rounded">
                                MAS INFORMACION
                            </a>
                        </div>


                    </div>

                </div>

                @empty
                <li class="lg:col-span-4  md:col-span-2 ">
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Upss..!</strong>
                        <span class="block sm:inline">No existe ningún artículo en esta subcategoria</span>


                    </div>
                </li>
                @endforelse




            </ul>

            <div>
                {{$articles->links()}}
            </div>

        </div>
        {{-- Final tarjeta de articulos de la subcategoria --}}
    </div>


</div>