<div>
   

  

  

    <div class="min-h-screen py-2  justify-center sm:py-1">
        <section class="py-2 mx-auto space-y-2 sm:py-10 pr-2">
            
            
            <!--en x data se define que se recargara inicialmente en tab: 1-->
            <div style='width: 100%;' class=" m-2 sm:m-12 flex flex-row items-stretch justify-center w-full space-x-2"
                x-data="{tab: 1}">
                
                
    <!--muestra los iconos de clasificacion ne el derecho -->            
                <div class="flex flex-col justify-start w-1/6 space-y-4">
                    <a class="px-4 py-2 text-sm"
                        :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 1, ' transform -translate-x-2': tab !== 1}"
                        href="#" @click.prevent="tab = 1" @click.prevent="tab = 1">
                        @livewire('mycomponents.card', ['color' =>
                        "yellow-400",'status'=>'Recibidos','count'=>"$enviado",
                        'icon'=>"fas fa-clipboard"])

                    </a>

                    <a class="px-4 py-2 text-sm"
                        :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 2, ' transform -translate-x-2': tab !== 2}"
                        href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                        @livewire('mycomponents.card', ['color' => "blue-400",'status'=>'Revision','count'=>"$revision",
                        'icon'=>"fas fa-clipboard-list" ])
                    </a>

                    <a class="px-4 py-2 text-sm"
                        :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 3, ' transform -translate-x-2': tab !== 3}"
                        href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                        @livewire('mycomponents.card', ['color' =>
                        "green-400",'status'=>'Aprobados','count'=>"$aprobado",
                        'icon'=>"fas fa-clipboard-check" ])

                    </a>

                    <a class="px-4 py-2 text-sm"
                        :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 4, ' transform -translate-x-2': tab !== 4}"
                        href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                        @livewire('mycomponents.card', ['color' => "red-400",'status'=>'Cancelados','count'=>"$anulado",
                        'icon'=>"fas fa-trash" ])
                    </a>

                    <a class="px-4 py-2 text-sm"
                        :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 5, ' transform -translate-x-2': tab !== 5}"
                        href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                        TODAS LOS REGISTROS
                    </a>
                </div>
                
                <div class=" ">
                    <span
                    class="py-2 my-1 inline-flex bg-green-500 text-white  h-2 px-3 justify-center items-center">Administrador</span>

            
                    <div class="space-y-2" x-show="tab === 1">


                        @if ($enviadoreg->count())


                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 1"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            SOLICITUDES RECIBIDAS
                        </h3>

                        <section class="bg-white shadow-lg rounded-lg mt-2  text-gray-700" class="text-base"
                            x-show="tab === 1" x-transition:enter="transition delay-100 duration-300 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            <div class=" mx-auto ">
                                <ul>

                                    @foreach ($enviadoreg as $order)

                                    @livewire('mycomponents.card-item', ['order' => $order])

                                    @endforeach
                              
                                </ul>
                            </div>
                        </section>
                        @else
                        <div class="bg white shadow-lg rounded-lg px-12 py-8 mt-12  text-gray-700">
                            <span>No existe registros para mostrar</span>
                        </div>
                        @endif

                    </div>

                    <div class="space-y-2" x-show="tab === 2">






                        @if ($revisionreg->count())

                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 2"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            SOLICITUDES EN REVISION
                        </h3>

                        <section class="bg-white shadow-lg rounded-lg mt-2  text-gray-700" x-show="tab === 2"
                            x-transition:enter="transition delay-100 duration-300 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            <div class=" mx-auto ">
                                <ul>

                                    @foreach ($revisionreg as $order)
                                    @livewire('mycomponents.card-item', ['order' => $order])

                                    @endforeach
                                
                                </ul>
                            </div>
                        </section>
                        @else
                        <div class="bg white shadow-lg rounded-lg px-12 py-8 mt-12  text-gray-700">
                            <span>No existe registros para mostrar</span>
                        </div>
                        @endif







                    </div>

                    <div class="space-y-2" x-show="tab === 3">




                        @if ($aprobadoreg->count())

                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 3"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            SOLICITUDES APROBADAS
                        </h3>

                        <section class="bg-white shadow-lg rounded-lg mt-2  text-gray-700" x-show="tab === 3"
                            x-transition:enter="transition delay-100 duration-300 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            <div class=" mx-auto ">
                                <ul>

                                    @foreach ($aprobadoreg as $order)
                                    @livewire('mycomponents.card-item', ['order' => $order])

                                    @endforeach
                                
                                </ul>
                            </div>
                        </section>
                        @else
                        <div class="bg white shadow-lg rounded-lg px-12 py-8 mt-12  text-gray-700">
                            <span>No existe registros para mostrar</span>
                        </div>
                        @endif










                    </div>

                    <div class="space-y-2" x-show="tab === 4">





                        @if ($anuladoreg->count())

                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 4"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            SOLICITUDES CANCELADAS
                        </h3>


                        <section class="bg-white shadow-lg rounded-lg mt-2  text-gray-700" x-show="tab === 4"
                            x-transition:enter="transition delay-100 duration-300 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            <div class=" mx-auto ">
                                <ul>

                                    @foreach ($anuladoreg as $order)
                                    @livewire('mycomponents.card-item', ['order' => $order])

                                    @endforeach
                                
                                </ul>
                            </div>
                        </section>
                        @else
                        <div class="bg white shadow-lg rounded-lg px-12 py-8 mt-12  text-gray-700">
                            <span>No existe registros para mostrar</span>
                        </div>
                        @endif





                    </div>


                    @if ($orders->count())
                    <div class="space-y-2" x-show="tab === 5">
                        <h3 class="text-xl font-bold leading-light" x-show="tab === 5"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            TODOS LOS REGISTROS
                        </h3>


                        <section class="bg-white shadow-lg rounded-lg mt-2  text-gray-700">
                            <div class=" mx-auto ">
                                <ul>

                                    @foreach ($orders as $order)
                                    @livewire('mycomponents.card-item', ['order' => $order])

                                    @endforeach
                                    
                                </ul>
                            </div>
                        </section>
                        @else
                        <div class="bg white shadow-lg rounded-lg px-12 py-8 mt-12  text-gray-700">
                            <span>No existe registros para mostrar</span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
















</div>