<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <meta name="csrf-token" content="{{ csrf_token()}}"/>
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assetsAdmin/img/brand/favicon.png')}}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assetsAdmin/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assetsAdmin/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('assetsAdmin/css/argon.css?v=1.2.0')}}" type="text/css">
    <style>
        .tb{
            color: white;
            font-family: bold;
        }
    </style>
</head>

<body>
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{asset('assetsAdmin/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="{{'home' ==  request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('home')}}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{'products' ==  request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('productsIndex')}}">
                            <i class="fa fa-project-diagram text-red"></i>
                            <span class="nav-link-text">Products</span>
                        </a>
                    </li>
                
   

                    <li class="nav-item">
                        <a class="{{'providers' ==  request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('providers')}}">
                            <i class="ni ni-single-02 text-yellow"></i>
                            <span class="nav-link-text">Providers</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{'orders' ==  request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('orders')}}">
                            <i class="ni ni-bullet-list-67 text-default"></i>
                            <span class="nav-link-text">Orders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                            <a class="{{'notavailable' ==  request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('notavailable')}}">
                            <i class="ni ni-key-25 text-info"></i>
                            <span class="nav-link-text">Out of order</span>
                            </a>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="{{'profile' ==  request()->path() ? 'nav-link active' : 'nav-link'}}" href="{{route('profile')}}">
                            <i class="ni ni-settings-gear-65"></i>
                        <span class="nav-link-text">Profile</span>
                        </a>
                    </a>
                </li>
                 

                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link"
                                      onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt"></i>
                            <span class="nav-link-text">Logout<span>
                                            </a>
                                        </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>



                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->

                <!-- Navigation -->

            </div>
        </div>
    </div>
</nav>
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->
                <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-alternative input-group-merge">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input class="form-control" placeholder="Search" type="text">
                        </div>
                    </div>
                    <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </form>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center  ml-md-auto ">
                    
                
                     
                  
                  
                </ul>
                <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{asset('assets/avatars/'.Auth::user()->avatar)}}">
                  </span>
                                <div class="media-body  ml-2  d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->name}}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                         
                           
                          
                          
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="header bg-primary pb-6">
    <main class="py-4">
        @yield('content')
    </main>
    </div>




        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center  text-lg-left  text-muted">
                        &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{asset('assetsAdmin/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assetsAdmin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assetsAdmin/vendor/js-cookie/js.cookie.js')}}"></script>
<script src="{{asset('assetsAdmin/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('assetsAdmin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<!-- Optional JS -->
<script src="{{asset('assetsAdmin/vendor/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('assetsAdmin/vendor/chart.js/dist/Chart.extension.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('assetsAdmin/js/argon.js?v=1.2.0')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(function () {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('productsList') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'reference', name: 'reference'},
                {data: 'name', name: 'name'},
                {data: 'price', name: 'price'},
                {data: 'state', name: 'state'},
                {data: 'added_at', name: 'added_at'},
               

                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });
</script>


</body>

</html>
