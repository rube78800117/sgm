<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="flex justify-between py-4 px-4">

        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        {{-- <x-slot name="header">
             </x-slot> --}}
         <div class="container py-2 flex items-center">
            <h2 class="font-semibold text-sm text-gray-600 leading-tight">
              RELEVAMIENTOS
               {{-- {{Session::get('key')}} --}}
          </h2>
          {{-- href="{{route('admin.purchases.create')}}" --}}
         </div>
        <div>
         <a  href="{{route('admin.counts.create')}}">
            <x-button-enlace color='green' class="ml-auto">
             NUEVO RELEVAMIENTO
            </x-button-enlace> 
            </a>
        </div>
     
    </div>
          
    
    
    <div class="container bg-gray-100 shadow-md">
    
    
    
      <!-- component -->
              <x-table-responsive>
    
                  <div class="px-6 py-2  ">
                          <x-jet-label value="Búsqueda por Nombre, ID, Nro de Documento"/>
                          <x-jet-input class="w-3/4 border-gray-400 " 
                          wire:model="search" 
                          type="text" placeholder="¿Que estas buscando...?"></x-jet>
                  </div>
                     
                  
             
    
                  @if ($mycounts->count())
                       <table class="min-w-full leading-normal">
                          <thead>
                              <tr>
                                   <th
                                      class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      ID
                                  </th>
                                  <th
                                      class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      Nombre
                                  </th>
                                 
                                  <th
                                      class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      Código
                                  </th>
                                  <th
                                      class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      Almacén
                                  </th>
                           
                                  
                                  <th
                                      class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      Usuario
                                  </th>
                                  <th
                                      class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      Fecha de registro
                                  </th>
                                  <th
                                      class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      Acciones
                                  </th>

                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($mycounts as $mycount)
                                 <tr>
                                                          
                        
                                  </td>
                                  <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                      <p class="text-gray-900 whitespace-no-wrap">
                                      {{$mycount->id}}    
                                      </p>
                                 </td>
                           

                                  <td class="hidden sm:table-cell px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                      <p class="text-gray-900 whitespace-no-wrap">
                                          {{$mycount->name}}
                                      </p>
                                  </td>
    
                                  <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                     <p class="text-gray-900 whitespace-no-wrap">
                                         {{$mycount->Obs}}
                                     </p>
                                 </td>
    
    
                                  <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                      <p class="text-gray-900 whitespace-no-wrap">
                                      {{$mycount->warehouse->name}}    
                                      </p>
                                  </td>   
                                   
                                  
                                  <td class="hidden sm:table-cell px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                      <p class="text-gray-900 whitespace-no-wrap">
                                      {{$mycount->user->name}}    
                                      </p>
                                  </td>   
                                  <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                       {{ $mycount->created_at->format('d-m-Y') }}</p>   
                                
                                </td>   
    
                             
    
                                    <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{route('admin.counts.show', $mycount)}}" class="text-blue-600 hover:text-blue-400 ">
                                         <p class="text-xl flex justify-center">
                                         <i class="fas fa-chevron-circle-right"></i> </p> <p class="text-md flex justify-center">Ver mas</p> </a> 
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
                 
    
    
                      @if ($mycounts->hasPages())
                          <div class="px-6 py-4">
                          {{$mycounts->links()}}
    
                          </div>
                      @endif
                      
              </x-table-responsive>
                      
                      
            
    </div>
    
     
    </div>
    
</div>
