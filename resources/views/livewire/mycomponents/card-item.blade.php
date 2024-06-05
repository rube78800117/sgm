<div>
    

    <!--{{---->
    <!--{{dd(auth()->user()->roles) }} --}}-->


    @if ( count(auth()->user()->roles))
   

    <li class="" href="{{route('admin.orders.show', $order)}}">
    

            <div class=" container  sm:mx-1 mx-4">

                <!-- Question Listing Item Card -->
                <div class=" rounded-lg shadow-sm hover:shadow-2xl duration-500   py-2 my-1">
                    <div class="grid grid-cols-12 gap-3  bg-grey-900 sm:gap-1">
                        <!-- Meta Column div 1  -->
                        <div class="col-span-2  text-center hidden sm:block">
                            <!-- Vote Counts -->
                            <div class="grid grid-rows-1">
                                <div class="inline-block font-medium text-xl">
                                </div>

                                <p class="py-2 text-gray-800 font-bold ">ID: {{$order->id}}</p>
                                <div class="inline-block font-medium text-sm">

                                </div>
                            </div>

                            <!--ini lado  derecho cantidad de registro y fecha  -->

                            @if ($order->status >= 4)
                            <a href="#"
                                class="{{($order->status >= 5)?'bg-red-400':'bg-green-400' }}  grid grid-rows-1 mx-auto  py-1 w-4/5 2lg:w-3/5 rounded-md  ">

                                <div class="inline-block font-medium text-white mx-1 text-sm lg:text-md">
                                    <p class="font-bold">{{$order->created_at->format('d-m-Y')}}</p>
                                    <p> {{$order->created_at->diffForHumans()}} </p>

                                </div>
                            </a>

                            @else

                            <a href="#"
                                class="{{($order->status <= 2)?'bg-yellow-400':'bg-blue-400' }}  grid grid-rows-1 mx-auto  py-1 w-4/5 2lg:w-3/5 rounded-md  ">

                                <div class="inline-block font-medium text-white mx-1 text-sm lg:text-md">
                                    <p class="font-bold">{{$order->created_at->format('d-m-Y')}}</p>
                                    <p> {{$order->created_at->diffForHumans()}} </p>

                                </div>
                            </a>

                            @endif
                            
                            
                        



                          
                            <!--<div class="grid ">-->
                            <!--    <span class="inline-block font-bold text-xs">-->

                            <!--    </span>-->
                            <!--</div>-->
                        
                        </div>

                        <!--Meta column div 2-->
                            <div class="sm:col-span-10  col-span-12 px-3 sm:px-0">
                                  <div class="grid grid-cols-12  ">
                                    <!-- datos generales-->
                                    
                                          <div class=" sm:col-span-4 col-span-12">   
                                    
                                    
        
                                        <div id="app" class="bg-grey-500     flex card text-grey-900">
        
                                            <div class="w-full flex flex-col">
                                                <div class="p-4 pb-0 flex-1">
                                                    <h3 class="font-light mb-1 sm:text-xs text-xs text-grey-800"><i
                                                            class="fas fa-user text-green-900"></i> Solicitado por: 
                                                        {{strtoupper(approved($order->user_id)->name)}} <br></h3>
                                                
                                                   
                                                    
                                                    <div class=" items-center ">
                                                       <div class="text-xs">
                                                             <span class="text-sm text-grey-900"> {{ $order->reason}}</span>
                                                        </div>
                                                        
                                                        
                                                        <div class="sm:text-xs text-xs">
                                                         
                                                        
        
                                                            @switch($order->status)
                                                            @case(4)
                                                            <br> <i class="fas fa-user text-green-900"></i> Aprovado por: {{strtoupper(approved($order->approved_user_id)->name)}}
                                                            @break
                                                            @case(6)
                                                            <br> <i class="fas fa-user text-green-900"></i> Cancelado por: {{strtoupper(approved($order->approved_user_id)->name)}}
                                                            @break
                                                            @default
        
                                                            @endswitch
        
        
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div-->
                                                <!--    class="bg-grey-lighter p-3 flex items-center justify-between transition hover:bg-grey-light">-->
                                                <!--    Click para mas información-->
                                                <!--    <i class="fas fa-chevron-right"></i>-->
                                                <!--</div>-->
                                            </div>
                                        </div>
        
                                   
        
                                
                                      </div>  
                                        
                                    <!-- los articulos --> 
                                      <div class="flex justify-between sm:col-span-8 col-span-12 text-xs sm:text-xs px-3 py-2 sm:px-0">
                                     <div>
                                            @foreach ($items as $item)
                                           -&nbsp&nbsp{{ $item->name }}</p>
                                       
                                        @endforeach
                                     </div>
                                 
                                        <div>
                                            <a href="{{route('admin.orders.show', $order)}}">
                                                <a href="{{route('admin.orders.show', $order)}}" class="text-blue-600 hover:text-blue-400 ">
                                                <p class="text-xl flex justify-center">
                                                <i class="fas fa-chevron-circle-right"></i> </p> <p class="text-md flex justify-center">Ver mas</p> </a> 
                                            </a>
                                          </div>
                                     
                                    
                                      </div> 

                                  
                                      
                                 </div> 

                             </div>
                        
                        
                 

                    </div>
            </div>

    </li>

    @else
 
    <li class="" href="{{route('orders.show', $order)}}">
    

            <div class="grid mx-2">

                <!-- Question Listing Item Card -->
                <div
                    class="bg-gray-800 rounded-lg shadow-sm hover:shadow-lg duration-500 px-2 sm:px-6 md:px-2 py-0 my-1">
                    <div class="grid grid-cols-12 gap-0">
                        <!-- Meta Column -->
                        <div class="col-span-2 sm:col-span-2 text-center hidden sm:block">
                            <!-- Vote Counts -->
                            <div class="grid grid-rows-1">
                                <div class="inline-block font-medium text-xl">
                                </div>

                                <p class=" py-6 text-gray-400 font-bold ">ID: {{$order->id}}</p>
                                <div class="inline-block font-medium text-sm">

                                </div>
                            </div>

                            <!-- Answer Counts -->

                            @if ($order->status >= 4)
                            <a href="#"
                                class="{{($order->status >= 5)?'bg-red-400':'bg-green-400' }}  grid grid-rows-1 mx-auto  py-1 w-4/5 2lg:w-3/5 rounded-md  ">

                                <div class="inline-block font-medium text-white mx-1 text-sm lg:text-md">
                                    <p class="font-bold">{{$order->created_at->format('d-m-Y')}}</p>
                                    <p> {{$order->created_at->diffForHumans()}} </p>

                                </div>
                            </a>

                            @else

                            <a href="#"
                                class="{{($order->status <= 2)?'bg-yellow-400':'bg-blue-400' }}  grid grid-rows-1 mx-auto  py-1 w-4/5 2lg:w-3/5 rounded-md  ">

                                <div class="inline-block font-medium text-white mx-1 text-sm lg:text-md">
                                    <p class="font-bold">{{$order->created_at->format('d-m-Y')}}</p>
                                    <p> {{$order->created_at->diffForHumans()}} </p>

                                </div>
                            </a>

                            @endif

                            <!-- View Counts -->
                            <div class="grid ">
                                <span class="inline-block font-bold text-xs">

                                </span>
                            </div>
                        </div>

                        <!-- Summary Column -->
                        <div class="col-span-12 sm:col-start-3 sm:col-end-13 px-3 sm:px-0">

                           
                            <div class="grid  sm:hidden">
                                <div>
                                    @if ($order->status >= 4)
                                    <a href="#"
                                        class="{{($order->status >= 5)?'bg-red-500':'bg-green-500' }}  grid grid-rows-1 mx-auto  py-1 w-4/24 2lg:w-3/24 rounded-md  ">
                                        <div class="inline-block font-bold text-white mx-1 text-sm lg:text-md">

                                            <i class="fas fa-thumbtack"> </i>
                                            ID: {{$order->id}} <span><i class="fas fa-angle-right ml-9"></i></span>
                                            <span class="font-bold text-sm">
                                                {{$order->created_at->format('d-m-Y')}} /
                                                {{$order->created_at->diffForHumans()}}

                                            </span>
                                        </div>
                                    </a>

                                    @else

                                    <a href="#"
                                        class="{{($order->status <= 2)?'bg-yellow-500':'bg-blue-500' }}  grid grid-rows-1 mx-auto  py-1 w-4/24 2lg:w-3/24 rounded-md  ">

                                        <div class="inline-block font-bold text-white mx-1 text-sm lg:text-md">

                                            <i class="fas fa-thumbtack"> </i>
                                            ID: {{$order->id}} <span><i class="fas fa-angle-right ml-9"></i></span>
                                            <span class="font-bold text-sm">
                                                {{$order->created_at->format('d-m-Y')}} /
                                                {{$order->created_at->diffForHumans()}}

                                            </span>
                                        </div>
                                    </a>

                                    @endif
                                </div>



                                <div class="flex flex-wrap">
                                    <div class="mr-2">
                                        <div class="inline-block font-light capitalize">
                                            <i class="uil uil-arrow-circle-up mr-1"></i>
                                            <span class="font-bold text-sm">

                                            </span>
                                        </div>
                                    </div>
                                    <div class="mr-2">
                                        <div class="inline-block font-light capitalize">
                                            <i class="uil uil-check-circle mr-1"></i>

                                        </div>
                                    </div>

                                    <div class="mr-2">
                                        <div class="inline-block">
                                            <i class="uil uil-clock mr-1"></i>
                                            <span class="text-sm font-light">

                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <a href="{{route('orders.show', $order)}}"
                                class="sm:text-sm md:text-md lg:text-lg text-gray-700 font-bold ">

                                <div id="app" class="bg-white w-128 h-60  shadow-md flex card text-grey-darkest">

                                    <div class="w-full flex flex-col">
                                        <div class="p-4 pb-0 flex-1">
                                            <h3 class="font-light mb-1 text-grey-darkest"> Solicitado por: <i
                                                    class="fas fa-user text-green"></i>
                                                {{approved($order->user_id)->name}} <br></h3>
                                            <div class="text-xs flex items-center mb-4">
                                                <i class="fas fa-map-marker-alt mr-1 text-grey-dark"></i>
                                                Soho, London
                                            </div>
                                            <span class="text-xl text-grey-darkest"> {{ $order->reason}}<span
                                                    class="text-lg">       </span></span>
                                            <div class="flex items-center mt-4">
                                                <div class="pr-2 text-xs">
                                                    <i class="fas fa-user text-green">.</i>
                                                </div>
                                                <div class="px-2 text-xs">
                                                    <i class="text-grey-darker far fa-building"></i>


                                                    @switch($order->status)
                                                    @case(4)
                                                    <br> Aprovado por: {{approved($order->approved_user_id)->name}}
                                                    @break
                                                    @case(6)
                                                    <br> Cancelado por: {{approved($order->approved_user_id)->name}}
                                                    @break
                                                    @default

                                                    @endswitch


                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="bg-grey-lighter p-3 flex items-center justify-between transition hover:bg-grey-light">
                                            Click para mas informacion
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>

                            </a>










                        </div>
                    </div>
                </div>


            </div>

    </li>
    @endif





</div>