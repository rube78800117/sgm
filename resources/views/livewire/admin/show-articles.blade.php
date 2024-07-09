<div class="">
    <!-- INDEX DE ARTICULOS  Layout wrapper         I N D E X                   I N D E X   -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class=" px-2 sm:mt-10 sm:px-8 flex-grow-1 container-p-y">

                    <h4 class=" pt-4"><span class="text-xl ">SGM / Materiales </span> </h4>
                    <h4 class="mb-4 "><span class="text-md ">Listado de materiales</span></h4>



                    <div class="row g-4 mb-4">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="me-1">
                                            <p class="mb-2">Total de Registrados</p>
                                            <div class="d-flex align-items-center">
                                                <h4 class="mb-2 me-1 display-6">{{ $articlesTotal->count() }}</h4>
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
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="me-1">
                                            <p class="text-heading mb-2">Artículos encontrados</p>
                                            <div class="d-flex align-items-center">
                                                <h4 class="mb-2 me-1 display-6">{{ $articlesFound->count() }}</h4>
                                                <p class="text-success mb-2">
                                                    ({{ number_format(($articlesFound->count() / $articlesTotal->count()) * 100, 1) }}%)
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


                                                    <input wire:model="search"
                                                        placeholder="Que estas buscando?..." type="text"
                                                        class="form-control rounded-lg" id="search"
                                                        aria-describedby="floatingInputFilledHelp" />
                                           
                                                    <label for="floatingInputFilled">Busqueda por ID´s, nombre o descripción</label>
                                                    <span class="form-floating-focused"></span>











                                                </div>
                                             
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
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.articles.create') }}">
                                                            Add Article
                                                        </a>


                                                    </span></span>
                                            </button>



                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="table-responsive form-control">



                                @if ($articles->count())


                                    <table class="table table-hover">
                                        <thead class="sticky top-0 z-10 ">
                                            <tr>
                                                <th> Nombre Artículo</th>
                                                <th>Id's</th>
                                                <th>Unid.Medida</th>
                                                <th>Categoria</th>
                                                <th>Sub categoría</th>
                                                <th class="">Stock Min</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">

                                            @foreach ($articles as $article)
                                                <tr>
                                                    <td class="w-96  ">

                                                        <div class="flex  items-center">
                                                            <div class="flex-shrink-0 w-12 h-12">
                                                                @if ($article->image != null)
                                                                    <img class="w-full h-full rounded-full object-cover"
                                                                        src="{{ asset('storage/' . $article->image->url) }}"
                                                                        alt="" />
                                                                @else
                                                                    <img class="w-full h-full rounded-full object-cover"
                                                                        src="{{ asset('storage/' . 'articles/def.jpg') }}"
                                                                        alt="" />
                                                                @endif
                                                            </div>
                                                            <div class="  ml-3 text-xs ">
                                                                <p class="  whitespace-no-wrap">
                                                                    {{ $article->name }}
                                                                </p>
                                                            </div>
                                                        </div>


                                                    </td>
                                                    <td class=" py-2 text-sm w-36">






                                                        @if (!empty($article->id_dopp))
                                                            <p class=" "><i
                                                                    class="text-blue-500  fas fa-key"></i>
                                                                {{ $article->id_dopp }}</p>
                                                        @endif
                                                        @if (!empty($article->id_eetc))
                                                            <p class=" "><i
                                                                    class="text-yellow-400  fas fa-key"></i>
                                                                {{ $article->id_eetc }}</p>
                                                        @endif
                                                        @if (!empty($article->id_zona))
                                                            <p class=" "><i
                                                                    class="text-gray-400  fas fa-key"></i>
                                                                {{ $article->id_zona }}</p>
                                                        @endif

                                                    </td>


                                                    <td class="text-xs w-28">
                                                        {{ $article->unit->name }}
                                                    </td>
                                                    <td class="text-xs w-28">
                                                        {{ $article->department->name }}
                                                    </td>
                                                    <td class="text-xs w-48">
                                                        {{ $article->category->name }}
                                                    </td>

                                                    <td class="w-28">
                                                        {{ $article->stock_min }}
                                                    </td>

                                                    <td class="w-28">
                                                        <div class="dropdown">
                                                            <button type="button"
                                                                class="btn p-0 dropdown-toggle hide-arrow"
                                                                data-bs-toggle="dropdown">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('admin.articles.edit', $article) }}"><i
                                                                        class="mdi mdi-pencil-outline me-1"></i>
                                                                    Edit</a>

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
                                @if ($articles->hasPages())
                                    <div class=" form-control px-6 py-4">
                                        <span class="form-control  ">{{ $articles->links() }}</span>
                                    </div>
                                @endif













                                <!--/ Hoverable Table rows -->











                            </div>
                            <!-- / Content -->


                            <div class="content-backdrop fade"></div>
                        </div>
                        <!-- Content wrapper -->
                    </div>
                    <!-- / Layout page -->
                </div>

                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>

                <!-- Drag Target Area To SlideIn Menu On Small Screens -->
                <div class="drag-target"></div>
            </div>
            <!-- / Layout wrapper -->
        </div>
    </div>

</div>
