<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:py-8 py-12 text-gray-700">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <h1 class=" text-sm  font-semibold mb-8"> 
    CREA UN NUEVO ARTICULO
    </h1>
    






    
    
    {{-- <div class="alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300 my-5 mb-4">
        <div
            class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
            <span class="text-green-500">
                <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </span>
        </div>
        <div class="alert-content ml-4">
            <div class="alert-title font-semibold text-lg text-green-800">
                {{ __('Success') }}
            </div>
            <div class="alert-description text-sm text-green-600">
                {{ session('key') }}
            </div>
        </div>
    </div> --}}
   















    <div class="grid grid-cols-2 gap-6 mb-4">

        {{-- CATEGORIA --}}
        <div>
            <x-jet-label value="Categorías"/>
                    <select class="w-full form-control border-gray-300 focus:border-indigo-200 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" 
                    wire:model="category_id">
                            <option value="" selected disabled>Seleccione una categoría</option>
                        @foreach ($categories as $category)
                            <option wire:click="IDgenerate" value="{{$category->id}}">{{strtoupper($category->name)}}</option>
                        @endforeach

                    </select>
                    <x-jet-input-error for="category_id"/>

        </div>
        {{-- SUBCATEGORIA --}}
        <div>
            <x-jet-label value="Subcategorías"/>
            <select class="w-full form-control border-gray-300 focus:border-indigo-200 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" wire:model="subcategory_id">
                    <option value="" selected disabled>Seleccione una Subcategoría</option>
                @foreach ($subcategories as $subcategory)
                    <option value="{{$subcategory->id}}">{{strtoupper($subcategory->name)}}</option>
                @endforeach

            </select>
            <x-jet-input-error for="subcategory_id"/>
        </div>
    </div>
       

    <div class="mb-4">
         {{-- NOMBRE --}}
        <div>
            <x-jet-label value="Nombre"/>
            <x-jet-input type="text"
            class="w-full"
            wire:model="name"
            placeholder="Ingrese el nombre del artículo"/>
            <x-jet-input-error for="name"/>
        </div>
                   

        {{-- SLUG --}}
        <div class="mb-4">
            <x-jet-label value="Slug"/>
            <x-jet-input type="text"
            disabled
            class="w-full bg-gray-200"
            wire:model="slug"
            placeholder="Slug del artículo"/>
            <x-jet-input-error for="slug"/>
       </div>      
       {{-- DESCRIPCION --}}
       <div>
           <x-jet-label value="Descripción"/>
           <x-jet-input type="text"
           class="w-full"
           wire:model="description"
           placeholder="Ingrese la descripción del artículo"/>
           <x-jet-input-error for="description"/>
       </div>
                  
    </div>

    <div class="grid grid-cols-3 gap-6 mb-4 ">
          {{--IDs  --}}
       <div class="">
            <x-jet-label value="ID de MiTeleférico"/>
            <x-jet-input type="text"
            class="w-full "
            wire:model="id_eetc"
            placeholder="Ingrese el ID de Mi Teleférico"/>
            <x-jet-input-error for="id_eetc"/>
        </div>

        <div class="">
            <x-jet-label value="ID Doppelmayr"/>
            <x-jet-input type="text"
            class="w-full "
            wire:model="id_dopp"
            placeholder="Ingrese el ID de Dopplmayr"/>
            <x-jet-input-error for="id_dopp"/>
        </div>

        <div class="">
            <x-jet-label  value="ID de zona"/>
            <x-jet-input type="text"
          
            class="w-full "
            wire:model="id_zona"
            placeholder="Ingrese el ID de zona"/>
            <x-jet-input-error for="id_zona"/>
                <div>
                <x-button-enlace color='blue' class="ml-auto" wire:click="IDgenerate" >
                    Generar ID
                    
                </x-button-enlace> 
                </div>
        </div>

    </div>
   
{{-- UNIDADES Y STOCK MINIMO DEL ARTICULO --}}
<div class="grid grid-cols-3 gap-6 mb-4">
    <div >
        <x-jet-label value="Unidad de medida"/>
         
                    <select class="w-full form-control border-gray-300 focus:border-indigo-200 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" 
                    wire:model="unit_id">
                   
                            <option value="" disabled selected >Seleccione la unidad de medida</option>
                        @foreach ($units as $unit)
                            <option value="{{$unit->id}}">{{$unit->name}}</option>
                            
                        @endforeach
                        

                    </select>
                    <x-jet-input-error for="unit_id"/>
    </div>
    <div>
        <div class="">
            <x-jet-label value="Stock minimo para este artículo"/>
            <x-jet-input type=" number "
            class="w-full "
            wire:model="stock_min"
            placeholder="Ingrese el Stock mínimo"/>
            <x-jet-input-error for="stock_min"/>
        </div>



    </div>

</div>


    <div class="mb-4">



  

     
    </div>
    <div class="grid grid-cols-2 gap-6 mb-4  ">
        <div class="justify-center  ">
                  






                <label for="type" class=" text-sm font-medium text-gray-700">Seleccione una Marca</label>
                    <div class=" form-group col-span-2 flex justify-between">
                       
                        <select wire:model="brandselect" placeholder="Seleccione una marca"
                            autocomplete="type"
                            class="form-control rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full mb-1 mt-1    sm:text-sm     py-2 px-3 border 0 bg-white  focus:outline-none  ">
                          
                            @foreach ($brands as $brand)
                            <option value="{{$brand->id}} ">{{$brand->name}}</option>
                        
                            @endforeach

                        </select>
                    </div>





                  
                        
                        <x-jet-input-error for="trademark_id"/>




                        {{-- Select de marcas no apropiado para el caso  --}}
                    {{-- <select class="w-full form-control border-gray-300 focus:border-indigo-200 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" 
                    wire:model="trademark_id">
                            <option value="" selected disabled>Seleccione la marca del artículo</option>
                        @foreach ($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                            
                        @endforeach
                        

                    </select> --}}
        </div>


        <!--<div class="flex justify-center items-center ">-->
       
        <!--    <x-button-enlace class="ml-auto" href="{{route('admin.brands.create')}}">-->
        <!--        Agregar marca-->
        <!--    </x-button-enlace> -->
  
       
        <!--</div>-->



  
       
    </div>

{{-- boton principal --}}
  
    <div>



     
        <div class="flex justify-end items-center ">
            

            <x-button-enlace color='green'
            class="ml-auto button-success " 
            wire:loading.attr="disabled"
            wire:target="save"
            wire:click="save">
                Crear artículo
            </x-button-enlace> 
       
        </div>
    </div>
   
</div>
