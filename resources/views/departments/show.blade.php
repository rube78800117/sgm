<x-app-layout>
    <div class="container my-8">




 <a class="flex items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900"
                                    href="{{ url('/') }}">
                                    <span class="text-xs ml-1"> <i class="text-l fas fa-chevron-circle-left"> </i> &nbsp
                                    </span>
                                    <span> Volver a la pagina principal</span>

                                </a>


        <div class="grid grid-cols-1 lg:grid-cols-1 rounded-md gap-6 bg-gray-100">


            <!-- This is an example component, el baner de cabecera -->


            <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 ">

                <div
                    class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-0 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
                    {{-- imagen --}}





                    @if($department->image!= null)
                    {{-- {{-- // un rem tiene 16 px --}}

                    <div class="absolute inset-0 w-full h-full object-fill object-center bg-blue-300 bg-opacity-30 bg-cover bg-bottom"
                        style="background-image: url({{ asset('/storage/' . $department->image->url) }} ); background-blend-mode: multiply;">
                    </div>
                    {{-- <img class="h-60 w-full object-cover" src="{{Storage::url($article->image->url)}}" alt=""> --}}


                    @else
                    <div class="absolute inset-0 w-full h-full object-fill object-center bg-blue-300 bg-opacity-30 bg-cover bg-bottom"
                        style="background-image: url({{ asset('/storage/' . 'articles/def.jpg') }} ); background-blend-mode: multiply;">
                    </div>
                    @endif













                    <div
                        class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                        <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">{{$department->name}}</h3>
                        <h4 class="w-full text-xl text-gray-100 leading-tight">Bienvenido a</h4>
                    </div>
                    <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12"
                        viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>
                
                
                
                </div>
                
                
                
                <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">

               <!--cuadro blanco debajo del baner-->     
                    <div class="hidden sm:block p-8 md:pr-18 md:pl-14 md:py-2 mx-2 md:mx-0  bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                        <div>
                            <div class="mt-4">
                               
                            </div>
                       </div>

                        <div class=" my-12">
                            <h4 class="hidden md:block text-xl text-gray-400">Bienvenido a</h4>
                            <h3 class="hidden md:block font-bold text-2xl text-gray-700">{{$department->name}}</h3>
                            <p class="text-gray-600 text-justify">...</p>
                        </div>


                    </div>
                </div>

        </div>



        <section class=" py-1">
           <div class=" block md:hidden">  <h4 class="w-full text-xl text-gray-900 leading-tight">Bienvenido a</h4>
                     
                  <h3 class="w-full font-bold text-2xl text-black leading-tight mb-2">{{$department->name}}</h3>
                       
            </div>

            @livewire ('category-filter',['categories'=>$categories, 'department'=>$department] )



        </section>


    </div>










    </div>
</x-app-layout>