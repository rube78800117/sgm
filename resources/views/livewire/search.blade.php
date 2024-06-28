
<div>

 <x-table-responsive>
 <!-- component -->




 <div class="py-2 relative">
    <x-jet-label value="Búsqueda por Nombre ó ID" />
    <div class="relative">
        <x-jet-input class="w-full pr-10" wire:model="search" type="text" placeholder="¿Qué estás buscando...?" />
        @if ($search)
            <button wire:click="$set('search', '')" type="button" class="absolute right-0 top-0 mt-1 mr-1 px-1 py-1 flex items-center text-gray-800 focus:outline-none hover:text-gray-600 transition-colors bg-blue-600 rounded-md">
                <!-- Icono para borrar -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        @endif
    </div>
</div>




    <div class="overflow-y-scroll w-full" style="height: 300px; ">

   @if ($articles->count())
         <table class="min-w-3/4 leading-normal">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Nombre Artículo
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        ID´s
                    </th>
                    {{-- <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Categoría
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Subcategoría
                    </th> --}}
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Stock Total
                    </th>
                    {{-- <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Medida Por
                    </th> --}}
                </tr>
            </thead>
            <tbody>


                
                @foreach ($articles as $article)
                @if($article->stock==0)
                
                <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-12 h-12">
                                    @if ($article->image != null)
                                    <img class="w-full h-full rounded-full object-cover"
                                    src="{{ asset('/storage/' .ImageO($article->id)->url) }} "
                                    alt="" />
                                    @else
                                    <img class="w-full h-full rounded-full object-cover"
                                    src="{{ asset('/storage/'.'articles/def.jpg') }} "
                                    
                                    alt="" />
                                    @endif
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{strtoupper($article->name)}}
                                        </p>
                                    </div>
                                </div>
                            </td>
                   


               
                <td class="px-5 w-40 py-5 border-b border-gray-200 bg-white text-sm">
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
                    </td>
                    {{-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                        {{$article->department->name}}    
                        </p>
                   </td>


                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            {{$article->category->name}}
                        </p>
                    </td> --}}


{{-- 
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <span
                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden
                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                            <span class="relative">Activo</span>
                        </span>
                    </td> --}}



                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-xs">
                        <p class="text-red-600 whitespace-no-wrap">
                       NO DISPONIBLE
                        </p>
                    </td>   
                     
                    
                    {{-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                        {{$article->unit->name}}    
                        </p>
                    </td>    --}}


                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                           <a href="{{route('article.show', $article)}}" class="text-blue-600 hover:text-red-600 ">
                            <p class="text-xl flex justify-center">
                            <i class="fas fa-chevron-circle-right"></i> </p> <p class="text-md flex justify-center"> Ir</p> </a> 
                           
                    </td>



                    



                </tr>  
















                @else
                   <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-12 h-12">
                                    @if ($article->image != null)
                                    <img class="w-full h-full rounded-full object-cover"
                                    src="{{ asset('/storage/' .ImageO($article->id)->url) }} "
                                    alt="" />
                                    @else
                                    <img class="w-full h-full rounded-full object-cover"
                                    src="{{ asset('/storage/'.'articles/def.jpg') }} "
                                    
                                    alt="" />
                                    @endif
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{strtoupper($article->name)}}
                                        </p>
                                    </div>
                                </div>
                            </td>
                   


               
                <td class="px-5 w-40 py-5 border-b border-gray-200 bg-white text-sm">
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
                    </td>
                    {{-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                        {{$article->department->name}}    
                        </p>
                   </td>


                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            {{$article->category->name}}
                        </p>
                    </td> --}}


{{-- 
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <span
                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden
                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                            <span class="relative">Activo</span>
                        </span>
                    </td> --}}



                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                        {{-- {{$article->stock}}     --}}
                        {{ intval($article->stock) }}
                        </p>
                    </td>   
                     
                    
                    {{-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                        {{$article->unit->name}}    
                        </p>
                    </td>    --}}


                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                           <a href="{{route('article.show', $article)}}" class="text-blue-600 hover:text-blue-700 ">
                            <p class="text-xl flex justify-center">
                            <i class="fas fa-chevron-circle-right"></i> </p> <p class="text-md flex justify-center"> Ir</p> </a> 
                           
                    </td>



                    



                </tr>  
                @endif
                @endforeach
               
               
            </tbody>
        </table> 
    @else 
        <div class="px-6 py-4">
            No hay ningún registro coincidente

        </div>
    @endif
   



    </div>
    

   @if ($articles->hasPages())
            <div class="w-4/4 px-6 py-4">
            {{$articles->links()}}

            </div>
        @endif

 


        
</x-table-responsive>

</div>





