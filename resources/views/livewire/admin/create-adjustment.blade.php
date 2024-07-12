<div>
    {{-- Success is as dangerous as failure. --}}

    <div class="content-wrapper">


        <!-- Content -->
        <div class=" px-2  sm:px-8 flex-grow-1 container-p-y">




            <h4 class=" pt-4"><span class="text-xl ">SGM / Ajustes de stock</span> </h4>
            <h4 class="mb-4 "><span class="text-md ">Crea nuevo ajuste de STOCK de materiales</span></h4>


            <div class="grid sm:grid-cols-12 mb-1 gap-4 grid-cols-4">



                <div class="col-span-12 sm:col-span-7 md:col-span-12     rounded-xl ">

                    <!-- Product List Widget -->

                    <div class="row  g-4">

                        <div class="col-lg-5">
                            <div class="row  mb-4">


                                <div class="col-sm-12  col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="me-1">


                                                    <span class=" sm:block ">Datos de la ubicación: </span>

                                                    <div class="grid grid-cols-2 sm:grid-cols-4  ">

                                                        <div class="col-span-2 sm:col-span-1 ">




                                                            <div class="form-floating mb-2">
                                                                <select wire:model="lineselect"
                                                                    placeholder="Tipo Documento" name="lineselect"
                                                                    class="form-select" id="lineselect"
                                                                    aria-label="Floating label select example">
                                                                    @if (!is_null($selectedLine) && !is_null($selectedLine->id))
                                                                        <option value="{{ $selectedLine->id }}"
                                                                            selected>
                                                                            {{ $selectedLine->name }}
                                                                        </option>
                                                                    @endif


                                                                    @foreach ($lines as $line)
                                                                        <option value="{{ $line->id }}">
                                                                            {{ $line->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>

                                                                <label for="floatingSelectFilled">Seleccione
                                                                    Linea</label>
                                                                <span class="form-floating-focused"></span>
                                                                <x-jet-input-error for="lineselect" />

                                                                @foreach ($this->adjustments as $item)
                                                                    {{ $item }}
                                                                @endforeach
                                                            </div>







                                                        </div>

                                                        <div
                                                            class="flex flex-col items-center justify-center w-full space-y-2">
                                                            @if (!empty($lineSelected))
                                                                <div class="">
                                                                    <p class=" font-bold ">{{ $lineSelected->name }}</p>
                                                                </div>

                                                                <div class="mr-2">


                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xmlns:svgjs="http://svgjs.com/svgjs"
                                                                        version="1.1" width="64 " height="64"
                                                                        x="0" y="0" viewBox="0 0 512.001 512.001"
                                                                        style="enable-background:new 0 0 512 512"
                                                                        xml:space="preserve" {{-- class="fill-current text-{{ $item->options->line_color }}"> --}}
                                                                        class="fill-current text-{{ $lineSelected->color }}">
                                                                        <g>
                                                                            <g xmlns="http://www.w3.org/2000/svg">
                                                                                <g>
                                                                                    <path fill="currentcolor"
                                                                                        d="M406.543,188.63c-3.085-3.35-7.428-5.255-11.981-5.255H186.954c-4.554,0-8.899,1.905-11.982,5.255    c-37.133,40.315-58.429,98.289-58.429,159.059c0,57.446,19.382,116.669,58.429,159.059c3.085,3.349,7.43,5.254,11.982,5.254    h207.607c4.553,0,8.898-1.905,11.982-5.254c38.929-42.261,58.43-101.378,58.43-159.059    C464.973,286.92,443.677,228.944,406.543,188.63z M274.468,334.16H149.529c2.67-45.034,18.595-87.191,44.775-118.203h80.164    V334.16z M307.049,334.16V215.957h80.163c26.182,31.012,42.106,73.169,44.776,118.203H307.049z"
                                                                                        fill="#024820"
                                                                                        data-original="#000000"
                                                                                        style="" class="" />
                                                                                </g>
                                                                            </g>
                                                                            <g xmlns="http://www.w3.org/2000/svg">
                                                                                <g>
                                                                                    <path fill="currentcolor"
                                                                                        d="M495.299,13.917c-1.313-8.901-9.581-15.064-18.494-13.737L256.607,32.678c-8.942-19.27-28.464-32.673-51.068-32.673    c-28.368,0-51.888,21.103-55.717,48.433L30.439,66.056c-8.901,1.313-15.051,9.593-13.737,18.494    c1.195,8.094,8.151,13.914,16.095,13.914c0.792,0,1.592-0.057,2.399-0.178l119.612-17.654    c5.084,10.548,13.367,19.271,23.577,24.919v43.554h87.866l-33.563-23.473v-20.078c14.937-8.264,25.743-23.116,28.457-40.613    l220.416-32.53C490.463,31.098,496.613,22.818,495.299,13.917z M205.537,79.975c-13.065,0-23.694-10.629-23.694-23.694    s10.629-23.694,23.694-23.694c13.065,0,23.694,10.629,23.694,23.694C229.233,69.346,218.603,79.975,205.537,79.975z"
                                                                                        fill="#024820"
                                                                                        data-original="#000000"
                                                                                        style="" class="" />
                                                                                </g>
                                                                            </g>

                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            @else
                                                                <span>Seleccione una linea</span>
                                                            @endif


                                                        </div>

                                                        <div class="col-span-2 md:col-span-2 ">
                                                            <p class="mb-2 font-bold">Datos de ubicacion física para el
                                                                ingreso
                                                            </p>


                                                            <div class="form-floating mb-2">
                                                                <select wire:model="stationselect"
                                                                    placeholder="Tipo Documento" name="stationselect"
                                                                    class="form-select" id="stationselect"
                                                                    aria-label="Floating label select example">
                                                                    <option value="" selected>Seleccione una
                                                                        Estación
                                                                    </option>
                                                                    @forelse($stations ?? [] as $item)
                                                                        <option value="{{ $item->id }}">
                                                                            {{ $item->name }}
                                                                        </option>
                                                                    @empty
                                                                        <option value="">Seleccione una Estación
                                                                        </option>
                                                                    @endforelse
                                                                </select>
                                                                <label for="floatingSelectFilled">Estación</label>
                                                                <span class="form-floating-focused"></span>
                                                                <x-jet-input-error for="stationselect" />
                                                            </div>

                                                            <div class="form-floating mb-2">
                                                                <select wire:model="warehouseselect"
                                                                    placeholder="Seleccione un almacén"
                                                                    name="warehouseselect" class="form-select"
                                                                    id="warehouseselect"
                                                                    aria-label="Floating label select example">

                                                                    <option value="" selected>Seleccione un
                                                                        Almacén
                                                                    </option>
                                                                    @forelse($warehouses ?? [] as $item)
                                                                        <option value="{{ $item->id }}">
                                                                            {{ $item->name }}
                                                                        </option>
                                                                    @empty
                                                                        <option value="">Seleccione un Almacén
                                                                        </option>
                                                                    @endforelse
                                                                </select>
                                                                <label for="floatingSelectFilled">Ubicación del
                                                                    almacén</label>
                                                                <span class="form-floating-focused"></span>
                                                                <x-jet-input-error for="warehouseselect" />
                                                            </div>
                                                            <div>


                                                            </div>




                                                        </div>


                                                    </div>

                                                    {{-- <p class="d-flex align-items-center">
                                                        <i class="mdi mdi-warehouse-outline me-2"></i>
                                                    </p>
                                                    <div class="progress rounded-pill " style="height: 8px">
                                                        <div class="progress-bar w-75" role="progressbar"
                                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
 --}}



                                                    <p class="mb-0"></p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card ">
                                <div class="card-body text-center">
                                    <h5 class="text-xl mb-1"> <strong> {{ $this->selectLineName }}</strong></h5>
                                    <p class=""> {{ $this->selectLineName }} </p>
                                    <div class="d-flex flex-column flex-sm-row justify-content-between text-center  ">
                                        <div class="d-flex flex-column align-items-center">
                                            <span
                                                class="p-3 border-1 border-primary rounded-circle border-dashed mb-0 w-px-75 h-px-75">

                                                @if (!empty($selectLineColor))
                                                    <div class="mr-2">


                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"
                                                            width="36 " height="36" x="0" y="0"
                                                            viewBox="0 0 512.001 512.001"
                                                            style="enable-background:new 0 0 512 512"
                                                            xml:space="preserve" {{-- class="fill-current text-{{ $item->options->line_color }}"> --}}
                                                            class="fill-current text-{{ $selectLineColor }}">
                                                            <g>
                                                                <g xmlns="http://www.w3.org/2000/svg">
                                                                    <g>
                                                                        <path fill="currentcolor"
                                                                            d="M406.543,188.63c-3.085-3.35-7.428-5.255-11.981-5.255H186.954c-4.554,0-8.899,1.905-11.982,5.255    c-37.133,40.315-58.429,98.289-58.429,159.059c0,57.446,19.382,116.669,58.429,159.059c3.085,3.349,7.43,5.254,11.982,5.254    h207.607c4.553,0,8.898-1.905,11.982-5.254c38.929-42.261,58.43-101.378,58.43-159.059    C464.973,286.92,443.677,228.944,406.543,188.63z M274.468,334.16H149.529c2.67-45.034,18.595-87.191,44.775-118.203h80.164    V334.16z M307.049,334.16V215.957h80.163c26.182,31.012,42.106,73.169,44.776,118.203H307.049z"
                                                                            fill="#024820" data-original="#000000"
                                                                            style="" class="" />
                                                                    </g>
                                                                </g>
                                                                <g xmlns="http://www.w3.org/2000/svg">
                                                                    <g>
                                                                        <path fill="currentcolor"
                                                                            d="M495.299,13.917c-1.313-8.901-9.581-15.064-18.494-13.737L256.607,32.678c-8.942-19.27-28.464-32.673-51.068-32.673    c-28.368,0-51.888,21.103-55.717,48.433L30.439,66.056c-8.901,1.313-15.051,9.593-13.737,18.494    c1.195,8.094,8.151,13.914,16.095,13.914c0.792,0,1.592-0.057,2.399-0.178l119.612-17.654    c5.084,10.548,13.367,19.271,23.577,24.919v43.554h87.866l-33.563-23.473v-20.078c14.937-8.264,25.743-23.116,28.457-40.613    l220.416-32.53C490.463,31.098,496.613,22.818,495.299,13.917z M205.537,79.975c-13.065,0-23.694-10.629-23.694-23.694    s10.629-23.694,23.694-23.694c13.065,0,23.694,10.629,23.694,23.694C229.233,69.346,218.603,79.975,205.537,79.975z"
                                                                            fill="#024820" data-original="#000000"
                                                                            style="" class="" />
                                                                    </g>
                                                                </g>

                                                            </g>
                                                        </svg>
                                                    </div>
                                                @endif
                                            </span>



                                            </span>
                                            <p class=" w-75"> <strong>{{ $this->selectWarehouseName }}</strong>
                                            </p>
                                            <h5 class="text-primary mb-0"></h5>
                                        </div>
                                        <div class="d-flex flex-column align-items-center">


                                            <div class="d-flex mt-4 justify-content-between">
                                                <div class="me-1">
                                                    <p class="">Total de Registrados</p>
                                                    <div class="d-flex align-items-center">
                                                        <h4 class="mb-2 me-1 display-6">

                                                            @if (!is_null($this->resultTotal))
                                                                {{ $this->resultTotal->count() }}
                                                            @else
                                                            @endif


                                                        </h4>
                                                        <p class="text-success mb-2">(100%)</p>
                                                    </div>
                                                    <p class="mb-0"></p>
                                                </div>
                                                <div class="avatar">
                                                    <div class="avatar-initial bg-label-success rounded">
                                                        <div class="mdi mdi-store mdi-24px"></div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="d-flex flex-column align-items-center">



                                            <div class="d-flex mt-4 justify-content-between">
                                                <div class="me-1">
                                                    <p class="text-heading mb-2">Artículos encontrados</p>
                                                    <div class="d-flex align-items-center">
                                                        <h4 class="mb-2 me-1 display-6">{{ $resultFound }}</h4>
                                                        <p class="text-success mb-2">
                                                            @if (!is_null($this->resultTotal))
                                                                ({{ number_format(($resultFound / $this->resultTotal->count()) * 100, 1) }}%)
                                                            @endif

                                                        </p>
                                                    </div>
                                                    <p class="mb-0"></p>
                                                </div>
                                                <div class="avatar">
                                                    <div class="avatar-initial bg-label-warning rounded">
                                                        <div class="mdi mdi-store-search mdi-24px"></div>
                                                    </div>
                                                </div>
                                            </div>









                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>




                </div>



                {{-- %%%%%%%%%%%%%%%%%%%% STAR LISTA DE ARTICULOS DETALLES %%%%%%%%%%%%%%%%%%%% --}}
                <div class="form-control col-span-12 sm:col-span-12 md:col-span-12   rounded-xl shadow-2xl ">
                    <!-- component -->
                    <div class="">


                        {{-- <hr>
                        <x-button-enlace wire:click="stockWarehouse()" color="blue" class="mt-4 mx-2"> Mostrar
                            stock
                            actual de almacén seleccionado</x-button-enlace> --}}
                        <!-- Hoverable Table rows -->
                        {{-- <x-button-enlace  --}}
                        <div class="card">




                            <h5 class="card-header"></h5>


                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="card-header flex justify-between border-top rounded-0 flex-wrap py-md-0">

                                    <div
                                        class="d-flex justify-content-start justify-content-md-end align-items-baseline">
                                        <div
                                            class="dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center mb-3 mb-sm-0 gap-3 pt-0">
                                            <div class="me-5 ms-n2">
                                                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>




                                                        <div class="input-group input-group-floating">
                                                            <span class="input-group-text"><i
                                                                    class='fas fa-search'></i></span>
                                                            <div class="form-floating">
                                                                <input wire:model="search" type="text"
                                                                    class="form-control" id="basic-addon21"
                                                                    placeholder="" aria-label="Username"
                                                                    aria-describedby="basic-addon21" />
                                                                <label for="basic-addon21">¿Que estas
                                                                    buscando?...</label>
                                                            </div>
                                                            <span class="form-floating-focused"></span>
                                                        </div>


                                                    </label></div>
                                            </div>
                                            <div class="dataTables_length mt-0 mt-md-3"
                                                id="DataTables_Table_0_length">
                                                <label class="mb-3"><select name="DataTables_Table_0_length"
                                                        aria-controls="DataTables_Table_0" class="form-select"
                                                        wire:model="nItems">
                                                        <option value="7" selected>7</option>
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                        <option value="70">70</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </label>
                                            </div>
                                            <div class="dt-buttons"> <button
                                                    class="dt-button buttons-collection dropdown-toggle btn btn-label-secondary me-3"
                                                    tabindex="0" aria-controls="DataTables_Table_0" type="button"
                                                    aria-haspopup="dialog" aria-expanded="false"><span><i
                                                            class="mdi mdi-export-variant me-1"></i><span
                                                            class="d-none d-sm-inline-block">Export
                                                        </span></span><span class="dt-down-arrow">▼</span></button>





                                                {{-- <button class="dt-button add-new btn btn-primary ms-n1" tabindex="0"
                                        aria-controls="DataTables_Table_0" type="button"><span><i
                                                class="mdi mdi-plus me-0 me-sm-1"></i><span
                                                class="d-none d-sm-inline-block">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.purchases.create') }}">
                                                    Add
                                                    Product
                                                </a>
    
    
                                            </span></span>
                                    </button> --}}



                                            </div>
                                        </div>
                                    </div>

                                </div>



                                <div class="table-responsive form-control">



                                    @if ($result && $result->count() > 0)


                                        <table class="table table-hover">
                                            <thead class="sticky top-0 z-10 ">
                                                <tr>
                                                    <th> Nro</th>
                                                    <th> Nombre de articulo</th>
                                                    <th> ID's</th>
                                                    <th> Cantidad</th>
                                                    <th>Ajsute</th>
                                                    <th>Total</th>
                                                    <th> Acción</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">

                                                @foreach ($result as $key => $item)
                                                    <tr class="text-left " wire:key="{{ $key }}">

                                                        <td class="w-12">


                                                            <p class=" whitespace-no-wrap">
                                                                {{ $key + 1 }}</p>


                                                        </td>
                                                        <td>



                                                            <div class="flex  items-center w-64">
                                                                <div class="flex-shrink-0 w-12 h-12">
                                                                    @if ($item->article->image != null)
                                                                        <img class="w-full h-full rounded-full object-cover"
                                                                            src="{{ asset('storage/' . $item->article->image->url) }}"
                                                                            alt="" />
                                                                    @else
                                                                        <img class="w-full h-full rounded-full object-cover"
                                                                            src="{{ asset('storage/' . 'articles/def.jpg') }}"
                                                                            alt="" />
                                                                    @endif
                                                                </div>
                                                                <div class=" w-full ml-3  text-xs">
                                                                    <p class="  ">
                                                                        {{ $item->article->name }}
                                                                    </p>
                                                                </div>
                                                            </div>


                                                        </td>
                                                        <td class="w-36 py-2 text-sm">




                                                            @if (!empty($item->article->id_dopp))
                                                                <p class=" "><i
                                                                        class="text-blue-500  fas fa-key"></i>
                                                                    {{ $item->article->id_dopp }}</p>
                                                            @endif
                                                            @if (!empty($item->article->id_eetc))
                                                                <p class=" "><i
                                                                        class="text-yellow-400  fas fa-key"></i>
                                                                    {{ $item->article->id_eetc }}</p>
                                                            @endif
                                                            @if (!empty($item->article->id_zona))
                                                                <p class=" "><i
                                                                        class="text-gray-400  fas fa-key"></i>
                                                                    {{ $item->article->id_zona }}</p>
                                                            @endif

                                                        </td>


                                                        <td class="text-sm">
                                                            {{ $item['quantity'] }}
                                                        </td>
                                                        <td class="w-20 text-xs">

                                                            <div class="form-floating mb-2">
                                                                <input wire:model="adjustments.{{ $item['id'] }}"
                                                                    type="number" class="form-control rounded-md"
                                                                    name="adjustment" id="floatingcod_document"
                                                                    placeholder="Cantidad de ajuste"
                                                                    aria-describedby="floatingcod_documentHelp" />
                                                                <label for="floatingcod_document">Ajuste</label>
                                                                <span class="form-floating-focused"></span>
                                                                <x-jet-input-error for="adjustment" />
                                                            </div>



                                                        <td>
                                                            <label>{{ $this->updatedQuantityTotal($item['quantity'], $adjustments[$item['id']] ?? 0) }}</label>

                                                        </td>


                                                        <td>







                                                            <div class="dropdown">

                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </button>
                                                                <div class="dropdown-menu">



                                                                    <div wire:click="removeIttem({{ $key }})"
                                                                        class=" text-red-400 hover:text-red-600 cursor-pointer">
                                                                        <p class="text-xl flex justify-center">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </p>
                                                                        <p
                                                                            class=" text-red-400 hover:text-red-600 text-md flex justify-center">
                                                                            Borrar
                                                                        </p>
                                                                    </div>
                                                                    {{-- <a class="dropdown-item"
                                            href="{{ route('admin.articles.edit', $item->id) }}"><i
                                                class="mdi mdi-pencil-outline me-1"></i>
                                            Edit</a> --}}

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>







                                        </table>

                                        @if ($result->hasPages())
                                            <div class=" form-control px-6 py-4">
                                                <span class="form-control  ">{{ $result->links() }}</span>
                                            </div>
                                        @endif
                                    @else
                                        <div class="form-control px-6 py-4">
                                            No hay ningún registro agregado, porfavor agregue almenos 1 registro
                                            para un nuevo ingreso
                                        </div>
                                        <x-jet-input-error for="selectedArticles" />



                                    @endif

                                    <!-- Paginación de la tabla -->

                                    {{-- @if ($purchaseDetails->hasPages())
                            <div class=" form-control px-6 py-4">
                                <span class="form-control  ">{{ $purchaseDetails->links() }}</span>
                            </div>
                        @endif --}}













                                    <!--/ Hoverable Table rows -->











                                </div>

                                <!-- / Content -->

                                <div class="d-flex justify-content-end mt-4 align-items-sm-center">


                                    {{-- <button wire:click="clearSelectedArticles" class="dt-button add-new btn btn-danger ms-n1" tabindex="0"
                               aria-controls="DataTables_Table_0" type="button"><i class="px-2 fas fa-trash"></i><span
                                       class="d-none d-sm-inline-block">

                                       Eliminar lista

                                   </span></span>
                           </button>
 --}}



                                    <div>
                                        <!-- Botón para eliminar todo el array de la sesión con confirmación -->
                                        {{-- <button wire:click="confirmClear">Eliminar Todo</button> --}}


                                        <!-- Mostrar el mensaje de confirmación si $confirmingClear es true -->
                                        @if ($confirmingClear)
                                            <div class="px-4">
                                                ¿Estás seguro de que deseas eliminar todos los artículos?
                                                <button wire:click="clearAdjustments">Sí, eliminar</button>
                                                <button wire:click="cancelClear">Cancelar</button>
                                            </div>
                                        @endif



                                    </div>
                                    <button wire:click="confirmClear" class="dt-button add-new btn btn-danger ms-n1"
                                        tabindex="0" aria-controls="DataTables_Table_0" type="button"><i
                                            class="px-2 fas fa-trash"></i><span class="d-none d-sm-inline-block">

                                            Eliminar lista

                                        </span></span>
                                    </button>

                                </div>


                            </div>
                            <!-- / Content -->



                            <!-- Content wrapper -->












                            <!--End content -->
                        </div>
                    </div>
                    {{-- %%%%%%%%%%%%%%%%%%%% END LISTA DE ARTICULOS DETALLES %%%%%%%%%%%%%%%%%%%% --}}


                    <div class=" justify-end inline-block sm:mr-2 sm:m-2">
                        <button wire:click="storeAdjustments" type="button"
                            class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg flex items-center">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                            </svg>
                            GUARDAR LISTA Y ACTUALIZAR STOCK
                        </button><x-jet-input-error for="descriptionCount" />
                    </div>

                </div>
            </div>





            <div>



                @push('script')
                    @push('script')
                        <script>
                            function resetStationSelect() {
                                var selectIds = ['stationselect', 'warehouseselect', 'sectorselect', 'locationselect'];
                                selectIds.forEach(function(id) {
                                    var selectElement = document.getElementById(id);
                                    if (selectElement) {
                                        selectElement.value = ""; // Restablece el valor del select a vacío
                                    }
                                });
                            }
                        </script>
                    @endpush
                @endpush




            </div>
        </div>




































    </div>


</div>
