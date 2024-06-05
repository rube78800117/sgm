<div class=" bg-gray-300">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <x-slot name="header">
       
       <div class="container flex justify-between">
          <div>
            <h2 class="py-2 font-semibold text-sm text-gray-600 leading-tight">
            LISTA GENERAL DE INSUMOS Y REPUESTOS REGISTRADOS
            </h2>
          </div> 
  
       

        <div class="flex">
            <a  href="{{route('admin.articles.create')}}">
            <x-button-enlace color='green' class="ml-auto">
              Agregar Nuevo Artículo
            </x-button-enlace> 
            </a>
       </div>
    </x-slot>

    <div class="container bg-gray-100 shadow-md  ">
    <!-- component -->
        <x-table-responsive>

        <div class="">
            <x-jet-label value="Búsqueda por Nombre ó ID"/>
            <x-jet-input class="w-3/4" wire:model="search" type="text" placeholder="¿Qué estás buscando...?"></x-jet>
        </div>

        @if ($articles->count())
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <!-- Columna visible en todas las pantallas -->
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Nombre Artículo
                    </th>
                    <!-- Columna oculta en pantallas pequeñas -->
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        ID's
                    </th>
                      <!-- Columna oculta en pantallas pequeñas -->
                    <th class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Medida Por
                    </th>
                    <!-- Columna oculta en pantallas pequeñas -->
                    <th class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Categoría
                    </th>
                    <!-- Columna oculta en pantallas pequeñas -->
                    <th class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Subcategoría
                    </th>
                    <!-- Columna oculta en pantallas pequeñas -->
                    <th class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Stock Mínimo
                    </th>
                  
                </tr>
            </thead>
            <tbody>
            

                @foreach ($articles as $article)


                <tr>
                        <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-12 h-12">
                                @if ($article->image != null)
                                <img class="w-full h-full rounded-full object-cover"
                                src="{{asset('storage/'.$article->image->url)}}"
                                alt="" />
                                @else
                                <img class="w-full h-full rounded-full object-cover"
                                src="{{asset('storage/'.'articles/def.jpg')}}"
                                alt="" />
                                @endif
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$article->name}}
                                    </p>
                                </div>
                            </div>
                        </td>
                


            
            <td class="px-5 w-40 py-2 border-b border-gray-200 bg-white text-sm">
                <p class="text-gray-900 whitespace-no-wrap">
                                                            
                                
                            
                        
                        
                        @if ( !empty($article->id_dopp) )
                            <p class=" text-gray-900 mr-2"><i class="text-blue-500 mr-2 fas fa-key"></i>
                            {{$article->id_dopp}}</p>
                        @endif
                        @if ( !empty($article->id_eetc) )
                            <p class=" text-gray-900 mr-2"><i class="text-yellow-400 mr-2 fas fa-key"></i>
                            {{$article->id_eetc}}</p>
                        @endif
                        @if ( !empty($article->id_zona) )
                        
                                <p class=" text-gray-900 mr-2"><i class="text-gray-400 mr-2 fas fa-key"></i>
                                {{$article->id_zona}}</p> 
                                                            
                        @endif
                            
                                                
                </p>
            </td>   
            
            <td class="hidden sm:table-cell px-5 py-2 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">
                    {{$article->unit->name}}    
                    </p>
                </td>   

                </td>
                <td class="hidden sm:table-cell px-5 py-2 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">
                    {{$article->department->name}}    
                    </p>
                </td>


                <td class="hidden sm:table-cell px-5 py-2 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">
                        {{$article->category->name}}
                    </p>
                </td>


    {{-- 
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <span
                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden
                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                        <span class="relative">Activo</span>
                    </span>
                </td> --}}



            <td class="hidden sm:table-cell px-5 py-2 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">
                    {{$article->stock_min}}    
                    </p>
                </td>   
                
                
             

                <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                        <a href="{{route('admin.articles.edit', $article)}}" class="text-blue-600 hover:text-blue-700 ">
                        <p class="text-xl flex justify-center">
                        <i class="fas fa-edit"></i> </p> <p class="text-md flex justify-center"> Editar</p> </a> 
                        
                </td>



                



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
        @if ($articles->hasPages())
        <div class="px-6 py-4">
            {{$articles->links()}}
        </div>
        @endif
        </x-table-responsive>

    
    </div>
</div>
