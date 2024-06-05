<div>







    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="my-4">
            <a class="flex items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900"
                href="{{ url('/admin/orders') }}">
                <span class="text-xs ml-1"> <i class="text-l fas fa-chevron-circle-left"> </i>
                    &nbsp </span>
                <span> Volver a la pagian anterior</span>

            </a>
        </div>
        <div class="">
            {{-- <div class="relative">
                <div
                    class="{{($order->status >= 1 && $order->status != 6)?'bg-blue-400':'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                    <i class="fas fa-check text-white"></i>

                </div>
                <div class="absolute -left-1 mt-0.5">
                    <p class="text-gray-700"> Pendiente</p>
                </div>

            </div>


            <div class="{{($order->status >= 2 && $order->status != 6)?'bg-blue-400':'bg-gray-400' }} h-1 flex-1 mx-2">
            </div> --}}

            {{-- Seccion approved --}}
            <div
                class="{{($order->status >= 5 && $order->status <= 6)?'hidden':' bg-white rounded-lg shadow-lg px-12 py-8 mb-6 flex  items-center' }}">


                <div class=" relative">
                    <div
                        class="{{($order->status >= 2 && $order->status <= 4)?'bg-blue-400':'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                        <i class="fas fa-check text-white"></i>
                        <div class="absolute -bottom-6 mt-0.5">
                            <p class="text-gray-700"> Recibido</p>
                        </div>

                    </div>

                </div>




                <div
                    class="{{($order->status >= 3 && $order->status <= 4)?'bg-blue-400':'bg-gray-400' }} h-1 flex-1 mx-2">
                </div>




                <div class=" relative">
                    <div
                        class="{{($order->status >= 3 && $order->status <= 4)?'bg-blue-400':'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                        <i class="fas fa-check text-white"></i>
                        <div class="absolute -bottom-6 mt-0.5">
                            <p class="text-gray-700"> Revision</p>
                        </div>
                    </div>


                </div>




                <div
                    class="{{($order->status >= 4 && $order->status <= 4)?'bg-blue-400':'bg-gray-400' }} h-1 flex-1 mx-2">
                </div>



                <div class=" relative">
                    <div
                        class="{{($order->status >= 4 && $order->status <= 4)?'bg-green-400':'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                        <i class="fas fa-check text-white"></i>
                        <div class="absolute -bottom-6 mt-0.5">
                            <p class="text-gray-700"> Aprobado</p>
                        </div>
                    </div>


                </div>


            </div>


            {{-- {{seccion cancell}} --}}

            <div class="{{($order->status >= 4 && $order->status <= 4)?'hidden':'' }} ">


                <div class="{{($order->status >= 5 && $order->status != 6)?'bg-white':'bg-whitemx-2' }} h-1 flex-1  ">
                </div>

                <div class="relative">
                    <div
                        class="{{($order->status >= 5 && $order->status != 6)?'bg-red-400':'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center hidden">
                        {{-- <i class="fas fa-check text-white"></i> --}}

                        <i class=" text-2xl fas fa-times text-white"></i>


                        <div class="absolute -left-1.5 mt-0.5">
                            <p class="text-gray-700 "> Rechazado</p>
                        </div>

                    </div>

                </div>



                <div class="{{($order->status >= 6 && $order->status != 5)?'bg-white':'bg-white  h-1 flex-1 mx-2' }}">
                </div>

                <div class="relative">
                    <div
                        class="{{($order->status >= 6 && $order->status != 5)?'bg-red-400':'hidden bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                        {{-- <i class="fas fa-check text-white"></i> --}}

                        <i class=" text-2xl fas fa-times text-white"></i>
                        <div class="absolute -bottom-6 -left-1.5 mt-0.5">
                            <p class="text-gray-700"> Anulado</p>
                        </div>
                    </div>


                </div>


            </div>



        </div>





        {{-- muestra lista detalle de la solicitud --}}

        <div class="items-center justify-items-center   py-8">

            <div class="bg-white rounded-lg shadow-lg px-6 py-4 mb-6 ">
                <p class="text-gray-700 uppercase"><span class="font-semibold">Número de solicitud </span>-
                    {{$order->id}}</p>

                {{-- envia inf to save with radio button --}}
                {{-- <form wire:submit.prevent="update()">
                    <div class="flex space-x-3 mt-2">
                        <x-jet-label>
                            <input wire:model="status" class="mr-2" type="radio" name="status" value="1">
                            Pendiente
                        </x-jet-label>
                        <x-jet-label>
                            <input wire:model="status" class="mr-2" type="radio" name="status" value="2">
                            Enviado
                        </x-jet-label>
                        <x-jet-label>
                            <input wire:model="status" class="mr-2" type="radio" name="status" value="3">
                            Revision
                        </x-jet-label>
                        <x-jet-label>
                            <input wire:model="status" class="mr-2" type="radio" name="status" value="4">
                            Aprobado
                        </x-jet-label>
                        <x-jet-label>
                            <input wire:model="status" class="mr-2" type="radio" name="status" value="5">
                            Rechazado
                        </x-jet-label>
                        <x-jet-label>
                            <input wire:model="status" class="mr-2" type="radio" name="status" value="6">
                            Anulado
                        </x-jet-label>
                    </div>

                    <div class="flex mt-2">
                        <x-jet-button class="ml-auto ">
                            Acuallizar
                        </x-jet-button>
                    </div>

                </form> --}}


                <div class=" flex {{($order->status >= 4  )?'hidden ':''}}">

                    {{--
                    <x-jet-button class="ml-auto button-success " wire:loading.attr="disabled" wire:target="status_save"
                        wire:click="status_save({{6}})">
                        Cancelar
                    </x-jet-button> --}}




                    {{-- <x-jet-button class="ml-auto  " wire:loading.attr="disabled" wire:target="status_save"
                        wire:click="status_save({{4}})">
                        Aprobado
                    </x-jet-button> --}}



                    <button wire:click="status_save({{6}},{{ $order->movement_type}})" type="button"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400 sm:w-auto sm:text-sm">
                        Cancelar Solicitud </button>
                


                <button  wire:click="status_save({{4}})" type="button"
                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 mx-4 py-2 bg-green-500 text-base font-medium text-white hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400 sm:w-auto sm:text-sm">
                    Aprobar Solicitud </button>
        



        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 ">
            <div class="grid grid-col-2 gap-6 text-gray-700">
             <div class="grid grid-col-2 gap-6 text-gray-700">
            <div>
                    <p class="text-gray-700  font-semibold"><i class="text-yellow-600 fas fa-info-circle"></i>&nbsp Instrucciones para el control adecuado de Stock en almacenes.</p>
                    <p class="text-justify text-gray-600"> <spam class="text-blue-700 font-semibold">Enviado: </spam> La solicitud ya fue enviada al administrador, las cantidades disponibles ya fueron actualizadas, por lo tanto usted puede disponer del o los articulos estrictamente del almacen que lo solicito. Si esta solicitud no es correcta puede comunicarse con el administrador para su anulacion y se restablecerán las cantidades en Stock solicitadas a su respectivo almacen.</p>
                
                               <p class="text-justify text-gray-600  "> <spam class="text-blue-700 font-semibold">Revision: </spam> El administrador puede anular o aprobar  esta solicitud en coordinacion con el solicitante, esto para mantener un control adecuado de stock en los diferentes almacenes. Tome en cuenta que los administradores pueden aprobar esta solicitud rapidamente cuando se trata de articulos comunes, por tanto usted debe comunicarse rapidamente con el para anularla si fuera el caso de que la solicitud no sea correcta</p>
                </div>

            </div>
            </div>
        </div>


        {{-- tabla de resumen de articulos ya solicitados --}}
        <div class="bg-white rounded-lg shadow-lg px-6 mt-6 py-4 mb-2 ">
            <p class="text-gray-700 uppercase"><span class="font-semibold">RESUMEN</span> </p>
        </div>

        <table class="border-separate border border-gray-200 w-full">
            <thead>
                <tr class="border-separate border border-gray-300">
                    <th
                        class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                        Item</th>
                    <th
                        class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                        Almacen</th>
                    {{-- <th
                        class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                        Linea
                    </th> --}}
                    <th
                        class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                        Cantidad</th>
                    {{-- <th
                        class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                    </th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr
                    class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0 border-separate border border-gray-400">
                    <td
                        class="px-10 w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>

                        <div class="flex justify-start items-center">





                            <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}" alt="">



                            <div class="font-bold text-sm text-gray-600">
                                <p class="flex justify-start items-center"> {{ $item->name }}</p>
                                <p class="flex justify-start items-center"> {{ $item->options->id_dopp }} </p>
                                <p class="flex justify-start items-center"> {{ $item->options->id_eetc}} </p>

                            </div>
                        </div>
                    </td>


                    <td
                        class="bg-{{ $item->options->line_color}} text-sm px-10 w-full lg:w-auto p-3 text-gray-700 text-center border border-b block lg:table-cell relative lg:static">

                        <div class="font-bold ">

                            <p class="flex justify-center items-center text-xs"> {{ $item->options->warehouse }}</p>
                        </div>

                    </td>


                    <td
                        class="w-full lg:w-auto pl-20 p-3 text-gray-800  border border-b text-center block lg:table-cell relative lg:static">
                        <div class="font-bold ">

                            <p class="flex items-center text-xs"> {{ $item->qty }}</p>
                        </div>
                </tr>
                @endforeach
            </tbody>
        </table>



        {{-- <x-jet-button class="ml-auto  " wire:loading.attr="disabled" wire:target="status_save"
            wire:click=" {{route('admin.orders.index')}} ">
            << Volver </x-jet-button> --}}

    </div>




</div>







{{-- asdadasdasssssssssse lllllllllllllllllllllllllllllllll --}}



{{-- <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
    <section class="py-20 mx-auto space-y-8 sm:py-20">
        <div style='width:800px;'
            class="container flex flex-row items-stretch justify-center w-full max-w-4xl space-x-12" x-data="{tab: 1}">
            <div class="flex flex-col justify-start w-1/4 space-y-4">
                <a class="px-4 py-2 text-sm"
                    :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 1, ' transform -translate-x-2': tab !== 1}"
                    href="#" @click.prevent="tab = 1">
                    RECIBIDOS
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 2, ' transform -translate-x-2': tab !== 2}"
                    href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                    REVISION
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 3, ' transform -translate-x-2': tab !== 3}"
                    href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                    APROBADOS
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 4, ' transform -translate-x-2': tab !== 4}"
                    href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                    CANCELADOS
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 5, ' transform -translate-x-2': tab !== 5}"
                    href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                    OTROS
                </a>
            </div>
            <div class="w-3/4">
                <div class="space-y-6" x-show="tab === 1">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 1"
                        x-transition:enter="transition duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        BATMAN & ROBIN
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 1"
                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Rottentomatoes 12%
                    </p>
                    <p class="text-xl" x-show="tab === 1"
                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Batman & Robin try to keep their relationship together even as they must stop Mr. Freeze and
                        Poison Ivy from...
                    </p>
                    <p class="text-base" x-show="tab === 1"
                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks"
                        class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                        class="text-base" x-show="tab === 1"
                        x-transition:enter="transition delay-500 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>

                <div class="space-y-6" x-show="tab === 2">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 2"
                        x-transition:enter="transition duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        BATMAN V SUPERMAN: DAWN OF JUSTICE (2016)
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 2"
                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Rottentomatoes 40%
                    </p>
                    <p class="text-xl" x-show="tab === 2"
                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Batman (Ben Affleck) and Superman (Henry Cavill) share the screen in this Warner Bros./DC
                        Entertainment co-production penned by David S....
                    </p>
                    <p class="text-base" x-show="tab === 2"
                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks"
                        class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                        class="text-base" x-show="tab === 2"
                        x-transition:enter="transition delay-500 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>

                <div class="space-y-6" x-show="tab === 3">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 3"
                        x-transition:enter="transition duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        BATMAN FOREVER (1995)
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 3"
                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Rottentomatoes 12%
                    </p>
                    <p class="text-xl" x-show="tab === 3"
                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Rottentomatoes 38%
                    </p>
                    <p class="text-base" x-show="tab === 3"
                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks"
                        class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                        class="text-base" x-show="tab === 3"
                        x-transition:enter="transition delay-500 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>

                <div class="space-y-6" x-show="tab === 4">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 4"
                        x-transition:enter="transition duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        BATMAN: THE KILLING JOKE (2016)
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 4"
                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Rottentomatoes 39%
                    </p>
                    <p class="text-xl" x-show="tab === 4"
                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Fathom Events, Warner Bros. and DC Comics invite you to a premiere event when Batman: The
                        Killing Joke comes to...
                    </p>
                    <p class="text-base" x-show="tab === 4"
                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks"
                        class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                        class="text-base" x-show="tab === 4"
                        x-transition:enter="transition delay-500 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>

                <div class="space-y-6" x-show="tab === 5">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 5"
                        x-transition:enter="transition duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        JUSTICE LEAGUE (2017)
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 5"
                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Rottentomatoes 40%
                    </p>
                    <p class="text-xl" x-show="tab === 5"
                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Fueled by his restored faith in humanity and inspired by Superman's selfless act, Bruce Wayne
                        enlists the help of his...
                    </p>
                    <p class="text-base" x-show="tab === 5"
                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks"
                        class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                        class="text-base" x-show="tab === 5"
                        x-transition:enter="transition delay-500 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
 --}}






