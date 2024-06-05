<div wire:init='loadPosts'>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @if(count($departments))

    <div class=" glider-contain">
        <ul class="  pl-2  glider">
            @foreach ($departments as $department)
            <li class=" {{$loop->last ? '':'mr-4'}} ">
                
                <a href=" {{route('department.show',$department)}} ">
                

          
                
                
                
                
                <article class="bg-gray-800 shadow-lg rounded overflow-hidden ">

                    <img src="  {{ asset('/storage/' .$department->image->url) }}" alt="">
                    <div class="px-2 py-1">
                        <h1 class="  m-2 leading-4 text-white text-center">

                            {{($department->name)}}
                        </h1>
                        <div>
                            {{-- <a href=" {{route('department.show',$department)}} "
                                class="block text-center w-full mb-2  bg-transparent hover:bg-blue-500 text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Ir a la categoría

                            </a> --}}
                        </div>
                    </div>

                </article>

            </a>


            </li>
            @endforeach
        </ul>




        <button aria-label="Previous" class="glider-prev"><i class="text-gray-100 fas fa-backward"></i> </button>
        <button aria-label="Next" class="glider-next"><i class="text-gray-100 fas fa-forward"></i></button>
        <div role="tablist" class="dots"></div>
    </div>
    @else
    <div class="mb-4 h-48 flex justify-center items-center bg-white shadow-xl border border-gray-100 rounded-lg">
        <div class="rounded animate-spin ease duration-300 w-10 h-10 border-2 border-indigo-500"></div>
    </div>
    @endif
</div>