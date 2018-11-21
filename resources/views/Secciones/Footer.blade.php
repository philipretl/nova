                </div>
            </div>
            <!-- end page content -->
        </div>
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2017 &copy; CuponCity
            <a href="mailto:josuelmm92@gmail.com" target="_top"><i class="fa fa-user"></i></a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>        
        <!-- end footer -->

        <!-- end page container -->      

    </div>


    <!-- start js include path -->
    <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.blockui.min.js')}}" type="text/javascript"></script>
     <script src="{{ asset('js/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-validation/js/localization/messages_es.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
    
    <!-- bootstrap -->
    <script src="{{ asset('js/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}" type="text/javascript" charset="UTF-8"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.es.js')}}" type="text/javascript" charset="UTF-8"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js')}}" type="text/javascript" charset="UTF-8"></script>
    <script src="{{ asset('js/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript" charset="UTF-8"></script>
    <script src="{{ asset('js/bootstrap-timepicker/js/bootstrap-timepicker-init.js')}}" type="text/javascript" charset="UTF-8"></script>
    <!-- dropzone -->
    <script src="{{ asset('js/dropzone/dropzone.js')}}" type="text/javascript"></script>
    <!-- toast -->
    <script src="{{ asset('js/toast/jquery.toast.min.js')}}" type="text/javascript"></script>
    <!-- priceformat -->
    <script src="{{ asset('js/priceformat/jquery.priceformat.min.js')}}" type="text/javascript"></script>
       <!-- calendar -->
    <script src="{{ asset('js/moment-with-locales.min.js')}}" type="text/javascript"></script>
    
    <script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/layout.js')}}" type="text/javascript"></script>

    <!--tags input-->
    <script src="{{ asset('js/bootstrap-tagsinput/typeahead.bundle.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap-tagsinput/bootstrap-tagsinput.js')}}" type="text/javascript"></script>
    <!--select2-->
    <script src="{{ asset('js/select2/js/select2.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/select2/js/select2_es.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/select2/js/select2-init.js')}}" type="text/javascript"></script>
    <!--datatables-->
    <script src="{{ asset('js/datatables/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
    <!--sweetalert-->
    <script src="{{ asset('js/sweetalert/js/sweetalert.js')}}" type="text/javascript"></script>
    <!--summernote-->
    <script src="{{ asset('js/summernote/summernote.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/summernote/lang/summernote-es-ES.js')}}" type="text/javascript"></script>

    <!-- script personalizado -->
    <script src="{{ asset('js/script.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
    moment.locale('es');

    $('[data-toggle="tooltip"]').tooltip(); 

    <?php 
       $ListaOfertasActivas=App\ProductoPrecio::where('productop_oferta',1)->where('productop_estatus',1)->get();
    ?>
    @if(count($ListaOfertasActivas)>0)
        @foreach ($ListaOfertasActivas as $lista_ofertas_activas)
        <?php $id_crypt_Activa = Crypt::encrypt($lista_ofertas_activas->id); ?>
        @if (strtotime($lista_ofertas_activas->productop_fecha_fin)<strtotime(fecha_guion()))
        var URL = "{!! (url('CambiarEstatus')) !!}";
            $.ajax({
                url: URL,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{tabla:'producto_precios', campo:'productop_estatus', id:"{{$id_crypt_Activa}}", estatus:'2',_token: $('meta[name=csrf-token]').attr('content')},
                success: function(data) {
                    $(".EditarOferta{{$lista_ofertas_activas->id}}").remove();
                    $(".EliminarOferta{{$lista_ofertas_activas->id}}").remove();
                    $(".Activa{{$lista_ofertas_activas->id}}").addClass('hide');
                    $(".Eliminada{{$lista_ofertas_activas->id}}").removeClass('hide');
                }
            });
        @endif
        @endforeach
    @endif

    setTimeout(function(){
        window.location.reload(1);
    }, 300000);
    </script>
    @yield("script")   
  </body>
</html>