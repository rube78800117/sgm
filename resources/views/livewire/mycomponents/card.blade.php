<div>

    <div class=" mx-auto">
        <div
            class="bg-white max-w-sm mx-auto rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-105 cursor-pointer">

            {{-- wire:click ="$set('color','{{$enviado}}')" --}}
            <div class="h-10 bg-{{$color}} flex items-center justify-between">
                <h1 class="text-white w-full py-2 px-4 font-bold text-xl "><i class="{{$icon}} "></i> {{$status}}</h1>
                <p class="mr-8 text-white font-bold text-lg"> {{$count}}</p>
                
            </div>
            {{-- {{dd($this->enviado)}} --}}

            {{-- {{$ == $enviado}} --}}

            <!-- <hr > -->
            <div class="flex justify-between px-2 mb-2 text-sm text-gray-600">
                {{-- boton ir linea --}}
                <div class="bg-gray-100 rounded-md w-52 px-4 m-1 py-1 flex justify-center cursor-pointer">

                    <i class=" hover:text-{{$color}} fas fa-share">&nbsp</i> {{$status}}

                    {{-- icono svg --}}


                    {{--FIN icono svg --}}



                </div>
                {{-- final boton ir linea --}}
            </div>








        </div>
    </div>


</div>