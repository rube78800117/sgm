



<div>
    <!-- Menu -->







                    {{-- 
                     <x-jet-nav-link href="{{ $nav_link['route']  }}" :active="$nav_link['active'] ">
                     <ul class="text-gray-200">{{ $nav_link['name'] }}</ul> 
                     </x-jet-nav-link>   
                     --}}


    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a href="{{ route('home') }}" class="app-brand-link">
                <x-jet-application-mark class="block h-9 w-auto" />
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
                        fill="currentColor" fill-opacity="0.6" />
                    <path
                        d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
                        fill="currentColor" fill-opacity="0.38" />
                </svg>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
            <!-- Dashboards -->

            {{-- <li class="menu-item active">
                     <x-jet-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                         <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                         <div data-i18n="{{ $nav_link['name'] }}">{{ $nav_link['name'] }}</div>
                     </x-jet-nav-link>
                 </li> --}}

            {{-- 
                    @foreach ($nav_links as $nav_link) --}}

            {{-- ARTICULOS --}}

            <li class="menu-item">
                <a href="" class="menu-link menu-toggle">
                    {{-- <i class="menu-icon tf-icons mdi mdi-home-outline"></i> --}}
                    <i class="menu-icon  text-sm tf-icons fas fa-tools"></i>
                    <div data-i18n="article">Artículos</div>
                    {{-- <div class="badge bg-primary rounded-pill ms-auto">5</div> --}}
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.index') }}" class="menu-link">
                            <div data-i18n="eCommerce">Todos los artículos</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.articles.create') }}" class="menu-link">
                            <div data-i18n="CRM">Crear nuevo</div>
                        </a>
                    </li>

                </ul>
            </li>

            {{-- END ARTICULOS --}}


            {{-- <!-- CATEGORIAS --> --}}
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-view-grid-outline"></i>
                    {{-- <i class="menu-icon tf-icons mdi mdi-window-maximize"></i> --}}
                    <div data-i18n="Layouts">Categorías</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.categories.index') }}" class="menu-link">
                            <div data-i18n="Collapsed menu">Crear categorias</div>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- END CATEGORIAS --}}





            {{-- <!-- LINEAS Y ALMACENES --> --}}
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    {{-- <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i> --}}
                    {{-- fas fa-ban icono bloqueado --}}
                    <div class="w-12">


                        <svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"
                            width="24" height="24" x="0" y="0"
                            viewBox="0 0 512.001 512.001"
                            style="enable-background:new 0 0 512 512"
                            xml:space="preserve" {{-- class="fill-current text-{{ $item->options->line_color }}"> --}}
                            class="fill-current text-white">
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
                    <div data-i18n="Front Pages">Lineas, estaciones y alamacenes</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.lines.index') }}" class="menu-link" target="">
                            <div data-i18n="Landing">Crear Lineas, estaciones y almacenes</div>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <!--END  LINEAS Y ALMACENES --> --}}






            


            {{-- <!-- INGRESO DE NUEVO STOCK --> --}}
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-view-grid-plus-outline"></i>
                    <div data-i18n="Front Pages">Ingreso de Stock</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.purchases.index') }}" class="menu-link" target="">
                            <div data-i18n="Landing">Todos los ingresos</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.purchases.create') }}" class="menu-link" target="">
                            <div data-i18n="Pricing">Nuevo ingreso</div>
                        </a>
                    </li>

                </ul>
            </li>
            {{-- <!-- END INGRESO DE NUEVO STOCK --> --}}













            {{-- GESTIONAR SOLICITUDES --}}

            <li class="menu-item">
                <a href="" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-clipboard-file-outline"></i>
                    <div data-i18n="article">Gestion de solicitudes</div>
                    {{-- <div class="badge bg-primary rounded-pill ms-auto">5</div> --}}
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.orders.index') }}" class="menu-link">
                            <div data-i18n="eCommerce">Todas las solicitudes</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.orders.movements.index') }}" class="menu-link">
                            <div data-i18n="eCommerce">Recepción de movimientos aprobados</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.orders.index') }}" class="menu-link">
                            <div data-i18n="CRM">Solicitudes linea</div>
                        </a>
                    </li>

                </ul>
            </li>

            {{-- END GESTIONAR SOLICITUDES --}}


            {{--  USUARIOS --}}
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                    <div data-i18n="Users">Usuarios</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.users') }}" class="menu-link">
                            <div data-i18n="List">Todos los usuarios</div>
                        </a>
                    </li>

                    {{-- <li class="menu-item">
           <a href="javascript:void(0);" class="menu-link menu-toggle">
               <div data-i18n="View">View</div>
           </a>
           <ul class="menu-sub">
               <li class="menu-item">
                   <a href="app-user-view-account.html" class="menu-link">
                       <div data-i18n="Account">Account</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="app-user-view-security.html" class="menu-link">
                       <div data-i18n="Security">Security</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="app-user-view-billing.html" class="menu-link">
                       <div data-i18n="Billing & Plans">Billing & Plans</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="app-user-view-notifications.html" class="menu-link">
                       <div data-i18n="Notifications">Notifications</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="app-user-view-connections.html" class="menu-link">
                       <div data-i18n="Connections">Connections</div>
                   </a>
               </li>
           </ul>
       </li> --}}
                </ul>
            </li>

            {{-- END USUARIOS  --}}




            {{-- ROLES Y PERMISOS --}}
                <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-shield-outline"></i>
                    <div data-i18n="Roles & Permissions">Roles & Permisos</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="app-access-roles.html" class="menu-link">
                            <div data-i18n="Roles">Roles</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-access-permission.html" class="menu-link">
                            <div data-i18n="Permission">Permisos</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-file-outline"></i>
                    <div data-i18n="Pages">Relevamientos</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.counts.index') }}" class="menu-link ">
                            <div data-i18n="User Profile">Todos los relevamientos</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.adjustment.create') }}" class="menu-link">
                            <div data-i18n="Profile">Ajustes de Stock</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.counts.create') }}" class="menu-link">
                            <div data-i18n="Profile">Nuevo relevamiento</div>
                        </a>
                    </li>
                    {{-- <li class="menu-item">
                   <a href="pages-profile-teams.html" class="menu-link">
                       <div data-i18n="Teams">Teams</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="pages-profile-projects.html" class="menu-link">
                       <div data-i18n="Projects">Projects</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="pages-profile-connections.html" class="menu-link">
                       <div data-i18n="Connections">Connections</div>
                   </a>
               </li> --}}


                    {{-- <li class="menu-item">
           <a href="javascript:void(0);" class="menu-link menu-toggle">
               <div data-i18n="Account Settings">Account Settings</div>
           </a>
           <ul class="menu-sub">
               <li class="menu-item">
                   <a href="pages-account-settings-account.html" class="menu-link">
                       <div data-i18n="Account">Account</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="pages-account-settings-security.html" class="menu-link">
                       <div data-i18n="Security">Security</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="pages-account-settings-billing.html" class="menu-link">
                       <div data-i18n="Billing & Plans">Billing & Plans</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="pages-account-settings-notifications.html" class="menu-link">
                       <div data-i18n="Notifications">Notifications</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="pages-account-settings-connections.html" class="menu-link">
                       <div data-i18n="Connections">Connections</div>
                   </a>
               </li>
           </ul>
       </li>
       <li class="menu-item">
           <a href="pages-faq.html" class="menu-link">
               <div data-i18n="FAQ">FAQ</div>
           </a>
       </li>
       <li class="menu-item">
           <a href="pages-pricing.html" class="menu-link">
               <div data-i18n="Pricing">Pricing</div>
           </a>
       </li>
       <li class="menu-item">
           <a href="javascript:void(0);" class="menu-link menu-toggle">
               <div data-i18n="Misc">Misc</div>
           </a>
           <ul class="menu-sub">
               <li class="menu-item">
                   <a href="pages-misc-error.html" class="menu-link" target="_blank">
                       <div data-i18n="Error">Error</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                       <div data-i18n="Under Maintenance">Under Maintenance</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                       <div data-i18n="Coming Soon">Coming Soon</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                       <div data-i18n="Not Authorized">Not Authorized</div>
                   </a>
               </li>
               <li class="menu-item">
                   <a href="pages-misc-server-error.html" class="menu-link" target="_blank">
                       <div data-i18n="Server Error">Server Error</div>
                   </a>
               </li>
           </ul>
       </li> --}}
                </ul>
            </li>
            {{-- END ROLES Y PERMISOS --}}






























            {{-- 
            <li class="menu-header fw-medium mt-4">
                <span class="menu-header-text">Apps &amp; Pages</span>
            </li>
            <li class="menu-item active">
                <a href="app-email.html" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-email-outline"></i>
                    <div data-i18n="Email">Email</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="app-chat.html" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-message-outline"></i>
                    <div data-i18n="Chat">Chat</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="app-calendar.html" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-calendar-blank-outline"></i>
                    <div data-i18n="Calendar">Calendar</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="app-kanban.html" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-view-grid-outline"></i>
                    <div data-i18n="Kanban">Kanban</div>
                </a>
            </li>
            <!-- e-commerce-app menu start -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-domain"></i>
                    <div data-i18n="eCommerce">eCommerce</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="app-ecommerce-dashboard.html" class="menu-link">
                            <div data-i18n="Dashboard">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Products">Products</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-ecommerce-product-list.html" class="menu-link">
                                    <div data-i18n="Product list">Product list</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-ecommerce-product-add.html" class="menu-link">
                                    <div data-i18n="Add Product">Add Product</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-ecommerce-category-list.html" class="menu-link">
                                    <div data-i18n="Category list">Category List</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Order">Order</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-ecommerce-order-list.html" class="menu-link">
                                    <div data-i18n="Order list">Order list</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-ecommerce-order-details.html" class="menu-link">
                                    <div data-i18n="Order Details">Order Details</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Customer">Customer</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-ecommerce-customer-all.html" class="menu-link">
                                    <div data-i18n="All Customers">All Customers</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Customer Details">Customer Details</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-ecommerce-customer-details-overview.html" class="menu-link">
                                            <div data-i18n="Overview">Overview</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-ecommerce-customer-details-security.html" class="menu-link">
                                            <div data-i18n="Security">Security</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-ecommerce-customer-details-billing.html" class="menu-link">
                                            <div data-i18n="Address & Billing">Address & Billing</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-ecommerce-customer-details-notifications.html" class="menu-link">
                                            <div data-i18n="Notifications">Notifications</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="app-ecommerce-manage-reviews.html" class="menu-link">
                            <div data-i18n="Manage reviews">Manage reviews</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-ecommerce-referral.html" class="menu-link">
                            <div data-i18n="Referrals">Referrals</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Settings">Settings</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-ecommerce-settings-detail.html" class="menu-link">
                                    <div data-i18n="Store details">Store details</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-ecommerce-settings-payments.html" class="menu-link">
                                    <div data-i18n="Payments">Payments</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-ecommerce-settings-checkout.html" class="menu-link">
                                    <div data-i18n="Checkout">Checkout</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-ecommerce-settings-shipping.html" class="menu-link">
                                    <div data-i18n="Shipping & delivery">Shipping & delivery</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-ecommerce-settings-locations.html" class="menu-link">
                                    <div data-i18n="Locations">Locations</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-ecommerce-settings-notifications.html" class="menu-link">
                                    <div data-i18n="Notifications">Notifications</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- e-commerce-app menu end -->
            <!-- Academy menu start -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-notebook-outline"></i>
                    <div data-i18n="Academy">Academy</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="app-academy-dashboard.html" class="menu-link">
                            <div data-i18n="Dashboard">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-academy-course.html" class="menu-link">
                            <div data-i18n="My Course">My Course</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-academy-course-details.html" class="menu-link">
                            <div data-i18n="Course Details">Course Details</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Academy menu end -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-truck-outline"></i>
                    <div data-i18n="Logistics">Logistics</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="app-logistics-dashboard.html" class="menu-link">
                            <div data-i18n="Dashboard">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-logistics-fleet.html" class="menu-link">
                            <div data-i18n="Fleet">Fleet</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
                    <div data-i18n="Invoice">Invoice</div>
                    <div class="badge bg-danger rounded-pill ms-auto">4</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="app-invoice-list.html" class="menu-link">
                            <div data-i18n="List">List</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-invoice-preview.html" class="menu-link">
                            <div data-i18n="Preview">Preview</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-invoice-edit.html" class="menu-link">
                            <div data-i18n="Edit">Edit</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-invoice-add.html" class="menu-link">
                            <div data-i18n="Add">Add</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                    <div data-i18n="Users">Users</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="app-user-list.html" class="menu-link">
                            <div data-i18n="List">List</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="View">View</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-user-view-account.html" class="menu-link">
                                    <div data-i18n="Account">Account</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-user-view-security.html" class="menu-link">
                                    <div data-i18n="Security">Security</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-user-view-billing.html" class="menu-link">
                                    <div data-i18n="Billing & Plans">Billing & Plans</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-user-view-notifications.html" class="menu-link">
                                    <div data-i18n="Notifications">Notifications</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-user-view-connections.html" class="menu-link">
                                    <div data-i18n="Connections">Connections</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-shield-outline"></i>
                    <div data-i18n="Roles & Permissions">Roles & Permissions</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="app-access-roles.html" class="menu-link">
                            <div data-i18n="Roles">Roles</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-access-permission.html" class="menu-link">
                            <div data-i18n="Permission">Permission</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-file-outline"></i>
                    <div data-i18n="Pages">Pages</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="User Profile">User Profile</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="pages-profile-user.html" class="menu-link">
                                    <div data-i18n="Profile">Profile</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-profile-teams.html" class="menu-link">
                                    <div data-i18n="Teams">Teams</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-profile-projects.html" class="menu-link">
                                    <div data-i18n="Projects">Projects</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-profile-connections.html" class="menu-link">
                                    <div data-i18n="Connections">Connections</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Account Settings">Account Settings</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="pages-account-settings-account.html" class="menu-link">
                                    <div data-i18n="Account">Account</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-account-settings-security.html" class="menu-link">
                                    <div data-i18n="Security">Security</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-account-settings-billing.html" class="menu-link">
                                    <div data-i18n="Billing & Plans">Billing & Plans</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-account-settings-notifications.html" class="menu-link">
                                    <div data-i18n="Notifications">Notifications</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-account-settings-connections.html" class="menu-link">
                                    <div data-i18n="Connections">Connections</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="pages-faq.html" class="menu-link">
                            <div data-i18n="FAQ">FAQ</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="pages-pricing.html" class="menu-link">
                            <div data-i18n="Pricing">Pricing</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Misc">Misc</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="pages-misc-error.html" class="menu-link" target="_blank">
                                    <div data-i18n="Error">Error</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                                    <div data-i18n="Under Maintenance">Under Maintenance</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                                    <div data-i18n="Coming Soon">Coming Soon</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                                    <div data-i18n="Not Authorized">Not Authorized</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-misc-server-error.html" class="menu-link" target="_blank">
                                    <div data-i18n="Server Error">Server Error</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-lock-outline"></i>
                    <div data-i18n="Authentications">Authentications</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Login">Login</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="auth-login-basic.html" class="menu-link" target="_blank">
                                    <div data-i18n="Basic">Basic</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-login-cover.html" class="menu-link" target="_blank">
                                    <div data-i18n="Cover">Cover</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Register">Register</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                    <div data-i18n="Basic">Basic</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-register-cover.html" class="menu-link" target="_blank">
                                    <div data-i18n="Cover">Cover</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                                    <div data-i18n="Multi-steps">Multi-steps</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Verify Email">Verify Email</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                                    <div data-i18n="Basic">Basic</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                                    <div data-i18n="Cover">Cover</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Reset Password">Reset Password</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                                    <div data-i18n="Basic">Basic</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                                    <div data-i18n="Cover">Cover</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Forgot Password">Forgot Password</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                                    <div data-i18n="Basic">Basic</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                                    <div data-i18n="Cover">Cover</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Two Steps">Two Steps</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                                    <div data-i18n="Basic">Basic</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                                    <div data-i18n="Cover">Cover</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-transit-connection-horizontal"></i>
                    <div data-i18n="Wizard Examples">Wizard Examples</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="wizard-ex-checkout.html" class="menu-link">
                            <div data-i18n="Checkout">Checkout</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="wizard-ex-property-listing.html" class="menu-link">
                            <div data-i18n="Property Listing">Property Listing</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="wizard-ex-create-deal.html" class="menu-link">
                            <div data-i18n="Create Deal">Create Deal</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="modal-examples.html" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-vector-arrange-below"></i>
                    <div data-i18n="Modal Examples">Modal Examples</div>
                </a>
            </li>

            <!-- Components -->
            <li class="menu-header fw-medium mt-4">
                <span class="menu-header-text">Components</span>
            </li>
            <!-- Cards -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                    <div data-i18n="Cards">Cards</div>
                    <div class="badge bg-primary rounded-pill ms-auto">6</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <div data-i18n="Basic">Basic</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-advance.html" class="menu-link">
                            <div data-i18n="Advance">Advance</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-statistics.html" class="menu-link">
                            <div data-i18n="Statistics">Statistics</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-analytics.html" class="menu-link">
                            <div data-i18n="Analytics">Analytics</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-gamifications.html" class="menu-link">
                            <div data-i18n="Gamifications">Gamifications</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-actions.html" class="menu-link">
                            <div data-i18n="Actions">Actions</div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- User interface -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-archive-outline"></i>
                    <div data-i18n="User interface">User interface</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="ui-accordion.html" class="menu-link">
                            <div data-i18n="Accordion">Accordion</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-alerts.html" class="menu-link">
                            <div data-i18n="Alerts">Alerts</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-badges.html" class="menu-link">
                            <div data-i18n="Badges">Badges</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-buttons.html" class="menu-link">
                            <div data-i18n="Buttons">Buttons</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-carousel.html" class="menu-link">
                            <div data-i18n="Carousel">Carousel</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-collapse.html" class="menu-link">
                            <div data-i18n="Collapse">Collapse</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-dropdowns.html" class="menu-link">
                            <div data-i18n="Dropdowns">Dropdowns</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-footer.html" class="menu-link">
                            <div data-i18n="Footer">Footer</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-list-groups.html" class="menu-link">
                            <div data-i18n="List Groups">List groups</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-modals.html" class="menu-link">
                            <div data-i18n="Modals">Modals</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-navbar.html" class="menu-link">
                            <div data-i18n="Navbar">Navbar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-offcanvas.html" class="menu-link">
                            <div data-i18n="Offcanvas">Offcanvas</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                            <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-progress.html" class="menu-link">
                            <div data-i18n="Progress">Progress</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-spinners.html" class="menu-link">
                            <div data-i18n="Spinners">Spinners</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-tabs-pills.html" class="menu-link">
                            <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-toasts.html" class="menu-link">
                            <div data-i18n="Toasts">Toasts</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-tooltips-popovers.html" class="menu-link">
                            <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="ui-typography.html" class="menu-link">
                            <div data-i18n="Typography">Typography</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Extended components -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-star-outline"></i>
                    <div data-i18n="Extended UI">Extended UI</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="extended-ui-avatar.html" class="menu-link">
                            <div data-i18n="Avatar">Avatar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extended-ui-blockui.html" class="menu-link">
                            <div data-i18n="BlockUI">BlockUI</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extended-ui-drag-and-drop.html" class="menu-link">
                            <div data-i18n="Drag & Drop">Drag &amp; Drop</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extended-ui-media-player.html" class="menu-link">
                            <div data-i18n="Media Player">Media Player</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                            <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extended-ui-star-ratings.html" class="menu-link">
                            <div data-i18n="Star Ratings">Star Ratings</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extended-ui-sweetalert2.html" class="menu-link">
                            <div data-i18n="SweetAlert2">SweetAlert2</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extended-ui-text-divider.html" class="menu-link">
                            <div data-i18n="Text Divider">Text Divider</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Timeline">Timeline</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="extended-ui-timeline-basic.html" class="menu-link">
                                    <div data-i18n="Basic">Basic</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                                    <div data-i18n="Fullscreen">Fullscreen</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="extended-ui-tour.html" class="menu-link">
                            <div data-i18n="Tour">Tour</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extended-ui-treeview.html" class="menu-link">
                            <div data-i18n="Treeview">Treeview</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="extended-ui-misc.html" class="menu-link">
                            <div data-i18n="Miscellaneous">Miscellaneous</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Icons -->
            <li class="menu-item">
                <a href="icons-mdi.html" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                    <div data-i18n="Icons">Icons</div>
                </a>
            </li>

            <!-- Forms & Tables -->
            <li class="menu-header fw-medium mt-4">
                <span class="menu-header-text">Forms &amp; Tables</span>
            </li>
            <!-- Forms -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-form-select"></i>
                    <div data-i18n="Form Elements">Form Elements</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="forms-basic-inputs.html" class="menu-link">
                            <div data-i18n="Basic Inputs">Basic Inputs</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-input-groups.html" class="menu-link">
                            <div data-i18n="Input groups">Input groups</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-custom-options.html" class="menu-link">
                            <div data-i18n="Custom Options">Custom Options</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-editors.html" class="menu-link">
                            <div data-i18n="Editors">Editors</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-file-upload.html" class="menu-link">
                            <div data-i18n="File Upload">File Upload</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-pickers.html" class="menu-link">
                            <div data-i18n="Pickers">Pickers</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-selects.html" class="menu-link">
                            <div data-i18n="Select & Tags">Select &amp; Tags</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-sliders.html" class="menu-link">
                            <div data-i18n="Sliders">Sliders</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-switches.html" class="menu-link">
                            <div data-i18n="Switches">Switches</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="forms-extras.html" class="menu-link">
                            <div data-i18n="Extras">Extras</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
                    <div data-i18n="Form Layouts">Form Layouts</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="form-layouts-vertical.html" class="menu-link">
                            <div data-i18n="Vertical Form">Vertical Form</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="form-layouts-horizontal.html" class="menu-link">
                            <div data-i18n="Horizontal Form">Horizontal Form</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="form-layouts-sticky.html" class="menu-link">
                            <div data-i18n="Sticky Actions">Sticky Actions</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-dots-horizontal"></i>
                    <div data-i18n="Form Wizard">Form Wizard</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="form-wizard-numbered.html" class="menu-link">
                            <div data-i18n="Numbered">Numbered</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="form-wizard-icons.html" class="menu-link">
                            <div data-i18n="Icons">Icons</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="form-validation.html" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-checkbox-marked-circle-outline"></i>
                    <div data-i18n="Form Validation">Form Validation</div>
                </a>
            </li>
            <!-- Tables -->
            <li class="menu-item">
                <a href="tables-basic.html" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-table"></i>
                    <div data-i18n="Tables">Tables</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-grid"></i>
                    <div data-i18n="Datatables">Datatables</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="tables-datatables-basic.html" class="menu-link">
                            <div data-i18n="Basic">Basic</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="tables-datatables-advanced.html" class="menu-link">
                            <div data-i18n="Advanced">Advanced</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="tables-datatables-extensions.html" class="menu-link">
                            <div data-i18n="Extensions">Extensions</div>
                        </a>
                    </li>
                </ul>
            </li> --}}

            <!-- Charts & Maps -->
            {{-- <li class="menu-header fw-medium mt-4">
                <span class="menu-header-text">Charts &amp; Maps</span>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-chart-pie-outline"></i>
                    <div data-i18n="Charts">Charts</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="charts-apex.html" class="menu-link">
                            <div data-i18n="Apex Charts">Apex Charts</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="charts-chartjs.html" class="menu-link">
                            <div data-i18n="ChartJS">ChartJS</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="maps-leaflet.html" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-map-outline"></i>
                    <div data-i18n="Leaflet Maps">Leaflet Maps</div>
                </a>
            </li> --}}

            <!-- Misc -->
            <li class="menu-header fw-medium mt-4">
                <span class="menu-header-text">Misc</span>
            </li>
            <li class="menu-item">
                <a href="https://pixinvent.ticksy.com/" target="_blank" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-lifebuoy"></i>
                    <div data-i18n="Support">Support</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/" target="_blank"
                    class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
                    <div data-i18n="Documentation">Documentation</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/" target="_blank"
                    class="menu-link">
                        <i class="menu-icon tf-icons mdi mdi-cog"></i>
                    <div data-i18n="Documentation">Configuracion</div>
                </a>
            </li>

        </ul>
    </aside>









</div>
