<div x-data>
    {{-- <p> {{ $this->quantity }}</p> --}}

    <div class="flex">
        {{-- Boton " - " decrementa --}}
        <x-jet-secondary-button disabled x-bind:disabled="$wire.qty <= 1" wire:loading.attr="disabled"
            wire:target="decrement" wire:click="decrement">
            <i class=" text-md fas fa-minus"></i>
        </x-jet-secondary-button>


        <span class="mx-6">{{ number_format($qty, 2) }}</span>


        {{-- Boton " + " Incrementa --}}
        <x-jet-secondary-button x-bind:disabled="$wire.qty >= $wire.quantity" wire:loading.attr="disabled"
            wire:target="increment" wire:click="increment">
            <i class=" text-md fas fa-plus"></i>
        </x-jet-secondary-button>
    </div>



</div>
