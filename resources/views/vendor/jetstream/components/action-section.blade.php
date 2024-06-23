<div class=" form-control md:grid md:grid-cols-3 md:gap-6" {{ $attributes }}>
    <x-jet-section-title class="form-control">
        

        
        <x-slot name="title"> <span class="form-control border-0 font-bold " >{{ $title }}</span></x-slot>
        <x-slot name="description"><span class="form-control border-0"> {{ $description }} </span></x-slot>
   
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 form-control shadow sm:rounded-lg">
            {{ $content }}
        </div>
    </div>
</div>
