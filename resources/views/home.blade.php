@extends('layouts.app')

@section('content')

<!-- INICIA CARRUSEL -->
    <div class="class row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            @auth
                <a href="#" style="float: right;padding: 10px; position: absolute;top: 150px; left: 10px;color: red;z-index: 1000;"><i class="fas fa-pencil-alt"></i></a>
            @endauth
                <div class="item active">
                    <img src="imagenes/Portada1.jpg" alt="" style="width:100%;">
                    <div class="row">
                         <div class="carousel-caption" id="viaje">
                         <!--<p>Celebra en </p>
                         <p>Cancún-Riviera Maya </p>
                        <!- -<p>LA is always so much fun!</p>-->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="imagenes/Portada2.jpg" alt="" style="width:100%;">
                    <div class="row carousel-caption" id="viaje">
                    <!--<p>Celebra en </p>
                         <p>Cancún-Riviera Maya </p>
                        <!- -<p>LA is always so much fun!</p>-->
                    </div>
                </div>
                <div class="item">
                    <img src="imagenes/Portada3.jpg" alt="" style="width:100%;">
                    <div class="row carousel-caption" id="viaje">
                   <!-- <p>Celebra en </p>
                         <p>Cancún-Riviera Maya </p>
                        <!- -<p>LA is always so much fun!</p>-->
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previo</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
    <!-- FIN CARRUSEL -->

    <!--PAQUETES DISPONIBLES-->
    <a name="paquete-ancla"></a>
    <div class="row cuatro">
        <h1>PAQUETES DISPONIBLES</h1>
        <div class="page_caption_desc" style="font-family: sans-serif !important;">Aprovecha nuestras promociones</div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-md-lg-4" style="padding-left: 1px; padding-right: 1px;">
            <a href="info-cancun/index.php#info">
                <div id="padre" style="margin-top:10px;">
                    <img src="imagenes/Paquete1.jpg" class="img-responsive" alt="">
                    <div id="uno">
                        <div class="titulo row" style="width: 100%;">
                            <div class="col-md-6">
                                <div class="lugar1" >
                                salida de Veracruz
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="diast" >
                                 $64,480
                                </div>
                            </div>
                        </div>
                        <div class="titulo row" style="width: 100%;">
                            <div class="col-md-6">
                                <div class="ruta" >
                                    Del 17 al 24 de Abril 2019
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="preciot" >
                                TODO INCLUIDO 8 días / 7 noches

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-md-lg-4" style="padding-left: 1px; padding-right: 1px;">
            <a href="info-cancun/index.php#info">
                <div id="padre" style="margin-top:10px;">
                    <img src="imagenes/Paquete2.jpg" class="img-responsive" alt="">
                    <div id="uno">
                        <div class="titulo row" style="width: 100%;">
                            <div class="col-md-6">
                                <div class="lugar1" >
                                salida de Veracruz
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="diast" >
                                 $64,480
                                </div>
                            </div>
                        </div>
                        <div class="titulo row" style="width: 100%;">
                            <div class="col-md-6">
                                <div class="ruta" >
                                    Del 12 al 19 de Julio 2019
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="preciot" >
                                TODO INCLUIDO 8 días / 7 noches
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-md-lg-4" style="padding-left: 1px; padding-right: 1px;">
            <a href="info-puebla/index.php#info">
                <div id="padre" style="margin-top:10px;">
                    <img src="imagenes/Paquete3.jpg" class="img-responsive" alt="">
                    <div id="uno">
                        <div class="titulo row" style="width: 100%;">
                            <div class="col-md-6">
                                <div class="lugar1" >
                                salida de Puebla
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="diast" >
                                    $64,480
                                </div>
                            </div>
                        </div>
                        <div class="titulo row" style="width: 100%;">
                            <div class="col-md-6">
                                <div class="ruta" >
                                    Del 24 al 31 de Julio 2019
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="preciot" >
                                TODO INCLUIDO 8 días / 7 noches

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!--FIN PAQUETES DISPONIBLES-->

    <!--CONOCE DESTINOS-->
    <div class="row" style="padding-bottom: 38px;">
        <div class="col-xs-12 ">
            <h1 style="font-weight: 700; font-size: 30px; line-height: 30px; text-transform: uppercase; margin-bottom: 5px; letter-spacing: 0; margin-top: 3%;">CONOCE EL DESTINO</h1>
        </div>
    </div>
    <div class="row cuatro" style="width: 0%;">
        <div class="row imgfont" style="margin-left:0px; margin-right:0px;">
            <div class="col-md-3">
                <div id="padre" style="margin-top:10px;">
                    <img src="imagenes/destino1.jpg" alt class="thumbnail" style="width: 100%; padding:0px;">
                    <div id="dos" class="opcion-menu2" style="font-family: sans-serif; font-size: 15px; max-width: 297px; width: 100%; background: rgba(0, 0,0,0.5);">
                        HOTEL OCEAN COBAL & TURQUESA RIVERA MAYA. TODO INCLUIDO
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="padre" style="margin-top:10px;">
                    <img src="imagenes/destino2.jpg" class="thumbnail" alt style="width: 100%; padding:0px;">
                    <div id="dos" class="opcion-menu2" style="font-family: sans-serif; font-size: 15px; max-width: 297px; width: 100%; background: rgba(0, 0,0,0.5);">
                        PARQUE ACUÁTICO XCARET, XEL-HA Y XENSES
                    </div>
                </div>
            </div>
            <div class="color1 col-md-3">
                <div id="padre" style="margin-top:10px;">
                    <img src="imagenes/destino3.jpg" alt class="thumbnail" style="width: 100%; padding:0px;">
                    <div id="dos" class="opcion-menu2" style="font-family: sans-serif; font-size: 15px; max-width: 297px; width: 100%; background: rgba(0, 0,0,0.5);">
                        PASEO EN YATE, TULÚM Y 5A. AVENIDA
                    </div>
                </div>
            </div>
            <div class="color1 col-md-3">
                <div id="padre" style="margin-top:10px;">
                    <img src="imagenes/destino4.jpg" alt class="thumbnail" style="width: 100%;padding:0px;">
                    <div id="dos" class="opcion-menu2" style="font-family: sans-serif; font-size: 15px; max-width: 297px; width: 100%;background: rgba(0, 0,0,0.5);">
                        SHOW CIRQUE DU SOLEIL
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN CONOCE DESTINOS-->

    {{-- TESTIMONIOS --}}
    <div class="row cuatro ">
        <h1>TESTIMONIOS</h1>
        <div class="testimonial_slider_wrapper">
            <div class="flexslider" data-height="750">
                <ul class="slides">
                    <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"
                        class="flex-active-slide">
                        <div class="testimonial_slider_wrapper" style="font-family: sans-serif;text-align: justify;">Hola ya fui a Cancún y es precioso me encantó tal vez algún día pueda viajar otra vez pero me quedé impresionada con sus tonalidades turquesas del mar Caribe sin duda México me encanta  de verdad me siento totalmente orgullosa de ser mexicana.
                            <div class="testimonial_slider_meta">
                            <div class="page_caption_desc" style="font-family: sans-serif !important;">Carla Beatriz Durán</div>
                            <!--<h6>Carla Beatriz Durán</h6>-->
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <ol class="flex-control-nav flex-control-paging">
                <li><a class=""></a></li>
                <li><a class="flex-active"></a></li>
                <li><a class=""></a></li>
            </ol>
        </div>
    </div>
    {{-- FIN TESTIMONIOS --}}

    {{-- SERVICIOS --}}
    <a name="servicios-ancla"></a>
    <div class="row cuatro ">
        <h1 class="opcion-menu2">NUESTROS SERVICIOS</h1>
        <div class="page_caption_desc" style="font-family: sans-serif !important;">¡TE AYUDAMOS A PLANEAR!</div>
    </div>
    <div class="row">
        <div class="col-md-4 ">
            <div id="padre" style="margin-top: 15px;">
                <img src="imagenes/Servicios1.jpg" class="img-responsive" alt="">
                <div id="unos">
                    <div class="titulo" style="width: 100%;">
                           <h1 style="font-size: 20px;"> VIAJES DE GRADUACIÓN </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div id="padre" style="margin-top: 15px;">
                <img src="imagenes/Servicios2.jpg" class="img-responsive" alt="">
                <div id="unos">
                    <div class="titulo" style="width: 100%;">
                       <h1 style="font-size: 20px;"> DESPEDIDA DE SOLTERO(A)</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div id="padre" style="margin-top: 15px;">
                <img src="imagenes/Servicios3.jpg" class="img-responsive" alt="">
                <div id="unos">
                    <div class="titulo" style="width: 100%;">
                        <h1 style="font-size: 20px;">VIAJES ESCOLARES</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- FIN SERVICIOS --}}

    {{-- ELEGIRNOS --}}
    <a name="elegirnos-ancla"></a>
    <div class="row cuatro ">
        <h1 class="opcion-menu2">¿PORQUÉ ELEGIRNOS?</h1>
    </div>
    <div class="row">
        <div class="col-md-4 ">
            <div class="service_icon image">
                <img src="imagenes/icon-feelings.jpg" alt="">
            </div><br>
            <h3>CONFIABILIDAD</h3>
            <p style="text-align: justify;">Contamos con empresas afiliadas que reúnen los permisos y certificaciones necesarias para ofrecer cualquier servicio turístico con la calidad, confiabilidad y profesionalismo que necesitas para que tu próximo viaje sea la mejor experiencia.
            </p>
        </div>
        <div class="col-md-4 ">
            <div class="service_icon image">
                <img src="imagenes/icon-feelings.jpg" alt="">
            </div><br>
            <h3 class="opcion-menu3" >COMPROMISO</h3>
            <p style="text-align: justify;">Mantenemos un cercano compromiso con el cliente para ofrecerle las mejores opciones para organizar su viaje, con experiencias únicas y especiales para cada cliente, personalizando la atención.
            </p>
        </div>
        <div class="col-md-4 ">
            <div class="service_icon image">
                <img src="imagenes/icon-feelings.jpg" alt="">
            </div><br>
            <h3 class="opcion-menu3" >PRECIO</h3>
            <p style="text-align: justify;">Nuestro propósito es dar a nuestros clientes la tranquilidad de invertir en sus vacaciones con la calidad de los servicios que merecen y disfrutar al máximo la experiencia del placer de viajar, con memorias inolvidables.
            </p>
        </div>
    </div>
    {{-- FIN ELEGIRNOS --}}

    <div class="row " id="tres"></div>

@endsection
