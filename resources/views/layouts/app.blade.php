<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Sistema Farmácia e Consultório')</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    
    @stack('styles')
</head>
<body>
    <div class="container-scroller">
        <!-- Navbar -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top"> 
                <ul class="navbar-nav ms-auto">
                    <!-- Barra de Pesquisa -->
                    <li class="nav-item">
                        <form class="d-flex" action="{{-- route('search') --}}" method="GET">
                            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="query">
                            <button class="btn btn-outline-success" type="submit">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </form>
                    </li>
        
                    <!-- Notificações -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="notificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-bell"></i>
                            <span class="badge bg-danger">3</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="notificationsDropdown">
                            <li><a class="dropdown-item" href="#">Novo pedido</a></li>
                            <li><a class="dropdown-item" href="#">Consulta agendada</a></li>
                            <li><a class="dropdown-item" href="#">Alerta de estoque</a></li>
                        </ul>
                    </li>
        
                    <!-- Detalhes do Usuário -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-account"></i> {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="{{-- route('profile.edit') --}}">Editar Perfil</a></li>
                            <li><a class="dropdown-item" href="{{-- route('settings') --}}">Configurações</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Sair</a></li>
                        </ul>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        
        <!-- Partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="nav-item nav-category">Gestão</li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{-- route('vendas.index') --}}">
                            <i class="menu-icon mdi mdi-cash-register"></i>
                            <span class="menu-title">Vendas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{-- route('consultas.index') --}}">
                            <i class="menu-icon mdi mdi-stethoscope"></i>
                            <span class="menu-title">Consultas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{-- route('estoque.index') --}}">
                            <i class="menu-icon mdi mdi-warehouse"></i>
                            <span class="menu-title">Estoque</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{-- route('relatorios.index') --}}">
                            <i class="menu-icon mdi mdi-chart-bar"></i>
                            <span class="menu-title">Relatórios</span>
                        </a>
                    </li>
                    
                    <!-- Configurações (ignorado para o sistema atual) -->
                    <li class="nav-item nav-category">Configurações</li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{-- route('info') --}}">
                            <i class="menu-icon mdi mdi-information-outline"></i>
                            <span class="menu-title">Informações</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{-- route('permissions') --}}">
                            <i class="menu-icon mdi mdi-shield-account-outline"></i>
                            <span class="menu-title">Permissões</span>
                        </a>
                    </li>
                </ul>
            </nav>   
            <!-- Main Panel -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    @yield('content')
                </div>
                
                <!-- Footer -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
                            © {{ date('Y') }} <a href="#" target="_blank">Farmácia & Consultório</a>
                        </span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                            Feito com <i class="mdi mdi-heart text-danger"></i>
                        </span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    
    @stack('scripts')
</body>
</html>
