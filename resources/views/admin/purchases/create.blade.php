<x-admin-layout>
    <div class=" mt-12">
        <x-jet-section-title class="form-control">
            <x-slot name="title">
              <span class="border-0 "></span> 
            </x-slot>
            <x-slot name="description">
               <span class="border-0"></span> 
            </x-slot>

        </x-jet-section-title>
     
        @livewire('admin.create-list-detail')
    </div>


</x-admin-layout>
