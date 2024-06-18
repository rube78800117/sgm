<x-app-layout>

  {{--//fondo de backgrund y el buscador--}}
  {{-- <section class=" py-14   bg-cover"
    style="background-image: url({{asset('img/home/14192801_1502852906406846_6782265083451627914.jpg')}})">
    --}}
    <section class=" sm:py-0 md:py-14   bg-cover" style="background-image: url({{asset('img/home/background.jpg')}})">


      <div class="  max-w-full mx-auto px-4 sm:px-0 lg:px-8 py-10">









        <div class=" bg-grey-100 py-4 px-4 shadow-2xl rounded-lg   w-full md:w-3/4 lg:w-7/12">
          <h1 class="sm:block md:hidden font-bold text-2xl text-gray-800">Sistema de Gestión de Subalmacenes</h1>
            
          {{-- <h1 class="hidden md:block font-bold text-4xl text-gray-800">Sistema de Gestión de Subalmacenes <br>
            </h1>
             --}}
          {{-- <p class="  text-sm font-bold text-gray-700 ">"Hay una fuerza motriz más poderosa que el vapor, la electricidad
            y la energía atómica:</p> --}}
          {{-- <p class=" text-sm font-bold text-gray-700  ">Es la voluntad". Albert Einstein</p> --}}
          

          

        </div>


      <div class="hidden md:block bg-gray-200  px-4 shadow-2xl rounded-lg   w-full md:w-3/4 lg:w-7/12 ">
@livewire('search')
</div>

      </div>

    </section>

  <section>



  </section>






    {{-- seccion departamentos slider --}}

    <section class="m-2 bg-gray-900 py-2 ">
      <h1 class="text-white text-center pb-2 text-sm mx-4">CLASIFICACION POR CATEGORIAS</h1>
      {{-- <p class='text-gray-500 text-center text-sm mb-2'>sitio en construccion</p> --}}



      {{-- <div
        class='max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-7  gap-x-6 gap-y-8'>
        para lista de departamentos basico
      </div> --}}



      <div class='pb-2 max-w-7x1  mx-8 sm:px-8 lg:px-1 gap-x-8 gap-y-4'>
        @livewire ('departments-slider',['alldepartments'=>$departments] )

      </div>

    </section>


    <!-- seccion productos mas solicitados -->
    <section class="mt-2 bg-gray-200">
      {{-- <h1 class="text-center text-3xl text-gray-800"></h1> --}}
      <p class="text-center text-gray mb-6 text-sm ">SOLICITADOS RECIENTEMENTE</p>



      <div class="  mx-6  ">
        <div class="grid grid-cols-1 gap-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-5">
          @if ($articles!=[])
          @foreach ($articles as $article)



          <!-- CARD o tarjetas de productos mas solicitados -->


          {{-- // alinea el boton a la base en este div--}}
          <div class=" flex items-end self-stretch relative bg-gray-100  py-2 px-2 rounded-3xl w-128 my-4  shadow-xl">

            {{-- div del icono y fondos de color automaticos segun linea --}}
            <div
              class=" border-4  bg-gray-300 text-gray-400 items-center absolute rounded-full h-15 w-15   shadow-xl  left-2 -top-4">

           
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="38" height="38" x="0" y="0"
                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                <g>
                  <path xmlns="http://www.w3.org/2000/svg"
                    d="m337.903 358.822 23.413-37.992 42.252-14.41 4.681-44.377 31.789-31.295-15.114-42.006 15.114-42.007-31.788-31.295-4.681-44.376-42.252-14.41-23.413-37.993-44.285 5.347-37.619-24.008-37.619 24.01-44.284-5.347-23.413 37.992-42.252 14.41-4.681 44.376-31.789 31.295 15.114 42.007-15.114 42.007 31.788 31.294 4.681 44.377 42.252 14.41 23.413 37.992 44.285-5.346 37.619 24.009 37.619-24.009zm-211.332-170.079c0-71.367 58.062-129.429 129.429-129.429s129.429 58.062 129.429 129.429-58.062 129.429-129.429 129.429-129.429-58.062-129.429-129.429z"
                    fill="#909090" data-original="#000000" style="" class="" />
                  <path xmlns="http://www.w3.org/2000/svg"
                    d="m256 89.333c-54.815 0-99.41 44.595-99.41 99.41s44.595 99.41 99.41 99.41 99.41-44.595 99.41-99.41-44.595-99.41-99.41-99.41z"
                    fill="#909090" data-original="#000000" style="" class="" />
                  <path xmlns="http://www.w3.org/2000/svg"
                    d="m211.299 384.568-52.68 6.36-27.833-45.167-9.462-3.226-40.813 127.566 73.475-4.041 57.485 45.94 33.828-105.732z"
                    fill="#909090" data-original="#000000" style="" class="" />
                  <path xmlns="http://www.w3.org/2000/svg"
                    d="m381.214 345.762-27.834 45.166-52.679-6.36-34 21.7 33.828 105.732 57.485-45.94 73.475 4.041-40.813-127.566z"
                    fill="#909090" data-original="#000000" style="" class="" />
                </g>
              </svg>




            </div>



            <div class="mt-4  ">
              <a href=" {{route('article.show',$article)}} ">
              <article class="h-74 bg-white shadow-xl rounded-md overflow-hidden ">



                @if ( ImageO($article->id) !=null)


                <div class="flex flex-wrap justify-center">
                  <div class="w-12/12 sm:w-12/12 px-4">
                    <img src="{{ asset('/storage/' .ImageO($article->id)->url) }} " alt="..."
                      class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                  </div>
                </div>


                @else


                <div class="flex flex-wrap justify-center">
                  <div class="w-12/12 sm:w-12/12 px-4">
                    <img src="{{ asset('/storage/' . 'articles/def.jpg') }} " alt="..."
                      class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                  </div>
                </div>


                @endif





                <div class=" px-2 py-1">
                  <h1 class=" text-sm text-center text-gray-700 leading-2 ">{{Str::limit($article->name, 40) }}</h1>
                  <p class="font-bold text-center mb-4 leading-4 text-gray-700">{{Str::limit($article->description,
                    30)}}</p>
                  {{-- <ul>Solicitado: {{($article->warehouses()->sum('accumulated_request'))}} veces </ul> --}}


                </div>

              </article>
            </a>

          
              <div class="border-t-2 "></div>



              <div class="flex space-x-2">




              </div>



              <div class="  place-items-center ">

{{-- 
                <a href=" {{route('article.show',$article)}} "
                  class="block text-center w-full mb-1 bg-yellow-500  hover:bg-yellow-400 text-white font-semibold hover:text-gray-200 py-1 px-2 border border-yellow-300 hover:border-transparent rounded">
                  MAS INFORMACION
                </a> --}}





              </div>


            </div>

          </div>

          @endforeach


          @else

          @endif

        </div>
      </div>


    </section>


    @push('script')



    <script>
      livewire.on('glider',function(){

    new Glider(document.querySelector('.glider'), {
                // Mobile-first defaults
                slidesToShow: 1,
                slidesToScroll: 1,
                scrollLock: true,
                draggable: true,
                dots: '#resp-dots',
                arrows: {
                  prev: '.glider-prev',
                  next: '.glider-next'
                },
                responsive: [
                  {
                    // screens greater than >= 775px
                    breakpoint: 775,
                    settings: {
                      // Set to `auto` and provide item width to adjust to viewport
                      slidesToShow: 'auto',
                      slidesToScroll: 'auto',
                      draggable: true,
                    
                    }
                  },{
                    // screens greater than >= 1024px
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 5.5,
                      slidesToScroll: 4,
                      draggable: true,
                 
                    }
                  }
                ]
              });
  });
 
    </script>

    @endpush






</x-app-layout>