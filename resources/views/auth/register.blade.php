<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        @if (estadosConfig()==1)



        <x-jet-validation-errors class="mb-4" />


        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="Nombre y Apellidos" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>





            <div>
                {{--
                <x-jet-label hidden="true" for="state" value="Estado de cuenta" /> --}}
                {{--
                <x-jet-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')"
                    required autofocus autocomplete="state" /> --}}

                <select hidden="true" name="state" for="state" id="state" placeholder="Estado" autocomplete="type"
                    class="form-control rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full mb-1 mt-1    sm:text-sm     py-2 px-3 border 0 bg-white  focus:outline-none  ">
                    <option value="Activo">Activo</option>

                </select>
            </div>

        {{-- SELECCION CARGO O PROFESION  --}}
            <div class="my-4">
                <x-jet-label for="job_title_id" value="Seleccione su cargo" />

                <select name="job_title_id" for="job_title_id" id="job_title_id" placeholder="No definido"
                    autocomplete="type"
                    class="form-control rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full mb-1 mt-1    sm:text-sm     py-2 px-3 border 0 bg-white  focus:outline-none  ">

                    @foreach (jobs() as $job)
                    <option value="{{$job->id}}">{{$job->name}}</option>
                    @endforeach

                    {{--
                    <x-jet-input id="job_title_id" class="block mt-1 w-full" type="text" name="job_title_id"
                        :value="old('job_title_id')" required autofocus autocomplete="job_title_id" /> --}}
                </select>

            </div>

            {{-- SELECCION DE LINEA --}}
            <div class="my-4">
               
                <x-jet-label for="line_id" value="Seleccione su linea asignada" />

                <select name="line_id" for="line_id" id="line_id" placeholder="Linea"
                    autocomplete="type"
                    class="form-control rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full mb-1 mt-1    sm:text-sm     py-2 px-3 border 0 bg-white  focus:outline-none  ">

                    @foreach (lines() as $line)
                    <option value="{{$line->id}}">{{$line->name}}</option> 
                   
                    @endforeach

             
                </select>
             
            </div>



            <div class="mt-4">
                 <x-jet-label>
                        Usuario 
                    </x-jet-label>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>


            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of
                                Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>



        @else
        <div>









            <!-- Add the variant -->
            <!-- variants: {
    extend: {
      translate: ['group-hover'],
    }
  }, -->

            <!-- Soon review at https://moviedate.netlify.app/ -->

            <div>
                <div class='flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden mx-auto justify-center'>
                 

                    <div class="overflow-hidden rounded-xl relative transform hover:-translate-y-2 transition ease-in-out duration-500 shadow-lg hover:shadow-2xl movie-item text-white movie-card"
                        data-movie-id="438631">
                        {{--  <div
                            class="absolute inset-0 z-10 transition duration-300 ease-in-out bg-gradient-to-t from-black via-gray-900 to-transparent">
                        </div>  --}}
                        <div class="relative cursor-pointer group z-10 px-10 pt-10 space-y-6 movie_info" data-lity=""
                            href="">
                            <div class="poster__info align-self-end w-full">
                                <div class="h-32"></div>
                                <div class="space-y-6 detail_info">
                                    {{-- <div class="flex flex-col space-y-2 inner">
                                        <a class="relative flex items-center w-min flex-shrink-0 p-1 text-center text-white bg-red-500 rounded-full group-hover:bg-red-700"
                                            data-unsp-sanitized="clean">

                                            <div
                                                class="absolute transition opacity-0 duration-500 ease-in-out transform group-hover:opacity-100 group-hover:translate-x-16 text-xl font-bold text-white group-hover:pr-2">
                                                Trailer</div>
                                        </a>
                                        <h3 class="text-2xl font-bold text-white" data-unsp-sanitized="clean">Dune</h3>
                                        <div class="mb-0 text-lg text-gray-400">Beyond fear, destiny awaits.</div>
                                    </div> --}}

                                </div>
                               
                                    <div class="flex flex-col overview">
                                       
                                     
                                        <p class="text-xs text-gray-100 mb-6">
                                            No disponible
                                        </p>
                                    </div>
                            </div>
                        </div>
                        <img class="absolute inset-0 transform w-full -translate-y-4"
                            src="{{Storage::url('sys_img/deny.jpg')}}" style="filter: grayscale(0);" />
                        <div class="poster__footer flex flex-row relative pb-10 space-x-4 z-10">
                           
                        </div>
                    </div>

                </div>
            </div>










        </div>
        <div class=" m-2 text-center ">
            <span class=""> Requerir que un administrador le de el acceso</span>
        </div>
        @endif

    </x-jet-authentication-card>
</x-guest-layout>