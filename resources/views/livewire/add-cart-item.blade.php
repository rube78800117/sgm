<div x-data>
    {{--  TARJETA DE ALMACENES ----------------------------------------------------------------------TARJETAS DE ALMACENES --}}
    {{-- --------------------------------------------------TARJETAS DE ALMACENES-------------------------------------------- --}}
    {!! Toastr::message() !!}

    <div class="container mx-auto">
        {{ Session::get('key') }}

    </div>
    <div class="flex justify-between">
        <div class="my-2">
            <p class="font-semibold text-base mb-2">Stock disponible:</p>

        </div>
        <div class="my-2">
            <p class="font-semibold text-base mb-2">{{ $quantity }} </p>
        </div>

    </div>
    <p>

    </p>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div>
        {{-- se compara el id de la linea del que va solicitar con el id de la linea del almacen  --}}

        @if ($user->hasRole('superadmin'))
            <div class="flex">
                <div>
                    <p class="mx-4">Solicitar: </p>

                </div>

                {{-- <div class="flex gap-2">
                    <button wire:click="decrement" x-bind:disabled="$wire.qty <= 1 || $wire.qty === 1" x-on:click="$wire.qty = Math.max($wire.qty - 1, 1)"><i class="text-md fas fa-minus"></i></button>
                   
                    <button wire:click="increment" x-bind:disabled="$wire.qty >= $wire.quantity" x-on:click="$wire.qty = Math.min($wire.qty + 1, $wire.quantity)"><i class="text-md fas fa-plus"></i></button>
                </div> --}}




                {{-- validacion del inpud de cantidad para unidades y decimales segun el tipo de articulo --}}


                <div class="flex ml-5">
                    {{-- Boton " - " decrementa --}}
                    <x-jet-secondary-button disabled x-bind:disabled="$wire.qty <= 1" wire:loading.attr="disabled"
                        wire:target="decrement" wire:click="decrement">
                        <i class=" text-md fas fa-minus"></i>
                    </x-jet-secondary-button>


                    @if ($article->type_id == 1)
                        <input class="mx-2 rounded-lg border-0" type="number" min="1" max="{{ $quantity }}"
                            wire:model="qty" step="1" x-bind:disabled="$wire.qty === 1"
                            x-on:change="$wire.qty = Math.floor(Math.max(Number($event.target.value), 1))">
                    @else
                        <input class="mx-2 rounded-lg border-0" type="number" step="0.1" min="0"
                            max="{{ $quantity }}" wire:model="qty" x-bind:disabled="$wire.qty <= 0.02"
                            x-on:change="$wire.qty = parseFloat(Math.max($event.target.value, 0)).toFixed(2)">
                    @endif
                    {{-- Boton " + " Incrementa --}}
                    <x-jet-secondary-button x-bind:disabled="$wire.qty >= $wire.quantity" wire:loading.attr="disabled"
                        wire:target="increment" wire:click="increment">
                        <i class=" text-md fas fa-plus"></i>
                    </x-jet-secondary-button>

                </div>






            </div>


            <div class=" mt-3 flex">
                <x-button-enlace color="yellow" x-bind:disabled="$wire.qty > $wire.quantity" class="w-full"
                    wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem">
                    Agregar
                </x-button-enlace>
            </div>
        @else
            @if ($user_line_id == $warehouse_line_id)
                <div class="flex">
                    <div>
                        <p class="mx-4">Solicitar: </p>

                    </div>
                    <div class="flex">
                        {{-- Boton " - " decrementa --}}
                        <x-jet-secondary-button disabled x-bind:disabled="$wire.qty <= 1" wire:loading.attr="disabled"
                            wire:target="decrement" wire:click="decrement">
                            <i class=" text-md fas fa-minus"></i>
                        </x-jet-secondary-button>






                        @if ($article->type_id == 1)
                            <input class="mx-2 rounded-lg border-0" type="number" min="1"
                                max="{{ $quantity }}" wire:model="qty" step="1"
                                x-bind:disabled="$wire.qty === 1"
                                x-on:change="$wire.qty = Math.floor(Math.max(Number($event.target.value), 1))">
                        @else
                            <input class="mx-2 rounded-lg border-0" type="number" step="0.1" min="0"
                                max="{{ $quantity }}" wire:model="qty" x-bind:disabled="$wire.qty <= 0.02"
                                x-on:change="$wire.qty = parseFloat(Math.max($event.target.value, 0)).toFixed(2)">
                        @endif






{{-- 
                        <input class="mx-2 rounded-lg border-0" type="number" min="1" max="{{ $quantity }}"
                            wire:model="qty" step="1" x-bind:disabled="$wire.qty === 1"
                            x-on:change="$wire.qty = Math.floor(Math.max(Number($event.target.value), 1))"> --}}


                        {{-- <span class="mx-6">{{ $qty }}</span> --}}


                        {{-- Boton " + " Incrementa --}}
                        <x-jet-secondary-button x-bind:disabled="$wire.qty >= $wire.quantity"
                            wire:loading.attr="disabled" wire:target="increment" wire:click="increment">
                            <i class=" text-md fas fa-plus"></i>
                        </x-jet-secondary-button>
                    </div>

                </div>


                {{-- @if ($user->hasRole('admin')) --}}
                {{-- @else
        @endif --}}



                <div class=" mt-3 flex">
                    <x-button-enlace color="yellow" x-bind:disabled="$wire.qty > $wire.quantity || $wire.qty <= 0" class="w-full"
                        wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem">
                        Agregar
                    </x-button-enlace>
                </div>
            @else
                <div class=" mt-4 flex justify-end">
                    {{-- <x-button-enlace color="blue" x-bind:disabled="true" class="w-full"
                    wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem">
                    
                </x-button-enlace> --}}
                    <i class="py-7 fas fa-store-alt-slash"></i>
                </div>
            @endif

        @endif






    </div>




</div>
