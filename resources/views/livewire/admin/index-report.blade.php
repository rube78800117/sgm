<div>
  

<div>
    {{-- The Master doesn't talk, he acts. --}}


              {{-- tabla --}}
  <div class="bg-white pb-4 px-4 rounded-md w-full">
    <div class="flex justify-between w-full pt-6 ">
      <p class="ml-3"> Reporte de insumos y repuestos de todas las categorías en todos los almacenes </p>
  

    </div>
    
<div class="w-full flex justify-end px-2 mt-2">
      {{-- <div class="w-full sm:w-64 inline-block relative ">
        <input type="" name="" class="leading-snug border border-gray-300 block w-full appearance-none bg-gray-100 text-sm text-gray-600 py-1 px-4 pl-8 rounded-lg" placeholder="Search" />

        <div class="pointer-events-none absolute pl-3 inset-y-0 left-0 flex items-center px-2 text-gray-300">

          <svg class="fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999">
            <path d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z" />
          </svg>
        </div>
      </div> --}}
    </div>
  <div class="overflow-x-auto mt-6">

    {{-- scroll --}}
{{-- <div class="overflow-y-scroll w-full" style="height: 300px; ">
</div> --}}
  {{-- fin de scroll --}}


    <table class="table-auto border-collapse w-full">
      <thead>
        <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
          <th class="px-4 py-2 " style="background-color:#f8f8f8">ID Dopp</th>
          <th class="px-4 py-2 " style="background-color:#f8f8f8">ID MT</th>
          <th class="px-4 py-2 " style="background-color:#f8f8f8">ID Zona</th>
          <th class="px-4 py-2 " style="background-color:#f8f8f8">Descripcion</th>
          @foreach($warehouses as $warehouse) 
           <th class="px-4 py-2 " style="background-color:#f8f8f8">{{$warehouse->name}}</th>
            @endforeach
               
          <th class="bg-green-50 px-4 py-2 " style="background-color:#f8f8f8">Stock Total</th>
        </tr>
      </thead>
      
      <tbody class="text-sm font-normal text-gray-700">

    



    
      

@foreach($articles as $article)
@if($article->stock==0)

@else

<tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
<td class="px-4 py-2">{{$article->id_dopp}}</td>
<td class="px-4 py-2">{{$article->id_eetc}}</td>
<td class="px-4 py-2">{{$article->id_zona}}</td>
<td class="px-4 py-2">{{strtoupper($article->name)}} </td>
@foreach($warehouses as $warehouse) 
<th class=" px-4 py-2 " style="font-size: 2rem background-color:#f8f8f8"> {{quantity($article->id, $warehouse->id)==0?'':quantity($article->id, $warehouse->id)}}</th>
 @endforeach


{{-- <td class="px-4 py-2">{{$article->quantity}}</td> --}}
<td class="text-md  bg-green-50 px-4 py-2">{{$article->stock}}</td>

</tr>

@endif
@endforeach
      

         






      </tbody>
    
    </table>
  
  </div>
   
  </div> 



{{-- fin de tabla --}}
 








              {{-- tabla 22 --}}
              <div class="bg-white pb-4 px-4 rounded-md w-full">
                <div class="flex justify-between w-full pt-6 ">
                  <p class="ml-3"> Reporte de insumos y repuestos por categorias</p>
              
            
                </div>
                <div class="col-span-5 md:col-span-3">
                  <div class="">
                      <select wire:model="departmentselect" placeholder="Categoría" name="departmentselect"
                          class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">

                          <option value="">Seleccione una Categoría</option>
                          @foreach ($departments ?? [] as $item)
                          <option value="{{$item->id}}">{{$item->name}}</option>
                          @endforeach

                      </select>
                      <x-jet-input-error for="departmentselect"/>
                  </div>
              </div>
            <div class="w-full flex justify-end px-2 mt-2">
                  {{-- <div class="w-full sm:w-64 inline-block relative ">
                    <input type="" name="" class="leading-snug border border-gray-300 block w-full appearance-none bg-gray-100 text-sm text-gray-600 py-1 px-4 pl-8 rounded-lg" placeholder="Search" />
            
                    <div class="pointer-events-none absolute pl-3 inset-y-0 left-0 flex items-center px-2 text-gray-300">
            
                      <svg class="fill-current h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999">
                        <path d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z" />
                      </svg>
                    </div>


                  



                  </div> --}}
                </div>
              <div class="overflow-x-auto mt-6">
            
                <table class="table-auto border-collapse w-full">
                  <thead>
                    <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                      <th class="px-4 py-2 " style="background-color:#f8f8f8">ID Dopp</th>
                      <th class="px-4 py-2 " style="background-color:#f8f8f8">ID MT</th>
                      <th class="px-4 py-2 " style="background-color:#f8f8f8">ID Zona</th>
                      <th class="px-4 py-2 " style="background-color:#f8f8f8">Descripcion</th>
                      @foreach($warehouses as $warehouse) 
                       <th class="px-4 py-2 " style="background-color:#f8f8f8">{{$warehouse->name}}</th>
                        @endforeach
                    
                     
                      <th class=" bg-green-50 px-4 py-2 " style="background-color:#f8f8f8">Stock Total</th>
                    </tr>
                  </thead>
                  <tbody class="text-sm font-normal text-gray-700">
            
                  
            
            @foreach($articlesdep as $article)






            @if($article->stock==0)

            @else
            
            <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
            <td class="px-4 py-2">{{$article->id_dopp}}</td>
            <td class="px-4 py-2">{{$article->id_eetc}}</td>
            <td class="px-4 py-2">{{$article->id_zona}}</td>
            <td class="px-4 py-2">{{strtoupper($article->name)}} </td>
            @foreach($warehouses as $warehouse) 
            <th class=" px-4 py-2 " style="font-size: 2rem background-color:#f8f8f8"> {{quantity($article->id, $warehouse->id)==0?'':quantity($article->id, $warehouse->id)}}</th>
             @endforeach
            
            
            {{-- <td class="px-4 py-2">{{$article->quantity}}</td> --}}
            <td class="text-md  bg-green-50 px-4 py-2">{{$article->stock}}</td>
            
            </tr>
            @endif






            {{-- @if($article->stock==0)
            
            @else
            
            <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
            <td class="px-4 py-2">{{$article->id_dopp}}</td>
            <td class="px-4 py-2">{{$article->id_eetc}}</td>
            <td class="px-4 py-2">{{$article->id_zona}}</td>
            <td class="px-4 py-2">{{strtoupper($article->name)}} </td>
            @foreach($warehouses as $warehouse) 
            <th class="px-4 py-2 " style="background-color:#f8f8f8"> {{quantity($article->id, $warehouse->id)}}</th>
             @endforeach
            
            
         
            <td class="text-bold px-4 py-2">{{$article->stock}}</td>
            
            </tr>
            @endif --}}
            @endforeach
                  
                             
            
            
            
            
            
            
                  </tbody>
                </table>
              </div>
               
              </div> 
            
            
            
            {{-- fin de tabla --}}
             























<style>

thead tr th:first-child { border-top-left-radius: 10px; border-bottom-left-radius: 10px;}
thead tr th:last-child { border-top-right-radius: 10px; border-bottom-right-radius: 10px;}

tbody tr td:first-child { border-top-left-radius: 5px; border-bottom-left-radius: 0px;}
tbody tr td:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 0px;}


</style>

</div>


</div>