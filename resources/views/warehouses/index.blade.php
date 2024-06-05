<x-app-layout>
    
    <div class="container py-12 ">

        {{--  @livewire('admin.create-warehouse')  --}}
  @livewire('admin.show-station') 

        {{-- @livewire('admin.show-station', ['lineID' => $line->id]) --}}
        {{-- , ['article' => $article,'WarehouseId'=> $item->id,
           'warehouses_name'=>$item->name, 'line_color'=>$item->station->line->color] --}}


</div>
</x-app-layout>