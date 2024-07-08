<div class="">
    <!-- Content -->
    <div class=" px-2 mt-10 sm:px-8 flex-grow-1 container-p-y">

        <h4 class=" pt-4"><span class="text-xl ">SGM / Detalle de relevamiento </span> </h4>
        <h4 class=" "><span class="text-md ">Detalles de registros de relevamientos</span></h4>


        <h4 class="py-3 mb-4 "><span class="fw-light">
                ID RELEVAMIENTO: <span class="badge rounded-pill bg-label-info"><strong class="text-xl">
                        {{ $count->id }}</strong></span>
        </h4>


        <!-- Content wrapper -->
        <div class="">
            <!-- Content -->

            <div class="">


                <!-- Product List Widget -->

                <div class="card mb-4">
                    <div class="card-widget-separator-wrapper">
                        <div class="card-body card-widget-separator">
                            <div class="row gy-4 gy-sm-1">
                                <div class="col-sm-6 col-lg-3">
                                    <div
                                        class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                        <div>
                                            <p class="mb-2">Total de Registrados</p>





                                            <h4 class="mb-2"></h4>
                                            <p class="mb-0">
                                                <span class="me-2"></span><span
                                                    class="badge rounded-pill bg-label-success"><strong class="text-xl">
                                                        {{ $countDetailsTotal->count() }}</strong></span>
                                            </p>
                                        </div>
                                        <div class="avatar me-sm-4">
                                            <span class="avatar-initial rounded bg-label-secondary">
                                                <i class="mdi mdi-home-outline mdi-24px"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <hr class="d-none d-sm-block d-lg-none me-4" />
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div
                                        class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                        <div>
                                            <p class="mb-2">Registros encontrados</p>
                                            <h4 class="mb-2"></h4>
                                            <p class="mb-0">
                                                <span class="me-2"></span><span
                                                    class="badge rounded-pill bg-label-success"><strong
                                                        class="text-xl">{{ $countDetailsFound->count() }}</strong></span>
                                            </p>
                                        </div>
                                        <div class="avatar me-lg-4">
                                            <span class="avatar-initial rounded bg-label-secondary">
                                                <i class="mdi mdi-laptop mdi-24px"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <hr class="d-none d-sm-block d-lg-none" />
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div
                                        class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                                        <div>
                                            {{-- <p class="mb-2">ID: {{ $purchase->id }}</p> --}}
                                            <h1 class="w-full text-sm  leading-tight">Descripción:<strong>
                                                    {{ $count->name }}</strong>
                                            </h1>
                                            {{-- <h1 class="w-full text-sm  leading-tight">Cod o Nro.Documento:
                                                <strong> {{ $count->ndocument }}</strong>
                                            </h1> --}}




                                            @if ($count->status == 33)
                                                <h1 class="w-full text-sm  leading-tight">Estado:
                                                    <strong>CERRADO</strong>
                                                </h1>
                                            @elseif ($count->status == 4)
                                                <h1 class="w-full text-sm  leading-tight">Estado:
                                                    <strong>ABIERTO</strong>
                                                </h1>
                                            @else
                                                <h1 class="w-full text-sm  leading-tight">Estado:
                                                    <strong>DESCONOCIDO</strong>
                                                </h1>
                                            @endif

                                            <h1 class="w-full text-sm  leading-tight">Realizado por:
                                                <strong>{{ $count->user->name }}</strong>
                                            </h1>
                                            <h1 class="w-full text-sm  leading-tight">

                                                <div class=" flex items-center">
                                                    <div><span class="pr-2">Linea:</span></div>
                                                    <div>
                                                        <strong>{{ $count->line->name }}</strong>
                                                    </div>
                                                    <div>


                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"
                                                            width="32 " height="32" x="0" y="0"
                                                            viewBox="0 0 512.001 512.001"
                                                            style="enable-background:new 0 0 512 512"
                                                            xml:space="preserve"
                                                            class="fill-current text-{{ $count->line->color }}">
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


                                                </div>
                                            </h1>
                                            <h1 class="w-full text-sm  leading-tight">Almacén: <strong>
                                                    {{ $count->warehouse->name }}</strong> </h1>
                                            <h1 class="w-full text-sm  leading-tight">Fecha de ingreso:
                                                <strong>{{ $count->created_at->format('d-m-Y') }}</strong>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="avatar me-sm-4">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="mdi mdi-wallet-giftcard mdi-24px"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>








            </div>





            <!-- Hoverable Table rows -->
            <div class="card">






                <h5 class="card-header"></h5>


                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card-header flex justify-between border-top rounded-0 flex-wrap py-md-0">
                        <div class="me-5 ms-n2">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>




                                    <div class="input-group input-group-floating">
                                        <span class="input-group-text"><i class='fas fa-search'></i></span>
                                        <div class="form-floating">
                                            <input wire:model="search" type="text" class="form-control"
                                                id="basic-addon21" placeholder="" aria-label="Username"
                                                aria-describedby="basic-addon21" />
                                            <label for="basic-addon21">Que estas buscando...?</label>
                                        </div>
                                        <span class="form-floating-focused"></span>
                                    </div>


                                </label></div>
                        </div>
                        <div class="d-flex justify-content-start justify-content-md-end align-items-baseline">
                            <div
                                class="dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center mb-3 mb-sm-0 gap-3 pt-0">
                                <div class="dataTables_length mt-0 mt-md-3" id="DataTables_Table_0_length">
                                    <label class="mb-3"><select name="DataTables_Table_0_length "
                                            aria-controls="DataTables_Table_0" class="form-select">
                                            <option value="7">7</option>
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
                                                class="d-none d-sm-inline-block">Export </span></span><span
                                            class="dt-down-arrow">▼</span></button>





                                    <button class="dt-button add-new btn btn-primary ms-n1" tabindex="0"
                                        aria-controls="DataTables_Table_0" type="button"><span><i
                                                class="mdi mdi-plus me-0 me-sm-1"></i><span
                                                class="d-none d-sm-inline-block">
                                                {{-- <a class="dropdown-item" href="{{ route('admin.purchases.create') }}">
                                                    Add
                                                    Product
                                                </a> --}}


                                            </span></span>
                                    </button>



                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="table-responsive form-control">



                        @if ($countDetails->count())


                            <table class="table table-hover">
                                <thead class="sticky top-0 z-10 ">
                                    <tr>
                                        <th> Nro</th>
                                        <th> Nombre de articulo</th>
                                        <th> ID's</th>
                                        <th> Almacén</th>
                                        <th> Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">

                                    @foreach ($countDetails as $key => $item)
                                        <tr>
                                            <td>


                                                <p class=" whitespace-no-wrap">
                                                    {{ $key + 1 }}</p>


                                            </td>
                                            <td>



                                                <div class="flex  items-center">
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
                                                    <div class="  ml-3 text-xs ">
                                                        <p class="  whitespace-no-wrap">
                                                            {{ $item->article->name }}
                                                        </p>
                                                    </div>
                                                </div>


                                            </td>
                                            <td class=" py-2 text-sm">






                                                @if (!empty($item->article->id_dopp))
                                                    <p class=" "><i class="text-blue-500  fas fa-key"></i>
                                                        {{ $item->article->id_dopp }}</p>
                                                @endif
                                                @if (!empty($item->article->id_eetc))
                                                    <p class=" "><i class="text-yellow-400  fas fa-key"></i>
                                                        {{ $item->article->id_eetc }}</p>
                                                @endif
                                                @if (!empty($item->article->id_zona))
                                                    <p class=" "><i class="text-gray-400  fas fa-key"></i>
                                                        {{ $item->article->id_zona }}</p>
                                                @endif

                                            </td>


                                            <td class="text-xs">
                                                {{-- {{ $item->warehouse->station->line->acronym }}
                                                {{ $item->warehouse->station->name }} - --}}
                                                {{ $item->warehouse->name }}
                                            </td>
                                            <td class="text-xs">
                                                {{ $item->quantity }}
                                            </td>


                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
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
                        @else
                            <div class="form-control px-6 py-4">
                                No hay ningún registro coincidente
                            </div>
                        @endif

                        <!-- Paginación de la tabla -->

                        {{-- @if ($countDetails->hasPages())
                            <div class=" form-control px-6 py-4">
                                <span class="form-control  ">{{ $countDetails->links() }}</span>
                            </div>
                        @endif --}}













                        <!--/ Hoverable Table rows -->











                    </div>
                    <!-- / Content -->









                </div>
                <!-- / Content -->


                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>




</div>







</div>
