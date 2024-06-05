<x-admin-layout>

    <div class="container mt-12">
        <x-jet-section-title>
           <x-slot name="title">
                   Nuevo relevamiento de inventario
           </x-slot>
           <x-slot name="description">
               Aqui podras realizar el relevamiento de insumos y repuestos de un determinado almacén
           </x-slot>
       
        </x-jet-section-title>
      
   
    </div>
   
   @livewire('admin.create-counts')


</x-admin-layout>