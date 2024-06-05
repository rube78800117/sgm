<div>
    {{-- <x-slot name="header">

     

    </x-slot> --}}
   <div class=" container py-6 flex items-center">
            <h2 class="font-semibold text-sm text-gray-600 leading-tight">
                USUARIOS REGISTRADOS
            </h2>
            {{--  <x-button-enlace class="ml-auto" href="{{route('admin.users.create')}}">
                Nuevo Usuario
            </x-button-enlace>  --}}
        </div>

    <div class="container py-2">
 
        <!-- component -->
        <x-table-responsive>

            <div class="px-6 py-4  ">
                <x-jet-label value="Búsqueda por Nombre ó ID" />
                <x-jet-input class="w-3/4" wire:model="search" type="text" placeholder="¿Que estas buscando...?">
                    </x-jet>

                
            </div>
            @if ($users->count())
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                       Id Usuario
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nombre Usuario
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Correo electrónico
                        </th>
                        <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Línea asignada
                        </th>
                        
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider ">
                            Rol
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Asignar Admin
                        </th>
                        {{--  <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Stock Mínimo
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Medida Por
                        </th>  --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)

                
                    <tr wire:key="{{$user->email}}">

                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$user->id}}
                            </p>
                    </td>

                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                
                            
                                <div class="flex-shrink-0 w-12 h-12">
                                @if ($user->profile_photo_path != null)
                                
                                <!--<img class="w-full h-full rounded-full object-cover" src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="">-->
                             
                                
                                   <img class="w-full h-full rounded-full object-cover"
                                 src="{{ asset('storage/' . $user->profile_photo_path) }} "
                                alt="" />
                                
                                
                                <!--<img class="w-full h-full rounded-full object-cover"-->
                                <!--src="{{Storage::url($user->profile_photo_path)}}"-->
                                <!--alt="" />-->
                                @else
                                
                                <!--src="{{Storage::url('articles/def.jpg')}}"-->
                                <img class="w-full h-full rounded-full object-cover"
                               
                                src="{{ asset('storage/'.'articles/def.jpg') }}"
                                alt="" />
                                @endif
                                </div>
                                <div class="ml-3">
                                 <p class="text-gray-900 whitespace-no-wrap">
                                        {{$user->name}}
                                    </p>
                                </div>
                            </div>
                        </td>


   


                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$user->email}}
                            </p>
                        </td>
                      
                        <td class="px-5 py-2 border-b border-white bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                    
                             @if ($user->line)

                             {{-- <span class="inline-flex bg-{{ $user->line->color}} text-white rounded-full h-6 px-3 justify-center items-center">{{ $user->line->name }}</span> --}}
                             <span class="opacity-80 inline-flex bg-{{ $user->line->color }} text-white rounded-full h-6 px-3 justify-center items-center" style="width: 160px;">
                                {{ $user->line->name }}
                            </span>
                             {{-- <div class="opacity-60 rounded-full bg-gradient-to-r from-{{ $user->line->color}} from-gray-100  to-gray-100 "> 
                                .
                                </div>
                                <div>
                                   <p class="text-right ">{{ $user->line->name }}</p> 
                                </div> --}}
                            
                            @else
                                No asignado
                            @endif
                           

                            </p>
                        </td>

                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap text-center ">
                               @if ( count($user->roles))
                               <span class="inline-flex bg-green-500 text-white rounded-full h-6 px-3 justify-center items-center">Administrador</span> 
                               @else
                                No asignado
                               @endif
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                           <label for="">
                               <input {{count($user->roles) ? 'checked':''}} value='1' type="radio" name='{{$user->email}}' wire:change="assignRole({{$user->id}}, $event.target.value)">
                               Si
                           </label>
                           <label class="ml-4">
                            <input {{count($user->roles) ? '':'checked'}} value='2' type="radio" name='{{$user->email}}' wire:change="assignRole({{$user->id}}, $event.target.value)">
                            No
                        </label>
                        </td>


                        {{--
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                <span class="relative">Activo</span>
                            </span>
                        </td> --}}



                    


                        {{--  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <a href="{{route('admin.users.edit', $user)}}"
                                class="text-blue-600 hover:text-blue-700 ">
                                <p class="text-xl flex justify-center">
                                    <i class="fas fa-edit"></i>
                                </p>
                                <p class="text-md flex justify-center"> Editar</p>
                            </a>

                        </td>  --}}







                    </tr>
                    @endforeach


                </tbody>
            </table>
            @else
            <div class="px-6 py-4">
                No hay ningún registro coincidente

            </div>
            @endif



            @if ($users->hasPages())
            <div class="px-6 py-4">
                {{$users->links()}}

            </div>
            @endif

        </x-table-responsive>


    </div>






</div>