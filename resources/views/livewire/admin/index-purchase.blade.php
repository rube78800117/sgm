 <div>


     <!-- Content -->
     <div class=" px-2 mt-10 sm:px-8 flex-grow-1 container-p-y">

         <h4 class=" pt-4"><span class="text-xl ">SGM / Ingreso de materiales </span> </h4>
         <h4 class="mb-4 "><span class="text-md ">Listado de ingresos de materiales</span></h4>





         <!-- Content -->

         <div>




            
             <!-- Product List Widget -->

             <div class="card mb-4">
                 <div class="card-widget-separator-wrapper">
                     <div class="card-body card-widget-separator">
                         <div class="row gy-4 gy-sm-1">
                             <div class="col-sm-6 col-lg-3">
                                 <div
                                     class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                     <div>
                                         <p class="mb-2">Total de Registros</p>





                                         <h4 class="mb-2"></h4>
                                         <p class="mb-0">
                                             <span class="me-2"></span><span
                                                 class="badge rounded-pill bg-label-success"><strong
                                                     class="text-xl">{{ $purchasesTotal->count() }}</strong></span>
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
                                                     class="text-xl">{{ $purchasesFound->count() }}</strong></span>
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
                                                     Add nuevo Ingreso
                                                 </a>


                                             </span></span>
                                     </button>



                                 </div>
                             </div>
                         </div>

                     </div>


                     <div class="table-responsive form-control">



                         @if ($purchases->count())


                             <table class="table table-hover">
                                 <thead class="sticky top-0 z-10 ">
                                     <tr>
                                         <th>ID</th>
                                         <th>Proveedor</th>
                                         <th>Linea</th>
                                         <th>Cod. Documento</th>
                                         <th>Aclaración</th>
                                         <th>Fecha de registro</th>
                                         <th>Acciones</th>
                                     </tr>
                                 </thead>
                                 <tbody class="table-border-bottom-0">

                                     @foreach ($purchases as $purchase)
                                         <tr>




                                             <td class="text-xs">
                                                 {{ $purchase->id }}
                                             </td>
                                             <td class="text-xs">
                                                 {{ $purchase->vendor->name_company }}
                                             </td>
                                             <td class="text-xs">
                                                 {{ $purchase->Line->name }}
                                             </td>
                                             <td class="text-xs">
                                                 {{ $purchase->ndocument }}
                                             </td>
                                             <td class="text-xs">
                                                 {{ $purchase->description }}
                                             </td>
                                             <td class="text-xs">
                                                 {{ $purchase->created_at->format('d-m-Y') }}
                                             </td>


                                             <td>
                                                 <div class="dropdown">
                                                     <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                         data-bs-toggle="dropdown">
                                                         <i class="mdi mdi-dots-vertical"></i>
                                                     </button>
                                                     <div class="dropdown-menu">
                                                         <a class="dropdown-item"
                                                             href="{{ route('admin.purchases.show', $purchase->id) }}"><i
                                                                 class="fas fa-eye me-1"></i>
                                                             Ver</a>

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
                         @if ($purchases->hasPages())
                             <div class=" form-control px-6 py-4">
                                 <span class="form-control  ">{{ $purchases->links() }}</span>
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




     </div>
