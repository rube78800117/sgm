<div x-data>

    <div class="flex justify-between">
        <div class="my-2">
            <p class="font-semibold text-base mb-2">Stock disponible:</p>
           
        </div>
            <div class="my-2">
            <p class="font-semibold text-base mb-2">{{$quantity}} </p>
            </div>
            
    </div>
    <p>
  
    </p>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    
  
    <div>
                        <div class="flex">
                            <div>
                                <p class="mx-4">Solicitar:  </p>
                                
                        </div>
                            <div class="flex">
                                    {{-- Boton " - " decrementa --}}
                                <x-jet-secondary-button
                                disabled
                                x-bind:disabled="$wire.qty <= 1"        
                                wire:loading.attr="disabled"
                                wire:target="decrement"
                                wire:click="decrement">
                                                 <i class=" text-md fas fa-minus"></i>
                                </x-jet-secondary-button>
                            
                          
                                <span class="mx-6">{{$qty}}</span>
                            

                                 {{-- Boton " + " Incrementa --}}
                                <x-jet-secondary-button 
                                x-bind:disabled="$wire.qty >= $wire.quantity"        
                                wire:loading.attr="disabled"
                                wire:target="increment"
                                wire:click="increment" >
                                                    <i class=" text-md fas fa-plus"></i>
                                </x-jet-secondary-button>
                            </div>
                            
                        </div>
                     
                     
                        <div  class=" mt-4 flex">
                            <x-button-enlace    color="yellow" 
                                        x-bind:disabled="$wire.qty > $wire.quantity"  
                                        class="w-full"
                                        wire:click="addItem" 
                                        wire:loading.attr="disabled"
                                        wire:target="addItem">
                                Agregar  
                            </x-button-enlace>
                       

                        </div> 
                       
            
    </div>

</div>
