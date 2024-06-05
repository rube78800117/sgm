<div class=" bg-gray-300">

       {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
       {{-- <x-slot name="header">
            </x-slot> --}}


            <x-slot name="header">
       
                <div class="container flex justify-between">
                   <div>
                     <h2 class="py-2 font-semibold text-sm text-gray-600 leading-tight">
                      INGRESO DE STOCK DE INSUMOS O REPUESTOS {{Session::get('key')}}
                     </h2>
                   </div> 
           
                
         
                 <div class="flex">
                     <a  href="{{route('admin.purchases.create')}}">
                     <x-button-enlace color='green' class="ml-auto">
                      NUEVO INGRESO
                     </x-button-enlace> 
                     </a>
                </div>
         
            </x-slot>



     <!-- component -->
    <div class="container bg-gray-100 shadow-md  ">
        <div class="px-6 pb-2  ">
            <x-jet-label value="Búsqueda por Nombre, ID, Nro de Documento"/>
            <x-jet-input class="w-3/4 border-gray-400" 
            wire:model="search" 
            type="text" placeholder="¿Que estas buscando...?"></x-jet>
    </div>
       
     
             <x-table-responsive>
 
             
                 
            

                 @if ($purchases->count())
                      <table class="min-w-full leading-normal">
                         <thead>
                             <tr>
                                  <th
                                     class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                     ID
                                 </th>
                                 <th
                                     class="hidden md:table-cell px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                     Proveedor
                                 </th>
                                
                                 <th
                                     class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                     Linea
                                 </th>
                                 <th
                                     class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                     Cod. Docuemento
                                 </th>
                                 <th
                                     class="hidden md:table-cell px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                     Aclaración
                                 </th>
                                 <th
                                     class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                     Fecha de registro
                                 </th>
                                 <th
                                     class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                     Acciones
                                 </th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($purchases as $purchase)
                       
                                 <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                     <p class="text-gray-900 whitespace-no-wrap">
                                     {{$purchase->id}}    
                                     </p>
                                </td>
 
 
                                 <td class="hidden md:table-cell px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                     <p class="text-gray-900 whitespace-no-wrap">
                                         {{$purchase->vendor->name_company}}
                                     </p>
                                 </td>

                                 <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$purchase->Line->name}}
                                    </p>
                                </td>

 
                                 <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                     <p class="text-gray-900 whitespace-no-wrap">
                                     {{$purchase->ndocument}}    
                                     </p>
                                 </td>   
                                  
                                 
                                 <td class="hidden md:table-cell px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                     <p class="text-gray-900 whitespace-no-wrap">
                                     {{$purchase->description}}    
                                     </p>
                                 </td>   

                                 <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                    {{$purchase->created_at->format('d-m-Y') }}    
                                    </p>
                                </td>   
 
 


                                <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                    <a href="{{route('admin.purchases.show', $purchase)}}" class="text-blue-600 hover:text-blue-400 ">
                                     <p class="text-xl flex justify-center">
                                     <i class="fas fa-chevron-circle-right"></i> </p> <p class="text-md flex justify-center"> Ir</p> </a> 
                                </td>

{{-- 
                                 <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{route('admin.purchases.show', $purchase->id)}}" class="text-blue-600 hover:text-blue-700 ">
                                         <p class="text-xl flex justify-center"> >>
                                            </p> <p class="text-md flex justify-center"> Ver mas</p> </a> 
                                          <i class="fas fa-glasses"></i>
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
                
 
 
                     @if ($purchases->hasPages())
                         <div class="px-6 py-4">
                         {{$purchases->links()}}
 
                         </div>
                     @endif
                     
             </x-table-responsive>
                     
    </div>              
           

 
    
</div>