{{-- STAR tab componenet --}}


{{-- <div class="bg-gray-300 flex justify-center items-center p-8 h-full h-screen">
    <div x-data="{ tab: 'foo' }" style="max-width:550px">
        <div class="flex -mx-px">
            <button x-on:click="tab = 'foo'" x-bind:class="{ 'bg-white border-white': tab === 'foo' }"
                class="bg-transparent hover:bg-gray-200 text-gray-700 text-sm md:text-base font-semibold rounded-t focus:outline-none mx-px py-px md:py-2 px-3 md:px-4"
                type="button">
                Foo
            </button>
            <button x-on:click="tab = 'bar'" x-bind:class="{ 'bg-white border-white': tab === 'bar' }"
                class="bg-transparent hover:bg-gray-200 text-gray-700 font-semibold rounded-t focus:outline-none mx-px py-2 px-4"
                type="button">
                Bar
            </button>
            <button x-on:click="tab = 'baz'" x-bind:class="{ 'bg-white border-white': tab === 'baz' }"
                class="bg-transparent hover:bg-gray-200 text-gray-700 text-sm md:text-base font-semibold rounded-t focus:outline-none mx-px py-px md:py-2 px-3 md:px-4"
                type="button">
                Baz
            </button>
            <button
                class="bg-transparent text-gray-500 text-sm md:text-base font-semibold rounded-t cursor-not-allowed mx-px py-px md:py-2 px-3 md:px-4"
                type="button" disabled>
                Disabled
            </button>
        </div>
        <ul class="bg-white text-sm rounded-b p-4">
            <li x-show="tab === 'foo'">
                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat
                veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. <span
                    class="hidden md:block">Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                    consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor
                    incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing
                    reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.<span>
            </li>
            <li x-show="tab === 'bar'">
                Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna
                duis labore cillum sint adipisicing exercitation ipsum. <span class="hidden md:block">Nostrud ut anim
                    non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna
                    consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore labore veniam irure irure
                    ipsum pariatur mollit magna in cupidatat dolore magna irure esse tempor ad mollit. Dolore commodo
                    nulla minim amet ipsum officia consectetur amet ullamco voluptate nisi commodo ea sit eu.</span>
            </li>
            <li x-show="tab === 'baz'">
                Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu
                ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim cupidatat. <span
                    class="hidden md:block">Deserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                    amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non et quis aliquip
                    ad irure in labore cillum elit enim. Consequat aliquip incididunt ipsum et minim laborum laborum
                    laborum et cillum labore. Deserunt adipisicing cillum id nulla minim nostrud labore eiusmod et amet.
                    Laboris consequat consequat commodo non ut non aliquip reprehenderit nulla anim occaecat. Sunt sit
                    ullamco reprehenderit irure ea ullamco Lorem aute nostrud magna.</span>
            </li>
        </ul>
    </div>
</div>

<footer class="text-gray-600 text-xs absolute bottom-0 left-0 mb-3 ml-3">
    <a class="text-gray-600 hover:text-gray-800 font-semibold underline" href="https://github.com/alpinejs/alpine"
        target="_blank">AlpineJS</a>
    by @<a class="text-gray-600 hover:text-gray-800 font-semibold underline"
        href="https://twitter.com/calebporzio">calebporzio</a>
    &amp;&amp;
    <a class="text-gray-600 hover:text-gray-800 font-semibold underline"
        href="https://github.com/tailwindcss/tailwindcss">TailwindCSS</a>
    by @<a class="text-gray-600 hover:text-gray-800 font-semibold underline"
        href="https://twitter.com/adamwathan">adamwathan</a>
</footer>

 --}}


{{-- END tab componenet --}}

































</div>