<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="index.html" class="brand-wrap">
                <img src="{{asset('admin/asset/imgs/theme/logo.svg')}}" class="logo" alt="Evara Dashboard">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="fa fa-bars" aria-hidden="true"></i> </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item active">
                    <a class="menu-link" href="{{route('dashboard')}}"> <i class="fa fa-home" style="color: #adb5bd; margin-right: 10px; font-size: 24px;"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" > <i class="fa fa-shopping-bag" style="color: #adb5bd; margin-right: 10px; font-size: 24px;"></i>
                        <span class="text">Products</span>
                        
                    </a>
                    
                    <div class="submenu">
                        <a href="{{route('product_add')}}">Add product</a>
                        <a href="{{route('products_list')}}">Product List</a>
                        <a href="{{route('categories')}}">Categories</a>
                    </div>
                    
                     <div class="submenu">  
                        <a href="{{route('categories')}}">Categories</a>
                     </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="#"> <i class="fa fa-shopping-cart" style="color: #adb5bd; margin-right: 10px; font-size: 24px;"></i>
                        <span class="text">Orders</span>
                    </a>
                    <div class="submenu">
                        <a href="{{route('orders_list')}}">Order List</a>
                    </div>
                </li>
  
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="#">  <i  class="fa fa-upload" style="color: #adb5bd; margin-right: 10px; font-size: 24px;"></i>
                        
                        <span class="text">Add product</span>
                    </a>
                    <div class="submenu">
                        <a href="{{route('product_add')}}">Add product</a>
                    </div>
                </li>
               
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="#"> <i class="icon material-icons md-person"></i>
                        <span class="text">Account</span>
                    </a>
                </li>
            </ul>
            <hr>
            <br>
            <br>
        </nav>
    </aside>
    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform">
                    <div class="input-group">
                        <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                        <button class="btn btn-light bg" type="button"> <i class="fa fa-search"></i></button>
                    </div>
                    <datalist id="search_terms">
                        <option value="Products">
                        <option value="New orders">
                        <option value="Apple iphone">
                        <option value="Ahmed Hassan">
                    </datalist>
                </form>
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn-icon" href="#">
                            <i class="fa fa-bell"></i>
                            <span class="badge rounded-pill">3</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-icon darkmode" href="#"> <i class="fa fa-moon-o"></i> </a>
                    </li>
                         </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownLanguage" aria-expanded="false"><i class="fa fa-user"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                            <a class="dropdown-item text-brand" href="#"><img src="{{asset('admin/asset/imgs/theme/flag-us.png')}}" alt="English">English</a>
                            <a class="dropdown-item" href="#"><img src="{{asset('admin/asset/imgs/theme/flag-fr.png')}}" alt="Français">Français</a>
                            <a class="dropdown-item" href="#"><img src="{{asset('admin/asset/imgs/theme/flag-jp.png')}}" alt="Français">日本語</a>
                            <a class="dropdown-item" href="#"><img src="{{asset('admin/asset/imgs/theme/flag-cn.png')}}" alt="Français">中国人</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="{{asset('admin/asset/imgs/people/avatar2.jpg')}}" alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item" href="#"><i class="material-icons md-perm_identity"></i>Edit Profile</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-settings"></i>Account Settings</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a>
                            <a class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help center</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>