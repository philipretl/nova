<!DOCTYPE html>
<!-- saved from url=(0067){{env('APP_URL')}} -->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><script id="tinyhippos-injected">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title>{{config('app.name')}}</title> <!-- The title tag shows in email notifications, like Android 4.4. -->
    <meta name="title" content="{{config('app.name')}}" />
      <meta name="description" content="{{config('app.name')}}" />
      <meta name="keywords" content="{{config('app.name')}}"/>
      <meta name="robots" content="index,follow" />
      <meta name="author" content="JosueLMM92@gmail.com" />
      <link rel="author" href="JosueLMM92@gmail.com"/>
      <link rel="publisher" href="JosueLMM92@gmail.com"/>
    <style>
    /* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v5/gG8m82oGcrBJF727xHU04fY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');
  unicode-range: U+02BC, U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200B-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v5/F4YWuALHubF63LLQPw0rMfY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v5/HLBysyo0MQBO_7E-DWLwzg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}


	  * {
                font-family: 'Poppins', 'Poppins', sans-serif;
            }

        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }

        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        img {
            -ms-interpolation-mode:bicubic;
        }
        img[class="service-banner"] {
        	border-radius: 50%;
        	width: 200px;
        	height: 200px;
        	-webkit-transition: all 1s; /* Safari */
    		transition: all 1s;
        }
        img[class="service-banner"]:hover {
        	border-radius: 40%;
        	width: 210px;
        	height: 210px;
        	-webkit-transition: all 1s; /* Safari */
    		transition: all 1s;
        }
		
		.header-td{
			padding: 40px 20px 30px 40px; 
			font-family: 'Poppins', sans-serif;
			}
		.h1-title{
			margin: 0 0 10px 0; 
			font-family: 'Poppins', sans-serif; 
			font-size: 24px; 
			line-height: 42px; 
			color: #111111; 
			font-weight: 600;
			}
		.h1-title-a{
			color: #111111;
			text-decoration: none;
			}
		.header-p{
			margin: 0; 
			font-size: 14px; 
			line-height: 26px; 
			color: #767676; 
			font-weight: normal;
			}
			
		.h2-title{
			margin: 0 0 10px 0; 
			font-family: 'Poppins', sans-serif; 
			font-size: 17px; 
			font-weight: 600;
			line-height: 27px; 
			color: #333333; 
			}
		.h2-title-a{
			color: #333333;
			text-decoration: none;
			}
			
		.services-td-1{
			padding: 30px 20px 32px 20px;
			font-family: 'Poppins', sans-serif;
			}		
			.services-td-2{
			padding: 32px 20px 40px 40px;
			font-family: 'Poppins', sans-serif;
			}
		 .services-p{
			 margin: 0; 
			 font-family: 'Poppins', sans-serif; 
			 font-size: 13px; 
			 line-height: 25px; 
			 color: #4d4d4d; 
			 font-weight: normal;
			 }
			 
		.cta-h1{
			margin: 0 0 10px 0; 
			font-family: 'Poppins', sans-serif; 
			font-size: 34px; 
			line-height: 48px; 
			color: #ffffff; 
			font-weight: 600;
			}
		
		.cta-button{
				background: #f9a51a;
				font-family: 'Poppins', sans-serif;font-size: 14px;
				line-height: 26px;
				text-align: center;
				text-decoration: none;
				display: block;
				padding: 10px 40px 10px 40px;
				border-radius: 3px;
				font-weight: normal; 
				color:#FFF;
				}
				
			.cta-bg-1{
				background: #ed5029; 
				padding: 80px 0px 30px 0px;
				font-family: 'Poppins', sans-serif; 
				text-align: center;
				}
			.cta-bg-2{
				background: #ed5029; 
				padding: 0px 0px 80px 0; 
				font-family: 'Poppins', sans-serif;
				}
			.address-p{
				margin: 0; 
				font-family: 'Poppins', sans-serif; 
				font-size: 10px; 
				line-height: initial; 
				color: #515151; 
				font-weight: normal;
				}
				
			 .subscribe-p{
				 margin: 0; 
				 font-family: 'Poppins', sans-serif; 
				 font-size: 10px; 
				 line-height: initial; 
				 color: #515151; 
				 font-weight: normal;
				 }
			  .subscribe-a{
				  color:#ed5029;
				  text-decoration:underline;
				  }

        *[x-apple-data-detectors],	/* iOS */
        .x-gmail-data-detectors, 	/* Gmail */
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .a6S {
	        display: none !important;
	        opacity: 0.01 !important;
        }
        img.g-img + div {
	        display:none !important;
	   	}

        .button-link {
            text-decoration: none !important;
        }

        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }
		
        @media screen and (max-width: 620px) {
			.email-container p {
				font-size: 14px !important;
				line-height: 26px !important;
			}
			img[class="banner"] {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
            }
			td[class="stack-column-center"]{
					color: #555555 !important;
					font-family: "Poppins",sans-serif !important;
					font-size: 14px !important;
					line-height: 20px !important;
					padding: 19px 0 0 !important;
				}
        }
		@media screen and (max-width: 480px) {
			table[class="container"] {
				width: 320px;
			}
			.header-td {
				font-family: "Poppins",sans-serif !important;
				padding: 40px 20px 30px !important;
			}
			.services-td-1 {
				font-family: "Poppins",sans-serif !important;
				padding: 30px 20px 32px !important;
			}

			.services-td-2 {
				font-family: "Poppins",sans-serif !important;
				padding: 32px 20px 40px 20px !important;
			}
			 td[class="split-mob-1"] {
				padding-right:10px !important;
			 }
			 td[class="split-mob-3"] {
				padding-right:10px !important;
			 }
			 img[class="banner"] {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
            }
		}
		
        @media screen and (max-width: 375px) {
			img[class="service-banner"] {
                width: 120px !important;
                max-width: 120px !important;
                height: 120px !important;
            }
			 img[class="banner"] {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
            }
			table[class="container"]{
				width:320px !important;
				}
			 td[class="split-mob-1"] {
				padding-bottom:15px !important;
				display:block !important;
				width:100% !important;
			 }
			  td[class="split-mob-2"] {
				display:block !important;
				width:100%; !important;
			 }
			 td[class="split-mob-3"] {
				display:block !important;
				width:100%; !important;
				padding-bottom:15px !important;
			 }
			 td[class="split-mob-4"] {
				display:block !important;
				width:100%; !important;
			 }
			 td.split-mob-2, td.split-mob-4, td.stack-column-center {
				padding-left: 0 !important;
			}
			.email-container p {
				font-size: 13px !important;
    			line-height: 25px !important;
			}
			.header-td{
				padding: 20px 15px 15px 20px !important;;
				font-family: 'Poppins', sans-serif !important;;
				}
			td.services-td-1{
				padding: 10px 20px 15px 20px !important;;
				font-family: 'Poppins', sans-serif !important;;
				}
			.services-td-2{
				padding: 10px 20px 15px 20px !important;;
				font-family: 'Poppins', sans-serif !important;;
				}
			.cta-bg-1 {
				background: #ed5029 !important;;
				padding: 40px 0px 15px 0px !important;;
				font-family: 'Poppins', sans-serif !important;;
				text-align: center !important;;
			}
			.cta-h1{
				color: #ffffff !important;
				font-family: "Poppins",sans-serif !important;
				font-size: 24px !important;
				font-weight: 600 !important;
				line-height: 40px !important;
				margin: 0 0 10px !important;
				}
        }

		table.blueTable td, table.blueTable th {
		  border: 1px solid #AAAAAA;
		  padding: 3px 2px;
		}
		table.blueTable tbody td {
		  font-size: 13px;
		}
		table.blueTable tr:nth-child(even) {
		  background: #D0E4F5;
		}
		table.blueTable thead {
		  background: #1C6EA4;
		  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
		  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
		  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
		  border-bottom: 2px solid #444444;
		}
		table.blueTable thead th {
		  font-size: 15px;
		  font-weight: bold;
		  color: #FFFFFF;
		  border-left: 2px solid #D0E4F5;
		}
		table.blueTable thead th:first-child {
		  border-left: none;
		}

    </style>
    
    <!--[if gte mso 9]>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    
