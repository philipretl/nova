<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Producto;
use App\ProductoPrecio;
use App\ProductoImage;
use App\ConfCategoria;
use App\Marca;
use App\Aliado;

use Validator;
use Auth;
use Mail;

class ProductoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Vista Principal Productos
     *
     * @return vista
     */
    public function Index()
    {
        $url='GuardarProducto';
        $Categoria=ConfCategoria::all();
        $Categoria = $Categoria->pluck('conf_cat_nombre', 'id');

        $Marca=Marca::all();
        $Marca = $Marca->pluck('marca_nombre', 'id');

        $Aliado=Aliado::all();
        $Aliado = $Aliado->pluck('FullName', 'id');

        $SubCategoria=array();
    	return view('Productos.CrearProductos',['url'=>$url,
            'Categoria'=>$Categoria,'SubCategoria'=>$SubCategoria,
            'Marca'=>$Marca,'Aliado'=>$Aliado]);
    }

    /**
     * Vista Principal Lista Productos
     *
     * @return vista
     */
    public function ListarProductos()
    {
        $lista_usuarios=Producto::all();
    	return view('Productos.ListarProductos',['ListaProductos'=>$lista_usuarios]);
    }

    /**
     * Proceso de Guardar Producto
     *
     * @return redirect
     */
    public function GuardarProducto(Request $request)
    {   

        $reglas = array(
            'producto_titulo' => 'required',
            'producto_categoria' => 'required',
            'producto_subcategoria' => 'required',
            'producto_marca' => 'required',
            'producto_email' => 'required',
            'producto_nit' => 'required',
            'producto_descripcion' => 'required',
            'producto_palabras_clave' => 'required',
            'producto_imagen.*' => 'required|mimes:jpeg,png,jpg|max:4096'
        );

        $mensajes = array(
            'producto_titulo.required' => 'Titulo Requerido',
            'producto_descripcion.required' => 'Descripción Requerida',
            'producto_palabras_clave.required'  => 'Ingrese alguna palabra clave',
            'producto_imagen.*.required'  => 'La imagen debe estar en formato JPG, JPEG o PNG y pesar menos de 4MB'
        );

        $photos = count($request->file('producto_imagen'));

        $validator = Validator::make($request->all(),$reglas,$mensajes);
        if ($validator->fails()) {
            return redirect('CrearProductos')->withErrors($validator)->withInput();
        }
        else
        {   

            /*$producto_imagen = $request->file('producto_imagen');
            $input['imagen_producto'] = time().rand(7, 15).'.'.$producto_imagen->getClientOriginalExtension();
            $destinationPath = public_path('/img/productos');
            $producto_imagen->move($destinationPath, $input['imagen_producto']);*/

            $Product = new Producto;
            $Product->producto_titulo = $request->producto_titulo;
            $Product->producto_categoria = $request->producto_categoria;
            $Product->producto_subcategoria = $request->producto_subcategoria;
            $Product->producto_marca = $request->producto_marca;
            $Product->producto_aliado = $request->producto_aliado;
            $Product->producto_descripcion = $request->producto_descripcion;
            $Product->producto_letra_chica = $request->producto_letra_chica;
            $Product->producto_email = $request->producto_email;
            $Product->producto_nit = $request->producto_nit;
            $Product->producto_palabras_clave = $request->producto_palabras_clave;
            $Product->producto_imagen = '';
            $Product->producto_estatus = 1;
            $Product->save();
            $Id = $Product->id;

            if ($photos>0){
                foreach ($request->file('producto_imagen') as $producto_imagen) {
                    $input['imagen_producto'] = time().'-'.rand(1, 99999).'.'.$producto_imagen->getClientOriginalExtension();
                    $destinationPath = public_path('/img/productos');
                    $producto_imagen->move($destinationPath, $input['imagen_producto']);

                    $ProductoImage = new ProductoImage;
                    $ProductoImage->productoi_id = $Id;
                    $ProductoImage->productoi_url = $input['imagen_producto'];
                    $ProductoImage->save();
                }
            }

            for ($i=0; $i <=$request->precios_index ; $i++) { 
                $producto_titulo = @$request['productop_titulo'][$i];
                if ($producto_titulo !=NULL)
                {
                $productop_total = @$request['productop_total'][$i];
                $productop_descuento = @$request['productop_descuento'][$i];
                $productop_total_descuento = @$request['productop_total_descuento'][$i];
                $productop_slider= @$request['productop_slider'][$i];
                $productop_cantidad = @$request['productop_cantidad'][$i];

                if ($productop_slider==""){$productop_slider=0;}else{$productop_slider=1;}
                    $ProductoPrecio = new ProductoPrecio;
                    $ProductoPrecio->productop_id = $Id;
                    $ProductoPrecio->productop_titulo = $producto_titulo;
                    $ProductoPrecio->productop_total = $productop_total;
                    $ProductoPrecio->productop_descuento = $productop_descuento;
                    $ProductoPrecio->productop_total_descuento = $productop_total_descuento;
                    $ProductoPrecio->productop_slider = $productop_slider;
                    $ProductoPrecio->productop_cantidad = $productop_cantidad;
                    $ProductoPrecio->productop_estatus = 1;
                    $ProductoPrecio->save();
                }
            }

            Mail::send('Email.BodyEmail', ['Datos' => $Product,'tipo'=>'NuevoProducto'], 
            function ($mail) use ($request) {
                $mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                $mail->to($request->producto_email, $request->nit)->subject('Se ha creado un nuevo producto');
            });

            return redirect('ListarProductos')->with('mensaje', 'Producto Guardado')
            ->with('tipo', 'success');
        }

    }

    /**
     * Eliminar Registro de Producto
     *
     * @return void
     */
    public function EliminarProducto(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $Product = Producto::find($id);   
        $Product->delete();
    }

    /**
     * Editar Registro de Producto
     *
     * @return view
     */
    public function MostrarProducto(Request $request)
    {
        $id=Crypt::decrypt($request->id);
        $Producto = Producto::find($id);

        $Categoria=ConfCategoria::all();
        $Categoria = $Categoria->pluck('conf_cat_nombre', 'id');

        $Marca=Marca::all();
        $Marca = $Marca->pluck('marca_nombre', 'id');

        $Aliado=Aliado::all();
        $Aliado = $Aliado->pluck('FullName', 'id');

        $SubCategoria=array();

        $url='ActualizarProducto';
        return view('Productos.CrearProductos',['Producto'=>$Producto,'url'=>$url,
        'Categoria'=>$Categoria,'SubCategoria'=>$SubCategoria,'Marca'=>$Marca,'Aliado'=>$Aliado]);
    }

    /**
     * Actualizar Registro de Producto
     *
     * @return view
     */
    public function ActualizarProducto(Request $request)
    {   
        $reglas = array(
            'producto_titulo' => 'required',
            'producto_categoria' => 'required',
            'producto_subcategoria' => 'required',
            'producto_marca' => 'required',
            'producto_email' => 'required',
            'producto_nit' => 'required',
            'producto_descripcion' => 'required',
            'producto_palabras_clave' => 'required',
            'producto_imagen' => 'required_if:cambiar_imagen,1|image|mimes:jpeg,png,jpg|max:2048'
        );
        $mensajes = array(
            'producto_titulo.required' => 'Titulo Requerido',
            'producto_descripcion.required' => 'Descripción Requerida',
            'producto_palabras_clave.required'  => 'Ingrese alguna palabra clave',
            'producto_imagen.required_if' => 'Si presiona Cambiar Imagen, Debe Seleccionar una imagen (jpeg,png,jpg)'
        );

        $validator = Validator::make($request->all(),$reglas,$mensajes);
        
        if ($validator->fails()) {
            return redirect('MostrarProducto/'.$request->Id)->withErrors($validator)->withInput();
        }
        else{
            $Id=Crypt::decrypt($request->Id);
            $Product = Producto::find($Id);

            /* ACTUALIZADOS DATOS DE LA TABLA Product*/
            $Product->fill(
                array(
                    'producto_titulo' => $request->producto_titulo,
                    'producto_categoria' => $request->producto_categoria,
                    'producto_subcategoria' => $request->producto_subcategoria,
                    'producto_marca' => $request->producto_marca,
                    'producto_aliado' => $request->producto_aliado,
                    'producto_descripcion' => $request->producto_descripcion,
                    'producto_letra_chica' => $request->producto_letra_chica,
                    'producto_email' => $request->producto_email,
                    'producto_nit' => $request->producto_nit,
                    'producto_palabras_clave' => $request->producto_palabras_clave
                )
            );
            $Product->save();

            if ($request->cambiar_imagen == 1){
                $producto_imagen = $request->file('producto_imagen');
                $input['imagen_producto'] = time().'.'.$producto_imagen->getClientOriginalExtension();
                $destinationPath = public_path('/img/productos');
                $producto_imagen->move($destinationPath, $input['imagen_producto']);
                $Product->fill(
                    array(
                        'producto_imagen' => $input['imagen_producto']
                    )
                );
                $Product->save();
            }

            
            /*//ELIMINAR REGISTROS QUE NO SON OFERTAS
            $ProductoPrecio = ProductoPrecio::where('productop_id',$Id)->where('productop_oferta',0)->get();

            if (count($ProductoPrecio)>0) {
                $Product->Precios()->delete();
            }*/

            for ($i=0; $i <=$request->precios_index ; $i++) { 
                $producto_id = @$request['id'][$i];
                $productop_titulo = @$request['productop_titulo'][$i];
                $productop_total = @$request['productop_total'][$i];
                $productop_descuento = @$request['productop_descuento'][$i];
                $productop_total_descuento = @$request['productop_total_descuento'][$i];
                $productop_cantidad = @$request['productop_cantidad'][$i];
                $productop_slider = @$request['productop_slider'][$i];
                if ($productop_slider==""){$productop_slider=0;}else{$productop_slider=1;}

                if ($producto_id ==NULL)
                {
                    $ProductoPrecio = new ProductoPrecio;
                    $ProductoPrecio->productop_id = $Id;
                    $ProductoPrecio->productop_titulo = $productop_titulo;
                    $ProductoPrecio->productop_total = $productop_total;
                    $ProductoPrecio->productop_descuento = $productop_descuento;
                    $ProductoPrecio->productop_total_descuento = $productop_total_descuento;
                    $ProductoPrecio->productop_slider = $productop_slider;
                    $ProductoPrecio->productop_cantidad = $productop_cantidad;
                    $ProductoPrecio->productop_estatus = 1;
                    $ProductoPrecio->save();
                }else{
                    $ProductoPrecio = ProductoPrecio::find($producto_id);
                    $ProductoPrecio->fill(
                        array(
                            'productop_titulo' => $productop_titulo,
                            'productop_total' => $productop_total,
                            'productop_descuento' => $productop_descuento,
                            'productop_total_descuento' => $productop_total_descuento,
                            'productop_slider' => $productop_slider,
                            'productop_cantidad' => $productop_cantidad,
                            'productop_estatus' => 1
                        )
                    );
                    $ProductoPrecio->save();
                }
            }

            return redirect('ListarProductos')->with('mensaje', 'Producto Actualizado')->with('tipo', 'success');
        }
    }

    /**
     * Ajax para traer subcategoria
     *
     * @return json
     */
    public function SubCategoria_Select(Request $request)
    {
        $id=$request->id;
        $SubCategorias = ConfCategoria::SubCategoriasLista($id);

        if (count($SubCategorias)==null){
            $datosjson=0;
        }else{
            foreach ($SubCategorias as $valor) {
                    $datosjson[]=array('id' => $valor->id ,'text' => $valor->conf_subcat_nombre);
            }
        }
        return response()->json($datosjson);
    }

    /**
     * Ver Detalle Producto
     *
     * @return view
     */
    public function DetalleProducto(Request $request)
    {
        $Producto = Producto::find($request->id);
        return view('Productos.DetalleProducto',['Producto'=>$Producto]);
    }

    /**
     * Desactivar Precio del Producto
     *
     * @return view
     */
    public function DesactivarPrecio(Request $request)
    {
        $ProductoPrecio = ProductoPrecio::where('id', $request->id)
          ->update(['productop_estatus' =>0]);
        return response()->json($ProductoPrecio);
    }

    
}
