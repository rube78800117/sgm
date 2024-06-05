<div>

<x-button-enlace wire:click="$set('open',true)" color="yellow" class="">
    Importar registros de relevamientos
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



                        @foreach($surveys as $item)
                        <div class="leading-3 form-check custom-option custom-option-basic checked m-2">
                            <label class="form-check-label custom-option-content" for="customCheckTemp{{ $item->id }}">
                                <input class="form-check-input" type="checkbox" value="{{ $item->id }}" id="customCheckTemp{{ $item->id }}" 
                                       wire:model="selectedSurveys" checked="{{ in_array($item->id, $selectedSurveys) ? 'checked' : '' }}">
                                <span class="custom-option-header">
                                    <span class="text-sm mb-0">ID:&nbsp;{{ $item->id }}</span>
                                   
                                </span>
                                <span class="custom-option-body">
                                    {{ $item->name }}&nbsp
                                </span><br>
                                <span class="custom-option-body text-blue-800">
                                    Con:&nbsp{{ $item->counts_details()->count() }}&nbsp Registros
                                </span> &nbsp-&nbsp
                                <span class="text-sm"> Usuario:&nbsp{{ $item->user->name }}</span>
                            </label>
                        </div>
                        <hr>
                    @endforeach





                    </tbody>
                </table>
                
            </div>
            
            <!-- Mostrar controles de paginación -->
            <div class="row mx-2">
                <div class="col-sm-12 col-md-6">
                    <!-- Información de paginación -->
                    {{ $surveys->links() }}
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

</div>
