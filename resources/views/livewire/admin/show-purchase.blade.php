<div>
    

    <div class="container bg-gray-100 shadow-md  ">
                 <div>
                    {{-- {{dd($purchase)}} --}}
                    
                    <h1 class="py-4 w-full font-bold text-sm text-gray-800 text-center leading-tight mb-2">DETALLE DE INGRESO DE STOCK</h1>

                        <h1 class="w-full font-bold text-sm text-gray-800 leading-tight mb-2">ID: {{$purchase->id}}</h1>
                        <h1 class="w-full  text-sm text-gray-700 leading-tight mb">Descripción:{{$purchase->description}}</h1>
                        <h1 class="w-full text-sm text-gray-700 leading-tight">Cod o Nro.Documento:  {{$purchase->ndocument}}</h1>
                         
                            
                        {{-- @if ($purchase->status == 1)
                        <h1 class="w-full text-sm text-gray-700 leading-tight">Estado: CERRADO</h1>
                        @elseif ($purchase->status == 2)
                            ABIERTO
                        @else
                            <!-- Código para el caso predeterminado o por defecto -->
                        @endif --}}
                        
                        

                        <h1 class="w-full text-sm text-gray-700 leading-tight">Realizado por:   {{$purchase->user->name}}</h1>
{{-- 
                        <h1 class="w-full text-sm text-gray-700 leading-tight">De almacén:  {{$purchase->warehouse->name}}</h1>
                         --}}
                        <h1 class="w-full text-sm text-gray-700 leading-tight">Linea:  {{$purchase->line->name}}</h2> 
                        <h1 class="w-full text-sm text-gray-700 leading-tight">Fecha de ingreso:  {{$purchase->created_at->format('d-m-Y') }}</h1>
                    </div>
                  
                
                
              
            {{-- <p>ID del contador: {{ $count }}</p> --}}
            {{-- <p>Nombre del contador: {{ $count->name }}</p> --}}
        
            <h2>Registros Relacionados:</h2>
     
        </div>




        <x-table-responsive>

    

            @if ($purchaseDetails->count())

            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <!-- Columna visible en todas las pantallas -->
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nro
                        </th>
                        <!-- Columna oculta en pantallas pequeñas -->     
                        <th
                        class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        ID's
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                           Nombre de articulo
                        </th>

                        <th
                            class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Almacén
                        </th> 
                        <!-- Columna oculta en pantallas pequeñas -->
                        <th
                            class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Cantidad
                        </th>
                   
                        {{-- <!-- Columna oculta en pantallas pequeñas -->
                        <th
                            class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Stock Mínimo
                        </th>
                        <!-- Columna oculta en pantallas pequeñas -->
                        <th
                            class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Medida Por
                        </th> --}}
                    </tr>
                </thead>
                <tbody>


                    @foreach ($purchaseDetails as $key => $item)
                 


                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$key+1}}</p>
                            {{--
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$itemAdd->id_eetc}}
                            </p>
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$itemAdd->id_zona}}
                            </p> --}}
                        </td>
                        <td class="px-5 w-40 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">



                            @if ( !empty($item->article->id_dopp) )
                            <p class=" text-gray-900 mr-2"><i class="text-blue-500 mr-2 fas fa-key"></i>
                                {{$item->article->id_dopp}}</p>
                            @endif
                            @if ( !empty($item->article->id_eetc) )
                            <p class=" text-gray-900 mr-2"><i class="text-yellow-400 mr-2 fas fa-key"></i>
                                {{$item->article->id_eetc}}</p>
                            @endif
                            @if ( !empty($item->article->id_zona) )

                            <p class=" text-gray-900 mr-2"><i class="text-gray-400 mr-2 fas fa-key"></i>
                                {{$item->article->id_zona}}</p>

                            @endif


                            </p>
                        </td>
                
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-12 h-12">
                                    @if ($item->article->image != null)
                                    <img class="w-full h-full rounded-full object-cover"
                                        src="{{asset('storage/'.$item->article->image->url)}}" alt="" />
                                    @else
                                    <img class="w-full h-full rounded-full object-cover"
                                        src="{{asset('storage/'.'articles/def.jpg')}}" alt="" />
                                    @endif
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$item->article->name}}
                                    </p>
                                </div>
                            </div>
                        </td>




                    
                       
                        <td class="hidden sm:table-cell px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$item->warehouse->station->line->acronym}}   {{$item->warehouse->station->name}} - {{$item->warehouse->name}}
                            </p>
                        </td>


                        {{-- <td class="hidden sm:table-cell px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$article->category->name}}
                            </p>
                        </td> --}}


                        {{--
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                <span class="relative">Activo</span>
                            </span>
                        </td> --}}



                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$item->quantity}}
                            </p>
                        </td>


                        {{-- <td class="hidden sm:table-cell px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$article->unit->name}}
                            </p>
                        </td> --}}

{{-- 
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <a href="{{route('admin.articles.edit')}}"
                                class="text-blue-600 hover:text-blue-700 ">
                                <p class="text-xl flex justify-center">
                                    <i class="fas fa-edit"></i>
                                </p>
                                <p class="text-md flex justify-center"> Editar</p>
                            </a>

                        </td> --}}







                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="px-6 py-4">
                No hay ningún registro coincidente
            </div>
            @endif

            <!-- Paginación de la tabla -->
            {{-- @if ($articles->hasPages())
            <div class="px-6 py-4">
                {{$articles->links()}}
            </div>
            @endif --}}
        </x-table-responsive>










    </div>

</div>
