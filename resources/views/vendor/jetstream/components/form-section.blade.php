@props(['submit'])

<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6 form-control']) }}>
    <x-jet-section-title class="form-control" >
        <x-slot name="title"><span class="form-control border-0 font-bold " >{{ $title }} </span> </x-slot>
        <x-slot name="description"><span class="form-control border-0" >{{ $description }} </span> </x-slot>
    </x-jet-section-title>



    <div class=" form-control mt-5 md:mt-0 md:col-span-2">
        <form class="" wire:submit.prevent="{{$submit}}">
            <div class="px-4 py-5 sm:p-6 {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="grid grid-cols-6 gap-6">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class=" flex items-center justify-end px-4 py-3 text-right sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>

    

</div>
