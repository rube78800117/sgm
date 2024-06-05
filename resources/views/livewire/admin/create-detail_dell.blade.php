<div>


    <div class=" bg-gray-100 shadow-md">

dfsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd

        <!-- component -->
        <x-table-responsive>

            <div class="px-6 py-2  ">
                <x-jet-label value="Búsqueda por Nombre, Descripcion ó ID's" />
                <x-jet-input class="w-3/4" wire:model="search" type="text" placeholder="¿Que estas buscando...?">
                    </x-jet>
            </div>




            @if ($purchases->count())
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            ID´s
                        </th>
                        <th
                            class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nombre
                        </th>

                        <th
                            class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            descripcion
                        </th>
                        <th
                            class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Acciones
                        </th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchases as $purchase)
                    <tr>


                        </td>
                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$purchase->id_dopp}} / {{$purchase->id_eetc}} /{{$purchase->id_zona}}
                                {{--
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$purchase->id_eetc}}
                            </p>
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$purchase->id_zona}}
                            </p> --}}
                        </td>


                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$purchase->name}}
                            </p>
                        </td>

                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$purchase->description}}
                            </p>
                        </td>





                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                            <a href="{{route('admin.create-list-detail.choose', $purchase->id)}}"
                                class="text-green-600 hover:text-green-200 ">
                                <p class="text-xl flex justify-center">
                                    <i class="fas fa-plus-circle"></i>
                                </p>
                                <p class="text-md flex justify-center"> Agxxxxxxxxxxxxxxxxxxxxregar</p>
                            </a>

                        </td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
            @else
            <div class="px-6 py-4">
                No hay ningún registro coincidente

            </div>
            @endif



            @if ($purchases->hasPages())
            <div class="px-6 py-4">
                {{$purchases->links()}}

            </div>
            @endif

        </x-table-responsive>
        <!--End component -->


    </div>

</div>