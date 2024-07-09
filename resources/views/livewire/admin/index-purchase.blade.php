 <div>


     <!-- Content -->
     <div class=" px-2 mt-10 sm:px-8 flex-grow-1 container-p-y">

         <h4 class=" pt-4"><span class="text-xl ">SGM / Ingreso de materiales </span> </h4>
         <h4 class="mb-4 "><span class="text-md ">Listado de ingresos de materiales</span></h4>





         <!-- Content -->

         <div>




            
             <!-- Product List Widget -->


   <!-- Product List Widget -->
   <div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="me-1">
                        <p class="mb-2">Total de Registros</p>
                        <div class="d-flex align-items-center">
                            <h4 class="mb-2 me-1 display-6">{{  $purchasesTotal->count() }}</h4>
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
                        <p class="text-heading mb-2">Registros encontrados</p>
                        <div class="d-flex align-items-center">
                            <h4 class="mb-2 me-1 display-6">{{    $purchasesFound->count() }}</h4>
                            <p class="text-success mb-2">
                                ({{ number_format((   $purchasesFound->count() /  $purchasesTotal->count()) * 100, 1) }}%)
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
                                                    Nuevo Ingreso
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
                                         <th>Descripción</th> 
                                         <th>Cod. Documento</th>
                                         <th>Proveedor</th>
                                         <th>Linea</th>            
                                         <th>Fecha de registro</th>
                                         <th>Acciones</th>
                                     </tr>
                                 </thead>
                                 <tbody class="table-border-bottom-0">

                                     @foreach ($purchases as $purchase)
                                         <tr>

                                             <td class="text-sm">
                                                 {{ $purchase->id }}
                                             </td>

                                             <td class="text-sm">
                                                {{ $purchase->description }}
                                            </td>
                                            <td class="text-sm w-48">
                                                {{ $purchase->ndocument }}
                                            </td>

                                             <td class="text-xs">
                                                 {{ $purchase->vendor->name_company }}
                                             </td>
                                             <td class="text-xs  w-48">

                                                <div class="flex items-center rounded-lg p-2 border-{{$purchase->line->color}} text-center border-1  ">
                  
                                                    {{-- icono svg --}}
        
                                                    <div class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"
                                                            width="32" height="16" x="0" y="0"
                                                            viewBox="0 0 512.001 512.001"
                                                            style="enable-background:new 0 0 512 512"
                                                            xml:space="preserve" {{-- class="fill-current text-{{ $item->options->line_color }}"> --}}
                                                            class="fill-current text-{{$purchase->line->color}}">
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
        
                                                    {{-- FIN icono svg --}}
                                                  <div class="">
                                                        {{$purchase->line->name}} 
                                                    </div>
        
                                                </div>
        


                                                 {{-- {{ $purchase->Line->name }} --}}
                                             </td>
                                           
                                          
                                             <td class="text-xs w-48">
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
