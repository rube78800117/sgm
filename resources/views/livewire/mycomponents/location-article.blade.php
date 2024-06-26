<div>
    <div>
     
        <!-- Verifica si la variable $locationWare está definida y luego... -->
        @if (isset($locationWare))
 
        <p class="text-gray-500 text-sm ">Localizacion:</p> <span class="text-gray-700 font-bold"> {{$locationWare->name}}</span> <hr>
        @if(!is_null($locationWare->sector))
        <p class="text-gray-500 text-sm ">Estante:</p><span class="text-gray-700 font-bold"> {{$locationWare->sector->name}}</span> 
        @endif
        @else
          
       
        @endif
     

<!-- Share Project Modal -->

<x-button-enlace wire:click="$set('open',true)" color="yellow" class="">
    cambiar ubicación
</x-button-enlace>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Importar Registros de Relevamientos <br>
            <Small>Seleccione de la lista los registros de relevamientos que desea importar para actualizar el Stock de almcanes</Small> 
        </x-slot>
    
        <x-slot name="content">





            <div class="card-datatable table-responsive">
                <table class="invoice-list-table table dataTable no-footer dtr-column" aria-describedby="DataTables_Table_0_info" style="width: 977px;">
                    <!-- Encabezado de la tabla -->
                    <thead class="table-light">
                        <!-- Código de encabezado omitido por brevedad -->
                    </thead>
                    <tbody>








                    </tbody>
                </table>
                
            </div>
            
            <!-- Mostrar controles de paginación -->
            <div class="row mx-2">
                <div class="col-sm-12 col-md-6">
                    <!-- Información de paginación -->
                 
                </div>
            </div>







      
        </x-slot>
    
        <x-slot name="footer">
            <div class="flex justify-between">

                     <x-button-enlace color="green" wire:click="emiit()">
                Importar

            </x-button-enlace> 

            <x-button-enlace color="red" wire:click="$set('open',false)">
                <span wire:click="clearArray()">Cerrar Formulario</span>
                
            </x-button-enlace>
            </div>
       
        </x-slot>
    </x-jet-dialog-modal>

<!--/ Share Project Modal -->














    </div>

</div>

