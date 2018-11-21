@extends('Secciones.Master')

@section('titulo', config('app.name').' - Dashboard')

@section('content')
                   <!-- INICIO WIDGET -->
					<!--<div class="row">
<div class="state-overview">
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel purple">
									<div class="symbol">
										<i class="fa fa-users usr-clr"></i>
									</div>
									<div class="value white">
                                        <p class="sbold addr-font-h1" data-value="">&nbsp;</p>
                                        <p>&nbsp;</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel green-bgcolor">
									<div class="symbol">
										<i class="fa fa-user"></i>
									</div>
									<div class="value white">
                                        <p class="sbold addr-font-h1" data-value="">&nbsp;</p>
                                        <p>&nbsp;</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel orange">
									<div class="symbol">&nbsp;
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1" data-value="">&nbsp;</p>
										<p>&nbsp;</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel blue-bgcolor">
									<div class="symbol">&nbsp;
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1" data-value="">&nbsp;</p>
										<p>&nbsp;</p>
									</div>
								</div>
							</div>
						</div>
						</div>

                     <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-topline-green">
                                <div class="card-head">
                                    <header>COMPRAS</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="example4">
                                        <thead>
                                            <tr>
                                                <th width="25%">Nombre del Paciente</th>
                                                <th>Doctor Asignado</th>
                                                <th>Fecha</th>
                                                <th>Hora</th>
                                                <th>Servicio</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td class="left"> Jayesh Patel </td>
                                                <td>
                                                    <a href="mailto:shuxer@gmail.com"> Dr.Rajesh </a>
                                                </td>
                                                <td class="center"> 12/05/2016 </td>
                                                <td class="center"> 10:45 </td>
                                                <td class=""> Acné </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    -->
<div class="row">
	<div class="col-md-12">
		<img src="{{URL('img/logo.png')}}" width="100%">
	</div>
</div>
@stop
