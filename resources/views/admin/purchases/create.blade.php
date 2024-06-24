<x-admin-layout>
    <div class="form-control container mt-12">
        <x-jet-section-title class="form-control">
            <x-slot name="title">
              <span class="form-control border-0 ">  Nuevo ingreso de STOCK</span> 
            </x-slot>
            <x-slot name="description">
               <span class="form-control border-0"> Aqui podras realizar el ingreso de nuevo STOCK de insumos y repuestos para almacenes</span> 
            </x-slot>

        </x-jet-section-title>

        @livewire('admin.create-list-detail')
    </div>


</x-admin-layout>
