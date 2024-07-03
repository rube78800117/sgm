<div>


    <button wire:click="zone">
        zonas
    </button>



    {{-- <span>linea Seleccionada {{ $this->lines->firstWhere('id', $lineSelect)->name }}</span> --}}
    <div class="flex justify-end">




       
            <select name="lineSelect" wire:model="lineSelect">
                @foreach ($this->lines as $line)
                    <option value="{{ $line->id }}">{{ $line->name }}</option>
                @endforeach
            </select>
     
        {{-- <select name="lineSelect" wire:model="lineSelect" >
            @foreach ($this->lines as $line)
                <option value="{{ $line->id }}"> {{ $line->name }}
                </option>
            @endforeach
        </select> --}}

        <button class="success" wire:click="showAll">Mostrar Todos</button>
    </div>

    @livewire('admin.index-order-selected', ['orders' => $orders])


    <!-- This is an example component -->
    <div class="col-span-6 mx-6 sm:mx-0 ">

        <div class=" border-b border-gray-200 dark:border-gray-700 mb-4">
            <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button
                        class="font-bold inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active "
                        id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                        aria-controls="profile" aria-selected="true">Salida de almacenes</button>
                </li>

                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-bold text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 "
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Movimiento entre almacenes</button>
                </li>

     
            </ul>
        </div>



        <div id="myTabContent">
     
            <div class="px-4 sm:px-12  bg-gray-50 p-4 rounded-lg dark:bg-gray-800 " id="profile" role="tabpanel"
                aria-labelledby="profile-tab">
                <p class="text-gray-500 dark:text-gray-400 text-sm">nombre linea <strong
                        class="font-medium text-gray-800 dark:text-white">Tab 1</strong>.

            </div>



            <div class=" px-4 sm:px-12  bg-gray-50 p-4 rounded-lg font-bold dark:bg-gray-800 hidden" id="dashboard"
                role="tabpanel" aria-labelledby="dashboard-tab">
                <p class="text-gray-500 dark:text-gray-400 text-sm"> <strong
                        class="font-medium text-gray-800 dark:text-white">Tab 2 </strong>llene los siguientes campos.</p>
            </div>

   
        </div>


    </div>






</div>





<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>


</section>
</div>
<script>
    Livewire.emit('warehouseOrderSearch')
</script>















</div>
