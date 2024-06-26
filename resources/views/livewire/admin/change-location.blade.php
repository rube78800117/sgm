<div>
    <div>


        <x-button-enlace wire:click="$set('open',true)" color="yellow"
            class="">
            cambiar ubicación
        </x-button-enlace>

        <x-jet-dialog-modal wire:model="open">
            <x-slot name="title">
                ctualizar el Stock de almcanes</Small>
            </x-slot>

            <x-slot name="content">

{{$item}}
            </x-slot>

            <x-slot name="footer">
                <div class="flex justify-between">



                </div>

            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