</head>
<body width="100%" bgcolor="#ffffff" style="margin: 0; mso-line-height-rule: exactly;">
    <center style="width: 100%; background: #ffffff; text-align: left;">

     
        <!--
            Set the email width. Defined in two places:
            1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 620px.
            2. MSO tags for Desktop Windows Outlook enforce a 620px width.
        -->
        <div style="max-width: 620px; margin: auto;" class="email-container">
            <!--[if mso]>
            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="620" align="center">
            <tr>
            <td>
            <![endif]-->

            <!-- Email Header : BEGIN --><!-- Email Header : END -->

            <!-- Email Body : BEGIN -->
            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 620px;">

                <!-- Hero Image, Flush : BEGIN -->
                <tbody><tr>
                    <td bgcolor="#ffffff">
                        <a href="{{env('APP_URL')}}" target="_blank">
                        <img src="{{env('APP_URL')}}/assets_page/logo_little.png" aria-hidden="true" width="687" height="118" alt="{{env('APP_NAME')}}" border="0" align="center" style="width: 100%; max-width: 620px; height: auto; font-family: &#39;Poppins&#39;, sans-serif; font-size: 15px; line-height: 20px; color: #555555;" class="g-img">
                    	</a>
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td bgcolor="#ffffff">
                        <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tbody><tr>
                                <td class="header-td" style="padding: 40px 60px 30px 40px; font-family: &#39;Poppins&#39;, sans-serif;">
                                    <h1 class="h1-title" style="text-align: center;margin: 0 0 10px 0; font-family: &#39;Poppins&#39;, sans-serif; font-size: 24px; line-height: 42px; color: #111111; font-weight: 600;"><a href="{{env('APP_URL')}}"  target="_blank" class="h1-title-a" style="color: #111111; text-decoration: none;">{{config('app.name')}}</a></h1>

									@if ($tipo=='RegistroUsuario')
                                    <p class="header-p" style="margin: 0; font-size: 14px; line-height: 26px; color: #767676; font-weight: normal;text-align: justify;">
									Gracias por Registrarte en {{config('app.name')}}. 
									Somos una empresa innovadora, creada con la motivación de que veas, sientas y disfrutes tu ciudad de una forma que no conocías. Traemos a ti los mejores descuentos en todos los sectores para que te deleites día a día con ese gusto que no te has dado aún, como ese anhelado viaje, esa deliciosa cena, un sorprendente cambio de look o un súper plan en pareja.

									<a href="{{config('app.url')}}/login"><h3>Inicia Sesión y Comienza a Disfrutar de {{config('app.name')}}</h3></a>
                                     </p>
                                     @endif

									@if ($tipo=='ProcesarCupones')
                                    <p class="header-p" style="margin: 0; font-size: 14px; line-height: 26px; color: #767676; font-weight: normal;text-align: justify;">

                                    Felicidades. <strong> Ya eres acreedor de los siguientes Cuponcity</strong> <br>
									<table class="blueTable" style="border: 1px solid #1C6EA4;background-color: #EEEEEE;width: 100%;text-align: left;border-collapse: collapse;">
									<thead style="background: #1C6EA4;background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);border-bottom: 2px solid #444444;color:white;">
										<tr>
										<th>Producto</th>
										<th>Cantidad</th>
										<th>Total Unidad</th>
										<th>Total</th>
										</tr>
									</thead>
                    				@foreach ($ListaCompra as $compras)
									<tbody>
										<tr>
											<td>
												<?php @$url=\App\Producto::ImagenUno($compras->DatosProductoPrecio->DatosProducto->id); ?>

											<img src="{{URL('public/img/productos/'.$url)}}" alt="{{$compras->DatosProductoPrecio->DatosProducto->producto_titulo}}" style="width:70px;"> &nbsp;
												{{$compras->DatosProductoPrecio->DatosProducto->producto_titulo}}<sub><br>{{$compras->DatosProductoPrecio->productop_titulo}}</sub><br>
											@if ($compras->compra_oferta == 1) 
                                                <span class="label label-danger label-sm">Oferta disponible hasta {{FormatDate_YMD_DMY($compras->compra_oferta_fecha_fin)}}</span>
                                            @endif
                                        	</td>
											<td>{{$compras->compra_cantidad}} $</td>
											<td>{{formato_cantidad_normal($compras->compra_total)}} $</td>
											<td>{{formato_cantidad_normal($compras->compra_cantidad*$compras->compra_total)}} $</td>
										</tr>
									</tbody>
				                    @endforeach
									</table>
									<br>
									<h3 style="color: #767676;">¿Ya compré mi city cupón y ahora qué sigue?</h3>
									<p style="color: #767676;">
