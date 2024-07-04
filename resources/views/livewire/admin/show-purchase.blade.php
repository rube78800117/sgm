<div>


    <div class="container  shadow-md  ">





        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">SGM /</span>Ingresos de Stok<p class="mb-2">
                        ID de Ingreso: {{ $purchase->id }}</p>
                </h4>

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
                                                    class="badge rounded-pill bg-label-success"><strong class="text-xl"> {{ $purchaseTotal->count() }}</strong></span>
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
                                                    class="badge rounded-pill bg-label-success"><strong class="text-xl">{{ $purchaseFound->count() }}</strong></span>
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
                                            <h1 class="w-full text-sm  leading-tight">Descripció<stron>{{ $purchase->name }}</stron>  </h1>
                                            <h1 class="w-full text-sm  leading-tight">Cod o Nro.Documento: <strong> {{ $purchase->ndocument }}</strong></h1>
                                            <h1 class="w-full text-sm  leading-tight">Realizado por:
                                               <strong>{{ $purchase->user->name }}</strong> </h1>
                                             <h1 class="w-full text-sm  leading-tight">Linea: <strong>{{ $purchase->line->name }}</strong>
                                                </h2>
                                                <h1 class="w-full text-sm  leading-tight">Fecha de ingreso:
                                                   <strong>{{ $purchase->created_at->format('d-m-Y') }}</strong> </h1>
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
                                                <a class="dropdown-item" href="{{ route('admin.purchases.create') }}">
                                                    Add
                                                    Product
                                                </a>


                                            </span></span>
                                    </button>



                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="table-responsive form-control">



                        @if ($purchaseDetails->count())


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

                                    @foreach ($purchaseDetails as $key => $item)
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

                        @if ($purchaseDetails->hasPages())
                            <div class=" form-control px-6 py-4">
                                <span class="form-control  ">{{ $purchaseDetails->links() }}</span>
                            </div>
                        @endif













                        <!--/ Hoverable Table rows -->











                    </div>
                    <!-- / Content -->









                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div
                            class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                            {{-- <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span>
                                by
                                <a href="https://pixinvent.com" target="_blank"
                                    class="footer-link fw-medium">Pixinvent</a>
                            </div>
                            <div class="d-none d-lg-inline-block">
                                <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                                    target="_blank">License</a>
                                <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                                    class="footer-link me-4">More Themes</a>

                                <a href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/"
                                    target="_blank" class="footer-link me-4">Documentation</a>

                                <a href="https://pixinvent.ticksy.com/" target="_blank"
                                    class="footer-link d-none d-sm-inline-block">Support</a>
                            </div> --}}
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Content wrapper -->










</div>

</div>
