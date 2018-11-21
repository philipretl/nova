<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="pull-left image">
	                                    <img src="{{URL('img/user.png')}}" class="img-circle user-img-circle" alt="User Image" />
	                                </div>
	                                <div class="pull-left info">
	                                    <p> {{Auth::user()->users_nombre}}</p>
	                                </div>
	                            </div>
	                        </li>
	                        <li class="nav-item @if(Route::current()->getName() == 'Dashboard') active @endif">
	                            <a href="{{URL('/Dashboard')}}" class="nav-link"> <i class="fa fa-tachometer"></i> <span class="title">Dashboard</span>
	                            </a>
	                        </li>

	                   		<li class="nav-item @if(Route::current()->getName() == 'CrearUsuarios' || Route::current()->getName() == 'ListarUsuarios' || Route::current()->getName() == 'MostrarUsuario') active open @endif ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-user-md"></i>
	                                <span class="title">Usuarios</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                               
	                                <li class="nav-item @if(Route::current()->getName() == 'CrearUsuarios' || Route::current()->getName() == 'MostrarUsuario') active @endif">
	                                    <a href="{{URL('CrearUsuarios')}}" class="nav-link "> <span class="title">Crear Usuario</span>
	                                    </a>
	                                </li>
									 <li class="nav-item @if(Route::current()->getName() == 'ListarUsuarios') active @endif">
	                                    <a href="{{URL('ListarUsuarios')}}" class="nav-link "> <span class="title">Listar Usuarios</span>
	                                    </a>
	                                </li>
	                              
	                            </ul>
	                        </li>

	                        <li class="nav-item @if(Route::current()->getName() == 'CrearAliados' || Route::current()->getName() == 'ListarAliados' || Route::current()->getName() == 'MostrarAliado') active open @endif ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-users"></i>
	                                <span class="title">Aliados</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                               
	                                <li class="nav-item @if(Route::current()->getName() == 'CrearAliados' || Route::current()->getName() == 'MostrarAliado') active @endif">
	                                    <a href="{{URL('CrearAliados')}}" class="nav-link "> <span class="title">Crear Aliado</span>
	                                    </a>
	                                </li>
									 <li class="nav-item @if(Route::current()->getName() == 'ListarAliados') active @endif">
	                                    <a href="{{URL('ListarAliados')}}" class="nav-link "> <span class="title">Listar Aliados</span>
	                                    </a>
	                                </li>
	                              
	                            </ul>
	                        </li>

	                        <li class="nav-item @if(Route::current()->getName() == 'ListarCompras') active @endif">
	                            <a href="{{URL('/ListarCompras/2')}}" class="nav-link"> <i class="fa fa-shopping-bag"></i> <span class="title">Compras</span>
	                            </a>
	                        </li>

	                        <li class="nav-item @if(Route::current()->getName() == 'ListarCreditos') active @endif">
	                            <a href="{{URL('/ListarCreditos')}}" class="nav-link"> <i class="fa fa-money"></i> <span class="title">Créditos</span>
	                            </a>
	                        </li>

							<li class="nav-item @if(Route::current()->getName() == 'CrearProductos' || Route::current()->getName() == 'ListarProductos' || Route::current()->getName() == 'MostrarProducto') active open @endif ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-eye"></i>
	                                <span class="title">Productos</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item @if(Route::current()->getName() == 'CrearProductos' || Route::current()->getName() == 'MostrarProducto') active @endif">
	                                    <a href="{{URL('CrearProductos')}}" class="nav-link "> <span class="title">Crear Producto</span>
	                                    </a>
	                                </li>
	                              
	                                <li class="nav-item @if(Route::current()->getName() == 'ListarProductos') active @endif">
	                                    <a href="{{URL('ListarProductos')}}" class="nav-link "> <span class="title">Listar Productos</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>

	                        <li class="nav-item @if(Route::current()->getName() == 'CrearOfertas' || Route::current()->getName() == 'ListarOfertas' || Route::current()->getName() == 'MostrarOferta') active open @endif ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-shopping-cart"></i>
	                                <span class="title">CityOfertas</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item @if(Route::current()->getName() == 'CrearOfertas' || Route::current()->getName() == 'MostrarOferta') active @endif">
	                                    <a href="{{URL('CrearOfertas')}}" class="nav-link "> <span class="title">Crear Oferta</span>
	                                    </a>
	                                </li>
	                              
	                                <li class="nav-item @if(Route::current()->getName() == 'ListarOfertas') active @endif">
	                                    <a href="{{URL('ListarOfertas')}}" class="nav-link "> <span class="title">Listar Ofertas</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>


							 <li class="nav-item @if(Route::current()->getName() == 'CrearMarcas' || Route::current()->getName() == 'ListarMarcas' || Route::current()->getName() == 'MostrarMarca') active open @endif ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-facebook"></i>
	                                <span class="title">CityMarcas</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item @if(Route::current()->getName() == 'CrearMarcas' || Route::current()->getName() == 'MostrarMarca') active @endif">
	                                    <a href="{{URL('CrearMarcas')}}" class="nav-link "> <span class="title">Crear Marca</span>
	                                    </a>
	                                </li>
	                              
	                                <li class="nav-item @if(Route::current()->getName() == 'ListarMarcas') active @endif">
	                                    <a href="{{URL('ListarMarcas')}}" class="nav-link "> <span class="title">Listar Marcas</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>

	                         <li class="nav-item @if(Route::current()->getName() == 'CrearAyudas'  || Route::current()->getName() == 'ListarAyudas' || Route::current()->getName() == 'ListarAyudasDetalles' || Route::current()->getName() == 'MostrarAyuda') active open @endif ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-question"></i>
	                                <span class="title">CityAyudas</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item @if(Route::current()->getName() == 'CrearAyudas' || Route::current()->getName() == 'MostrarAyuda') active @endif">
	                                    <a href="{{URL('CrearAyudas')}}" class="nav-link "> <span class="title">Crear Ayuda</span>
	                                    </a>
	                                </li>
	                              
	                                <li class="nav-item @if(Route::current()->getName() == 'ListarAyudas') active @endif">
	                                    <a href="{{URL('ListarAyudas')}}" class="nav-link "> <span class="title">Listar Ayudas</span>
	                                    </a>
	                                </li>

	                                <li class="nav-item @if(Route::current()->getName() == 'ListarAyudasDetalles') active @endif">
	                                    <a href="{{URL('ListarAyudasDetalles')}}" class="nav-link "> <span class="title">Información Útil</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>

	                        <li class="nav-item @if(Route::current()->getName() == 'ConfCategorias') active open @endif ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-cogs"></i>
	                                <span class="title">Configuración</span> <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item @if(Route::current()->getName() == 'ConfCategorias') active @endif">
	                                    <a href="{{URL('ConfCategorias')}}" class="nav-link "> <span class="title">Categorías</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>

	                    </ul>
	                </div>
                </div>
            </div>
            <!-- end sidebar menu --> 