<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/ico" >

        <title>{{ config('app.name', 'Odines') }}</title>

        <!-- Bootstrap -->
        <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{ asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">        
        <!-- bootstrap-progressbar -->
        <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{ asset('vendors/jqvmap/dist/jqvmap.min.css') }" rel="stylesheet" >
        <!-- bootstrap-daterangepicker -->
        <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">        
        <!-- some CSS styling changes and overrides -->
        <link href="{{ asset('build/js/inputfile.css') }}" >
        

    </head>
    <body class="nav-md">
        
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="{{ route('index') }}" class="site_title" ><i class="fa fa-paw"></i> <span>@yield('odine')</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="{{ Auth::user()->photo == null ?  asset('images/user.png') : upload/Auth::user()->photo }}" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Benvindo,</span>
                                <h2>{{ Auth::user()->name.' '.Auth::user()->lastname}}</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->
                        <br />
                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Menu</h3>
                                <ul class="nav side-menu">
                                    <li><a href="{{ route('index') }}"><i class="fa fa-home"></i> Home </a></li>
                                    <li>
                                        <a>
                                            <i class="fa fa-users"></i> Utilizador
                                            <span class="fa fa-chevron-down"></span>
                                        </a>
                                        <ul class="nav child_menu">
                                            @if( Auth::user()->rol_id == 1)
                                                    <li><a href="{{ route('solicitForm') }}">Solicitar Utilizador</a></li>
                                                    <li><a href="{{ route('profileForm') }}">Editar Utilizador</a></li>                                                    
                                                @elseif( Auth::user()->rol_id == 2 )
                                                    <li><a href="{{ route('profileForm') }}">Editar Utilizador</a></li>
                                                @elseif( Auth::user()->rol_id == 3 )                                                    
                                                    <li><a href="{{ route('registerForm') }}">Registrar Utilizador</a></li>
                                                    <li><a href="{{ route('profileForm') }}">Editar Utilizador</a></li>
                                                    <li><a href="{{ route('inactiveList') }}">Utilizador Bloqueado</a></li>
                                                    <li><a href="{{ route('waitingList') }}">Utilizador Pendente</a></li>
                                            @endif                                                                                                     
                                        </ul>
                                    </li>
                                    @if(Auth::user()->rol_id == 1 || Auth::user()->rol_id == 2)
                                        <li>
                                            <a>
                                                    <i class="fa fa-desktop"></i> Investigação 
                                                    <span class="fa fa-chevron-down"></span>
                                            </a>
                                            <ul class="nav child_menu">
                                                    <li><a href="{{ route('investigationForm') }}">Nova Designação</a></li>
                                                    <li><a href="{{ route('BoardForm') }}">Preencher Investigação</a></li>
                                                    <li><a href="{{ route('showInvestigation') }}">Ver Investigação</a></li>                                        
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-file"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href=" ">Relatório 1</a></li>
                                                <li><a href=" ">Relatório 2</a></li>
                                            </ul>
                                        </li>
                                    @endif
                                    @if(Auth::user()->rol_id == 3)
                                        <li><a><i class="fa fa-home"></i>DADG<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="{{ route('dadgAnalise') }}">Analisar Planos</a></li>
                                                <li><a href="{{ route('dadgAprovado') }}">Planos Aprovados</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-home"></i> DGAs </a></li>
                                        <li><a href="#"><i class="fa fa-home"></i> Ponto Focal </a></li>
                                        <li><a href="#"><i class="fa fa-home"></i> DID </a></li>
                                    @endif                                    
                                </ul>
                            </div>
                        </div>                        
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" 
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf                            
                                </form>
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                    @include('layouts.navigation')
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    @yield('page_content')                 
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Todos Direitos Reservados ODINES
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>
    

        <!-- jQuery -->
        <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
        <!-- NProgress -->
        <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
        <!-- validator -->
        <script src="{{ asset('vendors/validator/validator.js') }}"></script>
        <!-- Chart.js -->
        <script src="{{ asset('vendors/Chart.js/dist/Chart.min.js') }}"></script>
        <!-- gauge.js -->
        <script src="{{ asset('vendors/gauge.js/dist/gauge.min.js') }}"></script>
        <!-- bootstrap-progressbar -->
        <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <!-- iCheck -->
        <script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>
        <!-- Skycons -->
        <script src="{{ asset('vendors/skycons/skycons.js') }}"></script>
        <!-- Flot -->
        <script src="{{ asset('vendors/Flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('vendors/Flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('vendors/Flot/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('vendors/Flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('vendors/Flot/jquery.flot.resize.js') }}"></script>
        <!-- Flot plugins -->
        <script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
        <script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
        <script src="{{ asset('vendors/flot.curvedlines/curvedLines.js') }}"></script>
        <!-- DateJS -->
        <script src="{{ asset('vendors/DateJS/build/date.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
        <script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
        <script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="{{ asset('vendors/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset('build/js/custom.min.js') }}"></script>
        <script src="{{ asset('build/js/inputfile.js') }}"></script>

    </body>
</html>