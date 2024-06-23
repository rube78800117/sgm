<div class=" form-control ">

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">


            <!-- Layout container -->
            <div class="my-2">
                <!-- Navbar -->
{{--                 
        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="mdi mdi-menu mdi-24px"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
                  <i class="mdi mdi-magnify mdi-24px scaleX-n1-rtl"></i>
                  <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                </a>
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Language -->
              <li class="nav-item dropdown-language dropdown me-1 me-xl-0">
                <a
                  class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                  href="javascript:void(0);"
                  data-bs-toggle="dropdown">
                  <i class="mdi mdi-translate mdi-24px"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                      <span class="align-middle">English</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                      <span class="align-middle">French</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                      <span class="align-middle">German</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                      <span class="align-middle">Portuguese</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ Language -->

              <!-- Style Switcher -->
              <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                <a
                  class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                  href="javascript:void(0);"
                  data-bs-toggle="dropdown">
                  <i class="mdi mdi-24px"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                      <span class="align-middle"><i class="mdi mdi-weather-sunny me-2"></i>Light</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                      <span class="align-middle"><i class="mdi mdi-weather-night me-2"></i>Dark</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                      <span class="align-middle"><i class="mdi mdi-monitor me-2"></i>System</span>
                    </a>
                  </li>
                </ul>
                <!-- / Style Switcher-->

                <!-- Quick links  -->
              </li>

           
              <!-- Quick links -->

              <!-- Notification -->
              <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                <a
                  class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                  href="javascript:void(0);"
                  data-bs-toggle="dropdown"
                  data-bs-auto-close="outside"
                  aria-expanded="false">
                  <i class="mdi mdi-bell-outline mdi-24px"></i>
                  <span
                    class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end py-0">
                  <li class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h6 class="mb-0 me-auto">Notification</h6>
                      <span class="badge rounded-pill bg-label-primary">8 New</span>
                    </div>
                  </li>
                  <li class="dropdown-notifications-list scrollable-container">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex gap-2">
                          <div class="flex-shrink-0">
                            <div class="avatar me-1">
                              <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                            <h6 class="mb-1 text-truncate">Congratulation Lettie 🎉</h6>
                            <small class="text-truncate text-body">Won the monthly best seller gold badge</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <small class="text-muted">1h ago</small>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex gap-2">
                          <div class="flex-shrink-0">
                            <div class="avatar me-1">
                              <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                            </div>
                          </div>
                          <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                            <h6 class="mb-1 text-truncate">Charles Franklin</h6>
                            <small class="text-truncate text-body">Accepted your connection</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <small class="text-muted">12hr ago</small>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex gap-2">
                          <div class="flex-shrink-0">
                            <div class="avatar me-1">
                              <img src="../../assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                            <h6 class="mb-1 text-truncate">New Message ✉️</h6>
                            <small class="text-truncate text-body">You have new message from Natalie</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <small class="text-muted">1h ago</small>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex gap-2">
                          <div class="flex-shrink-0">
                            <div class="avatar me-1">
                              <span class="avatar-initial rounded-circle bg-label-success"
                                ><i class="mdi mdi-cart-outline"></i
                              ></span>
                            </div>
                          </div>
                          <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                            <h6 class="mb-1 text-truncate">Whoo! You have new order 🛒</h6>
                            <small class="text-truncate text-body">ACME Inc. made new order $1,154</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <small class="text-muted">1 day ago</small>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex gap-2">
                          <div class="flex-shrink-0">
                            <div class="avatar me-1">
                              <img src="../../assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                            <h6 class="mb-1 text-truncate">Application has been approved 🚀</h6>
                            <small class="text-truncate text-body"
                              >Your ABC project application has been approved.</small
                            >
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <small class="text-muted">2 days ago</small>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex gap-2">
                          <div class="flex-shrink-0">
                            <div class="avatar me-1">
                              <span class="avatar-initial rounded-circle bg-label-success"
                                ><i class="mdi mdi-chart-pie-outline"></i
                              ></span>
                            </div>
                          </div>
                          <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                            <h6 class="mb-1 text-truncate">Monthly report is generated</h6>
                            <small class="text-truncate text-body">July monthly financial report is generated </small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <small class="text-muted">3 days ago</small>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex gap-2">
                          <div class="flex-shrink-0">
                            <div class="avatar me-1">
                              <img src="../../assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                            <h6 class="mb-1 text-truncate">Send connection request</h6>
                            <small class="text-truncate text-body">Peter sent you connection request</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <small class="text-muted">4 days ago</small>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex gap-2">
                          <div class="flex-shrink-0">
                            <div class="avatar me-1">
                              <img src="../../assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                            <h6 class="mb-1 text-truncate">New message from Jane</h6>
                            <small class="text-truncate text-body">Your have new message from Jane</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <small class="text-muted">5 days ago</small>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex gap-2">
                          <div class="flex-shrink-0">
                            <div class="avatar me-1">
                              <span class="avatar-initial rounded-circle bg-label-warning"
                                ><i class="mdi mdi-alert-circle-outline"></i
                              ></span>
                            </div>
                          </div>
                          <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                            <h6 class="mb-1">CPU is running high</h6>
                            <small class="text-truncate text-body"
                              >CPU Utilization Percent is currently at 88.63%,</small
                            >
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <small class="text-muted">5 days ago</small>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-menu-footer border-top p-2">
                    <a href="javascript:void(0);" class="btn btn-primary d-flex justify-content-center">
                      View all notifications
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ Notification -->

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-account.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-medium d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-profile-user.html">
                      <i class="mdi mdi-account-outline me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-account.html">
                      <i class="mdi mdi-cog-outline me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-billing.html">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 mdi mdi-credit-card-outline me-2"></i>
                        <span class="flex-grow-1 align-middle">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-faq.html">
                      <i class="mdi mdi-help-circle-outline me-2"></i>
                      <span class="align-middle">FAQ</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-pricing.html">
                      <i class="mdi mdi-currency-usd me-2"></i>
                      <span class="align-middle">Pricing</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                      <i class="mdi mdi-logout me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>

          <!-- Search Small Screens -->
          <div class="navbar-search-wrapper search-input-wrapper d-none">
            <input
              type="text"
              class="form-control search-input container-xxl border-0"
              placeholder="Search..."
              aria-label="Search..." />
            <i class="mdi mdi-close search-toggler cursor-pointer"></i>
          </div>
        </nav> --}}

                <!-- / Navbar -->

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





                                                    <h4 class="mb-2">{{ $articlesTotal->count() }}</h4>
                                                    <p class="mb-0">
                                                        <span class="me-2">5k orders</span><span
                                                            class="badge rounded-pill bg-label-success">+5.7%</span>
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
                                                    <h4 class="mb-2">{{$articlesFound->count()}}</h4>
                                                    <p class="mb-0">
                                                        <span class="me-2">21k orders</span><span
                                                            class="badge rounded-pill bg-label-success">+12.4%</span>
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
                                                        href="{{ route('admin.articles.create') }}">
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
                                                    <td style="width: 30%;" class="w-30">

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
                                                    <td class=" py-2 text-sm">






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


                                                    <td class="text-xs">
                                                        {{ $article->unit->name }}
                                                    </td>
                                                    <td class="text-xs">
                                                        {{ $article->department->name }}
                                                    </td>
                                                    <td class="text-xs">
                                                        {{ $article->category->name }}
                                                    </td>

                                                    <td>
                                                        {{ $article->stock_min }}
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

                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>

                <!-- Drag Target Area To SlideIn Menu On Small Screens -->
                <div class="drag-target"></div>
            </div>
            <!-- / Layout wrapper -->



        </div>




































    </div>
