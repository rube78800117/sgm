


<div>

   
    
    <div class=" 0 shadow-md">
    
    
    
   <!-- Content wrapper -->
   <div class="content-wrapper">
    <!-- Content -->
   

    <div class=" px-2 mt-10 sm:px-8 flex-grow-1 container-p-y"> 


        <h4 class=" pt-4"><span class="text-xl ">SGM / Relevamiento de materiales </span> </h4>
        <h4  class="mb-4 "><span class="text-md ">Lista de relevamientos</span></h4>



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
                                            class="badge rounded-pill bg-label-success"><strong class="text-xl">{{ $countsTotal->count() }}</strong></span>
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
                                            class="badge rounded-pill bg-label-success"><strong class="text-xl">{{$countsFound->count()}}</strong></span>
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
                  <label for="basic-addon21">¿Que estas buscando?...</label>
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
                                                        href="{{route('admin.counts.create')}}">
                                        NUEVO RELEVAMIENTO
                                        </a>
                                       
                    
                                   
                                        </button> 
                                 
                                   
                        </div>
                    </div>
                </div>

            </div>


            <div class="table-responsive form-control">

                @if ($mycounts->count())

                    <table class="table table-hover">
                        <thead class="sticky top-0 z-10 ">
                            <tr>
                                <th> ID</th>
                                <th> Nombre</th>
                                <th>Línea</th>
                                <th>Almacén</th>
                                <td>Estado</td>
                                <th>Usuario</th>
                                <th>Fecha de registro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                            @foreach ($mycounts as $mycount)
                                <tr>
                                    <td >
                                        <div class="flex  items-center">
                                            {{ $mycount->id }}

{{--                                             
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
                                                    {{ $mycounts->name }}
                                                </p>
                                            </div> --}}
                                        </div>


                                    </td>
                                

                                    <td class="text-xs">
                                       
                                        {{$mycount->name}}
                  
                            
                                    </td>
                                    <td class="text-xs ">

                                        <div class=" flex justify-center rounded-lg p-2 border-{{$mycount->warehouse->station->line->color}} text-center border-1  ">
                  
                                            {{-- icono svg --}}

                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"
                                                    width="32" height="16" x="0" y="0"
                                                    viewBox="0 0 512.001 512.001"
                                                    style="enable-background:new 0 0 512 512"
                                                    xml:space="preserve" {{-- class="fill-current text-{{ $item->options->line_color }}"> --}}
                                                    class="fill-current text-{{$mycount->warehouse->station->line->color}}">
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
                                            <div>
                                                {{$mycount->warehouse->station->line->name}} 
                                            </div>

                                        </div>






                                              
                                       
                                     
                                  
                                    </td>
                                    <td class="text-xs">
                                        {{$mycount->warehouse->name}} 
                                   
                                    </td>
                                    <td class="text-xs">
                                        @switch($mycount->status)
                                            @case(1)
                                                <button class="btn btn-sm btn-outline-primary">PROGRESO</button>
                                                @break
                                            @case(2)
                                                <button class="btn btn-sm btn-outline-primary">ABIERTO</button>
                                                @break
                                            @case(3)
                                                <button class="btn btn-sm btn-outline-primary">REVISION</button>
                                                @break
                                            @case(4)
                                                <button class="btn btn-sm btn-outline-primary">APROBADO</button>
                                                @break
                                            @case(5)
                                                <button class="btn btn-sm btn-outline-primary">RECHAZADO</button>
                                                @break
                                            @case(6)
                                                <button class="btn btn-sm btn-outline-primary">ANULADO</button>
                                                @break
                                            @case(11)
                                                <button class="btn btn-sm btn-outline-primary">SALIDA</button>
                                                @break
                                        
                                            @case(33)
                                                <button class="btn btn-sm btn-outline-primary">CERRADO</button>
                                                @break
                                        @endswitch

                                    </td>

                                    <td>
                                        {{$mycount->user->name}}  
                                   
                                    </td>
                                    <td>
                                        {{ $mycount->created_at->format('d-m-Y') }}</p>  
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
                                                href="{{route('admin.counts.show', $mycount)}}" ><i
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
                @if ($mycounts->hasPages())
                    <div class=" form-control px-6 py-4">
                        <span class="form-control  ">{{ $mycounts->links() }}</span>
                    </div>
                @endif













                <!--/ Hoverable Table rows -->











            </div>
            <!-- / Content -->

            <!-- Footer -->
            {{-- <footer class="content-footer footer bg-footer-theme">
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
            </footer> --}}
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
</div>













      <!-- component -->
              {{-- <x-table-responsive>
    
                  <div class="px-6 py-2  ">
                          <x-jet-label value="Búsqueda por Nombre, ID, Nro de Documento"/>
                          <x-jet-input class="w-3/4 border-gray-400 " 
                          wire:model="search" 
                          type="text" placeholder="¿Que estas buscando...?"></x-jet>
                  </div>
                     
                  
             
    
                  @if ($mycounts->count())
                       <table class="min-w-full leading-normal">
                          <thead>
                              <tr>
                                   <th
                                      class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      ID
                                  </th>
                                  <th
                                      class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      Nombre
                                  </th>
                                 
                                  <th
                                      class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      Código
                                  </th>
                                  <th
                                      class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      Almacén
                                  </th>
                           
                                  
                                  <th
                                      class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      Usuario
                                  </th>
                                  <th
                                      class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      Fecha de registro
                                  </th>
                                  <th
                                      class="px-5 py-3 border-b-2 border-gray-400 bg-blue-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                      Acciones
                                  </th>

                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($mycounts as $mycount)
                                 <tr>
                                                          
                        
                                  </td>
                                  <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                      <p class="text-gray-900 whitespace-no-wrap">
                                      {{$mycount->id}}    
                                      </p>
                                 </td>
                           

                                  <td class="hidden sm:table-cell px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                      <p class="text-gray-900 whitespace-no-wrap">
                                          {{$mycount->name}}
                                      </p>
                                  </td>
    
                                  <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                     <p class="text-gray-900 whitespace-no-wrap">
                                         {{$mycount->Obs}}
                                     </p>
                                 </td>
    
    
                                  <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                      <p class="text-gray-900 whitespace-no-wrap">
                                      {{$mycount->warehouse->name}}    
                                      </p>
                                  </td>   
                                   
                                  
                                  <td class="hidden sm:table-cell px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                      <p class="text-gray-900 whitespace-no-wrap">
                                      {{$mycount->user->name}}    
                                      </p>
                                  </td>   
                                  <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                       {{ $mycount->created_at->format('d-m-Y') }}</p>   
                                
                                </td>   
    
                             
    
                                    <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{route('admin.counts.show', $mycount)}}" class="text-blue-600 hover:text-blue-400 ">
                                         <p class="text-xl flex justify-center">
                                         <i class="fas fa-chevron-circle-right"></i> </p> <p class="text-md flex justify-center">Ver mas</p> </a> 
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
                 
    
    
                      @if ($mycounts->hasPages())
                          <div class="px-6 py-4">
                          {{$mycounts->links()}}
    
                          </div>
                      @endif
                      
              </x-table-responsive>
                       --}}
                      
            
    </div>
    
     
    </div>
    
</div>