¿Ya compré mi city cupón y ahora qué sigue?<br>
1. Puedes consignar en la cuenta que aparece en tu cuponcity, una vez tengas el comprobante lo puedes enviar vía email o WhatsApp, y listo nos encargamos del resto para que disfrutes tu CUPONCITY. <br>
BANCOLOMBIA S.A<br>
JULIO CESAR MAYA BASTIDAS<br>
CC 98385333<br>
Cuenta de Ahorro No. 261-859059-25<br><br>
2. Acércate directamente a nuestras oficinas en la Cra. 6 A 23N 29 Ciudad Jardín Popayán, allí puedes cancelar tu CUPONCITY, te hacemos la impresión para que lo redimas en el establecimiento correspondiente, o si es el caso redimirlo ahí mismo<br><br>
3. Listo: disfruta tu CUPONCITY <br>
Visítanos cuando quieras, día a día tendremos para ti ofertas inigualables para que Veas, Sientas Y Disfrutes Tu Ciudad De Una Forma que no Conocías...<br>
Próximamente tendremos para ti una extensa plataforma de pagos para facilitar tu experiencia<br>

</p>
                                     @endif

                                     @if ($tipo=='ContactenosAyuda')
                                    <p class="header-p" style="margin: 0; font-size: 14px; line-height: 26px; color: #767676; font-weight: normal;text-align: justify;">
									<ul>
										<li><span class="bold">Tipo de Consulta: </span>{{$Tipo->ayudas_cat_nombre}}</li>
										<li><span class="bold">Motivo de Consulta: </span>{{$Motivo->ayudas_titulo}}</li>
										<li><span class="bold">Nombre: </span> {{$Datos->nombre}}</li>
										<li><span class="bold">Email: </span> {{$Datos->email}}</li>
										<li><span class="bold">Mensaje: </span> {{$Datos->mensaje}}</li>
									</ul>

                                     </p>
                                     @endif

                                    @if ($tipo=='Contactenos')
                                    <p class="header-p" style="margin: 0; font-size: 14px; line-height: 26px; color: #767676; font-weight: normal;text-align: justify;">
									<ul>
										<li><span class="bold">Nombre: </span> {{$Datos->nombre}}</li>
										<li><span class="bold">Email: </span> {{$Datos->email}}</li>
										<li><span class="bold">Mensaje: </span> {{$Datos->mensaje}}</li>
									</ul>

                                     </p>
                                     @endif

                                     @if ($tipo=='NuevoProducto')
                                    <p class="header-p" style="margin: 0; font-size: 14px; line-height: 26px; color: #767676; font-weight: normal;text-align: justify;">
                                    <h3 style="color: #767676;">Se ha creado un nuevo producto:</h3>
									<ul>
										<li><span class="bold">{{$Datos->producto_titulo}}</span> </li>
									</ul>
                                     </p>
                                     @endif

                                     @if ($tipo=='ProcesarCompra')
                                    <p class="header-p" style="margin: 0; font-size: 14px; line-height: 26px; color: #767676; font-weight: normal;text-align: justify;">
                                    <h3 style="color: #767676;">Has Comprado un nuevo Producto:</h3>
									<ul>
										<?php @$url=\App\Producto::ImagenUno($Datos->DatosProductoPrecio->DatosProducto->id); ?>
										<li><span class="bold">
											<img src="{{URL('public/img/productos/'.$url)}}" alt="{{$Datos->DatosProductoPrecio->DatosProducto->producto_titulo}}" style="width:70px;"> &nbsp;
											<?php 
											$code_hex = Crypt::encrypt($Datos->compra_codigo_hex);
											$code_int = Crypt::encrypt($Datos->compra_codigo_entero);

											 ?>
											{{$Datos->DatosProductoPrecio->DatosProducto->producto_titulo}}</span> </li>
									</ul>
									<p><a href="{{URL('CuponPDF/'.$code_hex.'/'.$code_int)}}" class="btn">Ver tu Cupón</a></p>
									<p>Recuerda Iniciar Sesión</p>
                                     </p>
                                     @endif

                                    @if ($tipo=='ProcesarCompraDueno')
                                    <p class="header-p" style="margin: 0; font-size: 14px; line-height: 26px; color: #767676; font-weight: normal;text-align: justify;">
                                    <h3 style="color: #767676;">Han Comprado uno de los Cupones:</h3>
									<ul>
										<?php @$url=\App\Producto::ImagenUno($Datos->DatosProductoPrecio->DatosProducto->id); ?>
										<li><span class="bold">
											<img src="{{URL('public/img/productos/'.$url)}}" alt="{{$Datos->DatosProductoPrecio->DatosProducto->producto_titulo}}" style="width:70px;"> &nbsp;
											<?php 
											$code_hex = Crypt::encrypt($Datos->compra_codigo_hex);
											$code_int = Crypt::encrypt($Datos->compra_codigo_entero);

											 ?>
											{{$Datos->DatosProductoPrecio->DatosProducto->producto_titulo}}</span> </li>
									</ul>
									<p>
										<strong>Nombre: </strong> {{$Datos->DatosUsuario->users_nombre}} {{$Datos->DatosUsuario->users_apellido}}<br>
										<strong>Email: </strong> {{$Datos->DatosUsuario->email}}
									</p>
                                     </p>
                                     @endif


                                     @if ($tipo=='Aliado')
                                    <p class="header-p" style="margin: 0; font-size: 14px; line-height: 26px; color: #767676; font-weight: normal;text-align: justify;">
                                    <h3 style="color: #767676;">Se ha creado un nuevo aliado:</h3>
									<ul>
										@if ($Datos->aliado_tipo==1)
										<li><span class="bold">Nombre: </span>{{$Datos->aliado_nombres}} </li>
										<li><span class="bold">Apellido: </span>{{$Datos->aliado_apellidos}} </li>
										@else
										<li><span class="bold">Razon Social: </span>{{$Datos->aliado_razon_social}} </li>
										<li><span class="bold">NIT: </span>{{$Datos->aliado_nit}} </li>
										@endif
										<li><span class="bold">Dirección: </span>{{$Datos->aliado_direccion}} </li>
										<li><span class="bold">Ciudad: </span>{{$Datos->aliado_ciudad}} </li>
										<li><span class="bold">Pais: </span>{{$Datos->aliado_pais}} </li>
										<li><span class="bold">Teléfono Fijo: </span>{{$Datos->aliado_telefono_fijo}} </li>
										<li><span class="bold">Teléfono Celular: </span>{{$Datos->aliado_telefono_celular}} </li>
										<li><span class="bold">Email: </span>{{$Datos->aliado_email}} </li>
										<li><span class="bold">Descripción: </span>{{$Datos->aliado_descripcion}} </li>
										<li><span class="bold">Ofrece: </span>{{$Datos->aliado_ofrece}} </li>

									</ul>

									<h3>Si necesitas ver más información, Dirigete al Panel Administrador de CuponCity</h3>
                                     </p>
                                     @endif



                                </td>
                        </tr></tbody></table>
                    </td>
                </tr>
          </tbody></table>
        

            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->
      </div>
</center></body></html>