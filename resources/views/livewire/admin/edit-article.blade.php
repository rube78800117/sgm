
<div>
        <header class="bg-white ">
            <div class="max-w-7xl mx-auto    text-gray-700">
                        <div class="flex justify justify-end py-2 items-center">
                            {{-- <h1 class="font-bold text-sm  text-gray-700"">
                                REPUESTO O INSUMO SELECCIONADO
                            </h1> --}}
                            {{-- <x-button-enlace color='red' wire:click="$emit('deleteArticle')">
                                Eliminar
                            </x-button-enlace> --}}
                            <x-button-enlace color='red' wire:click="$emit('deleteArticle')">
                                Eliminar
                            </x-button-enlace>
                        </div>
            </div>

        </header>



                <div class=" bg-gray-100 shadow-xl my-2  max-w-4xl mx-auto px-4 sm:px-6 lg:py-2  text-gray-700">
                                    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
                                    <h1 class=" text-sm font-semibold "> 
                                  EDITAR ARTICULO
                                    </h1>


                                    {{-- dropzone --}}
                                    <div class="mb-4" wire:ignore>
                                        <form action="{{route('admin.articles.files', $article)}}"
                                        method="POST"
                                        class="dropzone"
                                        id="my-awesome-dropzone">
                                        </form>
                                    </div> 





                                    @if ($article->image)
                                        <section class="bg-white shadow-xl rounded-lg p-2 mb-4">
                                                    <h1 class="text-sm text-center font-semibold mb-2">
                                                        Imagen del artículo {{$imagecontador}}
                                                    </h1>
                                                    <ul class="flex flex-wrap justify-center">
                                                        
                                                                    <li class="relative" wire:key="image-{{$article->image->id}}">
                                                                            {{-- <img class="flex w-64 h-40 justify-center object-cover" src="{{ asset('storage/' . $article->image->url) }} " alt=""> --}}
                                                                            <div class="flex flex-wrap justify-center">
                                                                                <div class="w-full sm:w-full  px-4 rounded-lg">
                                            
                                                                                    <img src="{{ asset('/storage/' . $article->image->url) }}" alt="..."
                                                                                        class="shadow rounded-lg max-w-full h-auto align-middle border-none" style="width: 300px; height: 300px; object-fit: contain;" />
                                                                                </div>
                                                                            </div>
                                                                            <x-jet-danger-button class="absolute right-2 top-2"
                                                                            wire:click="$emit('deleteImage', {{$article->image->id}})"  
                                                                            {{-- wire:loading.attr="disabled"
                                                                            wire:target="deleteImage"> --}}>
                                                                                <i class="fas fa-trash-alt"></i>
                                                                            </x-jet-danger-button>
                                                                            
                                                                    </li>
                                                                        
                                                    
                                                    </ul>
                                        </section>
                                    @else

                                        <p>No hay imagenes de este artículo para mostrar</p>


                                    @endif
                




                
                    <div class="grid grid-cols-2 gap-6 mb-4">

                        {{-- CATEGORIA --}}
                        <div>
                            <x-jet-label value="Categorías"/>
                                    <select  class="w-full form-control border-gray-300 focus:border-indigo-200 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" 
                                    wire:model="department_id">
                                            <option  value="" selected disabled>Seleccione una categoría</option>
                                        @foreach ($departments as $category)
                                            <option value="{{$category->id}}">{{strtoupper($category->name)}}</option>
                                        @endforeach

                                    </select>
                                    <x-jet-input-error for="department_id"/>

                        </div>
                        {{-- SUBCATEGORIA --}}
                        <div>
                            <x-jet-label value="Subcategorías"/>
                            <select class="w-full form-control border-gray-300 focus:border-indigo-200 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" wire:model="article.category_id">
                                    <option value="" selected disabled>Seleccione una Subcategoría</option>
                                @foreach ($categories as $subcategory)
                                    <option value="{{$subcategory->id}}">{{strtoupper($subcategory->name)}}</option>
                                @endforeach

                            </select>
                            <x-jet-input-error for="article.category_id"/>
                        </div>
                    </div>
                    

                    <div class="mb-4">
                        {{-- NOMBRE --}}
                        <div>
                            <x-jet-label value="Nombre"/>
                            <x-jet-input type="text"
                            class="w-full"
                            wire:model="article.name"
                            placeholder="Ingrese el nombre del artículo"/>
                            <x-jet-input-error for="article.name"/>
                        </div>
                                

                        {{-- SLUG --}}
                        <div class="mb-4">
                            <x-jet-label value="Slug"/>
                            <x-jet-input type="text"
                            disabled
                            class="w-full bg-gray-200"
                            wire:model="article.slug"
                            placeholder="Slug del artículo"/>
                            <x-jet-input-error for="article.slug"/>
                    </div>

                            {{-- DESCRIPCION --}}
                            <div>
                                <x-jet-label value="Descripción del artículo"/>
                                <x-jet-input type="text"
                                class="w-full"
                                wire:model="article.description"
                                placeholder="Ingrese la descripción del artículo"/>
                                {{-- <x-jet-input-error for="article.description"/> --}}
                            </div>
                    </div>


                    <div>
                        <div>
                            <x-jet-label value="Grupo del artículo"/>
                            <x-jet-input type="text"
                            class="w-full"
                            wire:model="article.grupo"
                            placeholder="Ingrese grupo"/>
                            {{-- <x-jet-input-error for="article.description"/> --}}
                        </div>
                        <div>
                            <x-jet-label value="Descripción del artículo"/>
                            <x-jet-input type="text"
                            class="w-full"
                            wire:model="article.subgrupo"
                            placeholder="Ingrese la descripción del artículo"/>
                            {{-- <x-jet-input-error for="article.description"/> --}}
                        </div>
                        <div>
                            <x-jet-label value="Descripción del artículo"/>
                            <x-jet-input type="text"
                            class="w-full"
                            wire:model="article.description"
                            placeholder="Ingrese la descripción del artículo"/>
                            {{-- <x-jet-input-error for="article.description"/> --}}
                        </div>


                    </div>


                    <div class="grid grid-cols-2 gap-6 mb-4 ">
                        {{--IDs  --}}
                    <div class="">
                            <x-jet-label value="ID de MiTeleférico"/>
                            <x-jet-input type="text"
                            class="w-full "
                            wire:model="article.id_eetc"
                            placeholder="Ingrese el ID de Mi Teleférico"/>
                            {{-- <x-jet-input-error for="article.id_eetc"/> --}}
                        </div>

                        <div class="">
                            <x-jet-label value="ID Doppelmayr"/>
                            <x-jet-input type="text"
                            class="w-full "
                            wire:model="article.id_dopp"
                            placeholder="Ingrese el ID de Dopplmayr"/>
                            <!--<x-jet-input-error for="article.id_dopp"/>-->
                        </div>

                        <div class="grid grid-cols-2 gap-6 mb-4">
                            <div>
                            <x-jet-label value="ID de zona"/>
                            <x-jet-input type="text"
                          wire:model="article.id_zona"
                            class="w-full "
                            
                            placeholder="Ingrese el ID de zona"/>
                            <x-jet-input-error for="article.id_zona"/>
                          
                                </div>
                                
                                
                                <div class="">
                                <x-button-enlace color='green' wire:click="usarID('')" 
                                    class=" justify-center  text-sm px-1 py-1 rounded-md flex items-center w-full">
                                    <span class="text-center">Usar ID actual</span>
                                </x-button-enlace>
                                
                                <x-button-enlace color='blue' wire:click="IDgenerate" type="submit"
                                class=" justify-center  text-sm px-1 py-1 rounded-md flex items-center w-full">
                                     <span class="text-center">Generar ID</span>
                                </x-button-enlace>    
                                </div> 
                                
                                
                                

                             </div>
                                 
                               
                         
                
                         {{-- UNIDADES Y STOCK MINIMO DEL ARTICULO --}}
               
                            <div >
                                <x-jet-label value="Unidad de medida"/>
                                
                                            <select class="w-full form-control border-gray-300 focus:border-indigo-200 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" 
                                            wire:model="article.unit_id">
                                        
                                                    <option value="" disabled selected >Seleccione la unidad de medida</option>
                                                @foreach ($units as $unit)
                                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                                    
                                                @endforeach
                                                
    
                                            </select>
                                            <x-jet-input-error for="article.unit_id"/>
                            
                            </div>
                            
                            <div class="">
                                <x-jet-label value="Stock minimo para este artículo"/>
                                <x-jet-input type=" number "
                                class="w-full "
                                wire:model="article.stock_min"
                                placeholder="Ingrese el Stock mínimo"/>
                                <x-jet-input-error for="article.stock_min"/>
                            </div>




                 


                    <div class="mb-4">


    

                    
                    </div>
                    
                    
                 
                            
                    
                    
                    <div class="grid grid-cols-2 gap-6 mb-4  ">
                        <div class="justify-center  ">
                                    {{-- buscador autocomplet de marcas  --}}
                                    {{-- @livewire('admin.search-brand' )  --}}
                                 


                                    <label for="type" class=" text-sm font-medium text-gray-700">Seleccione una Marca</label>
                                    <div class=" form-group col-span-2 flex justify-between">
                                       
                                        <select wire:model="article.trademark_id" placeholder="Seleccione una marca"
                                            autocomplete="type"
                                            class="form-control rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full mb-1 mt-1    sm:text-sm     py-2 px-3 border 0 bg-white  focus:outline-none  ">
                                          
                                            @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        
                                            @endforeach
                
                                        </select>
                                    </div>
                









                        <div>
                     


                                    
                                
                        </div>
                        
                        
                        
                      


                        <div class="flex justify-center items-center ">
                    
                            {{-- <x-button-enlace class="ml-auto" href="{{route('admin.brands.create')}}">
                                Agregar marca
                            </x-button-enlace>  --}}
                    
                        </div>
                    </div>

           
                

                            
                </div>  
                
                
            
                    </div>
                    
                    
                    
                    
                 {{-- boton principal --}}
                
                    <div class="mb-12">    
        
                        <div class="flex justify-between items-center p-4 ">
                        <a href="{{route('admin.articles.create')}}"> <x-button-enlace color='blue' class="ml-auto" href="">
                                << Volver Crear Nuevo Articulo 
                            </x-button-enlace> </a>
                            
                            
                            
                                    <x-jet-action-message 
                                        on="saved" class="mr-4">
                                            Artículo actualizado
                                    </x-jet-action-message> 
                            <x-button-enlace  color='green'
                                    wire:loading.attr="disabled"
                                    wire:target="save"
                                    wire:click="save">
                                        Actualizar artículo
                            </x-button-enlace> 



             
                        
                               
                 
                            
                    
                        </div>



                    
                    
            @push('script')
                <script>
                        Dropzone.options.myAwesomeDropzone = {
                                        headers: {
                                            'X-CSRF-TOKEN' : " {{ csrf_token() }} "
                                        },
                            dictDefaultMessage:"Arrastre una imagen AQUI",
                            acceptedFiles:'image/*',
                            paramName: "file", // The name that will be used to transfer the file
                            maxFilesize: 4, // MB
                            complete: function(file){
                                this.removeFile(file);
                            },
                            queuecomplete: function(){
                                livewire.emit('refreshArticle');
                            }
                                
                        }
                     
                            
                        Livewire.on('deleteArticle',() =>{
                        Swal.fire({
                        title: '¿Está usted seguro de eliminar este registro?',
                        text: "¡No podrá revertir esta acción!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: '¡Si, Eliminar!'
                        }).then((result) => {
                                    if (result.isConfirmed) {
                                       Livewire.emitTo('admin.edit-article','delete');
                                        Swal.fire(
                                            
                                        '¡Eliminado!',
                                        'El registro de este artículo ha sido eliminado.',
                                        'success'
                                        )
                                    }
                                })       

                        })


                        Livewire.on('deleteImag', image =>{
                        Swal.fire({
                        title: '¿Está usted seguro?',
                        text: "¡No podrá revertir esta acción!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: '¡Si, Eliminar!'
                        }).then((result) => {
                                    if (result.isConfirmed) {
                                       Livewire.emitTo('admin.edit-article','deleteImage',slug);
                                        Swal.fire(
                                            
                                        '¡Eliminado!',
                                        'La imagen ha sido eliminada.',
                                        'success'
                                        )
                                    }
                                })       

                        })





                </script>
            @endpush
            


</div>
