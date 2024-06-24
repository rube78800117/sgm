<div class="">

       {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
       {{-- <x-slot name="header">
            </x-slot> --}}


            <x-slot name="header">
       
                <div class="container flex justify-between">
                   <div>
                     <h2 class="py-2 font-semibold text-sm  leading-tight">
                      INGRESO DE STOCK DE INSUMOS O REPUESTOS {{Session::get('key')}}
                     </h2>
                   </div> 
           
                
         
                 <div class="flex">
                     <a  href="{{route('admin.purchases.create')}}">
                     <x-button-enlace color='green' class="ml-auto">
                      NUEVO INGRESO
                     </x-button-enlace> 
                     </a>
                </div>
         
            </x-slot>





  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">SGM /</span>Lista de materiales</h4>

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





                                    <h4 class="mb-2">{{ $purchasesTotal->count() }}</h4>
                                    <p class="mb-0">
                                        {{-- <span class="me-2">5k orders</span><span
                                            class="badge rounded-pill bg-label-success">+5.7%</span> --}}
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
                                    <h4 class="mb-2">{{$purchasesFound->count()}}</h4>
                                    <p class="mb-0">
                                        {{-- <span class="me-2">21k orders</span><span
                                            class="badge rounded-pill bg-label-success">+12.4%</span> --}}
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
                        {{-- <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                                <div>
                                    <p class="mb-2">Discount</p>
                                    <h4 class="mb-2">$14,235.12</h4>
                                    <p class="mb-0">6k orders</p>
                                </div>
                                <div class="avatar me-sm-4">
                                    <span class="avatar-initial rounded bg-label-secondary">
                                        <i class="mdi mdi-wallet-giftcard mdi-24px"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <p class="mb-2">Affiliate</p>
                                    <h4 class="mb-2">$8,345.23</h4>
                                    <p class="mb-0">
                                        <span class="me-2">150 orders</span><span
                                            class="badge rounded-pill bg-label-danger">-3.5%</span>
                                    </p>
                                </div>
                                <div class="avatar">
                                    <span class="avatar-initial rounded bg-label-secondary">
                                        <i class="mdi mdi-currency-usd mdi-24px"></i>
                                    </span>
                                </div>
                            </div>
                        </div> --}}
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
                  <input wire:model="search" type="text" class="form-control" id="basic-addon21" placeholder="" aria-label="Username" aria-describedby="basic-addon21" />
                  <label for="basic-addon21">Que estas buscando...?</label>
                </div>
                <span class="form-floating-focused"></span>
              </div>

                   
                        </label></div>
                    </div>
                    <div
                        class="d-flex justify-content-start justify-content-md-end align-items-baseline">
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
                                        
                                        
                            

                                        
                                        <button  class="dt-button add-new btn btn-primary ms-n1" tabindex="0"

                                            aria-controls="DataTables_Table_0" type="button"><span><i
                                            class="mdi mdi-plus me-0 me-sm-1"></i><span
                                            class="d-none d-sm-inline-block">
                                                        <a class="dropdown-item"
                                        href="{{ route('admin.purchases.create') }}">
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
                                            <button type="button"
                                                class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{route('admin.purchases.show', $purchase)}}"><i
                                                        class="mdi mdi-pencil-outline me-1"></i>
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

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl">
                    <div
                        class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with <span class="text-danger"><i
                                    class="tf-icons mdi mdi-heart"></i></span> by
                            <a href="https://pixinvent.com" target="_blank"
                                class="footer-link fw-medium">Pixinvent</a>
                        </div>
                        <div class="d-none d-lg-inline-block">
                            <a href="https://themeforest.net/licenses/standard"
                                class="footer-link me-4" target="_blank">License</a>
                            <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                                class="footer-link me-4">More Themes</a>

                            <a href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/"
                                target="_blank" class="footer-link me-4">Documentation</a>

                            <a href="https://pixinvent.ticksy.com/" target="_blank"
                                class="footer-link d-none d-sm-inline-block">Support</a>
                        </div>
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































































     <!-- component -->
    <div class="container bg-gray-100 shadow-md  ">
        <div class="px-6 pb-2  ">
            <x-jet-label value="Búsqueda por Nombre, ID, Nro de Documento"/>
            <x-jet-input class="w-3/4 border-gray-400" 
            wire:model="search" 
            type="text" placeholder="¿Que estas buscando...?"></x-jet>
    </div>
       
     
             <x-table-responsive>
 
             
                 
            

                 @if ($purchases->count())
                      <table class="min-w-full leading-normal">
                         <thead>
                             <tr>
                                  <th
                                     class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                     ID
                                 </th>
                                 <th
                                     class="hidden md:table-cell px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                     Proveedor
                                 </th>
                                
                                 <th
                                     class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                     Linea
                                 </th>
                                 <th
                                     class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                     Cod. Docuemento
                                 </th>
                                 <th
                                     class="hidden md:table-cell px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                     Aclaración
                                 </th>
                                 <th
                                     class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                     Fecha de registro
                                 </th>
                                 <th
                                     class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                     Acciones
                                 </th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($purchases as $purchase)
                       
                                 <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                     <p class="text-gray-900 whitespace-no-wrap">
                                     {{$purchase->id}}    
                                     </p>
                                </td>
 
 
                                 <td class="hidden md:table-cell px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                     <p class="text-gray-900 whitespace-no-wrap">
                                         {{$purchase->vendor->name_company}}
                                     </p>
                                 </td>

                                 <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$purchase->Line->name}}
                                    </p>
                                </td>

 
                                 <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                     <p class="text-gray-900 whitespace-no-wrap">
                                     {{$purchase->ndocument}}    
                                     </p>
                                 </td>   
                                  
                                 
                                 <td class="hidden md:table-cell px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                     <p class="text-gray-900 whitespace-no-wrap">
                                     {{$purchase->description}}    
                                     </p>
                                 </td>   

                                 <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                    {{$purchase->created_at->format('d-m-Y') }}    
                                    </p>
                                </td>   
 
 


                                <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                    <a href="{{route('admin.purchases.show', $purchase)}}" class="text-blue-600 hover:text-blue-400 ">
                                     <p class="text-xl flex justify-center">
                                     <i class="fas fa-chevron-circle-right"></i> </p> <p class="text-md flex justify-center"> Ir</p> </a> 
                                </td>

{{-- 
                                 <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{route('admin.purchases.show', $purchase->id)}}" class="text-blue-600 hover:text-blue-700 ">
                                         <p class="text-xl flex justify-center"> >>
                                            </p> <p class="text-md flex justify-center"> Ver mas</p> </a> 
                                          <i class="fas fa-glasses"></i>
                                 </td> --}}
 
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
                     
    </div>              
           

 
    
</div>
