<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0046)http://www.senescyt.gob.ec/web/guest/consultas -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="j_idt2"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="{{ asset('css/theme.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/components.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/bsf.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/tooltip.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/core.css') }} ">
<link type="text/css" rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/panels.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/icons.css') }}">

<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SENESCYT - Secretaría Nacional de Educación Superior,
		Ciencia, Tecnología e Innovación</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="icon" href="http://www.senescyt.gob.ec/consulta-titulos-web/resources/images/senescytico.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/w3.css"></head><body class="contenedor">
	<div class="contenedor-externo">
		<div class="contenedor-interno">
			
			<div class="menu-bar"><div id="" class="null navbar navbar-inverse" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" >
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span><span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button></div>
							<div id="j_idt6_inner" class="collapse navbar-collapse navbar-ex1-collapse">
								<ul id="j_idt7" class=" nav navbar-nav">
									<li id="j_idt8" class="   "><a href="#" role="menuitem" tabindex="-1">INICIO</a></li>
									<li id="j_idt9" class="   "><a href="#" role="menuitem" tabindex="-1">CONSULTA DE TÍTULOS</a></li>
									<li id="j_idt10" class="   "><a href="http://www.senescyt.gob.ec/consulta-titulos-web/faces/vista/consulta/consultaEstadoExtranjero.xhtml;jsessionid=g1gK5cg9FVxro-hoPUFTASRT.d0507d40-1ad8-323c-a603-2d2bf768d12f" role="menuitem" tabindex="-1">ESTADO TÍTULOS EXTRANJEROS</a>
									</li></ul>
							</div>
							</div>
							</div>
			</div>
						
			
			<div class="contenido">
				
				<main>
					<div ></div>
					<div  class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-shadow ui-hidden-container" role="dialog"  aria-hidden="true" style="width: auto; height: auto;">
						<div class="ui-dialog-content ui-widget-content" style="height: auto;"><img id="j_idt14" src="#" alt=""> 
                        <!-- &lt;img src="/consulta-titulos-web/resources/images/loader.gif" /&gt;--></div></div>
    
                        <div>
                                <div class="tutilo-consulta">
                                    <h3 class="titulo">Registro De Certificado En Proceso</h3>
                                </div>

                        <div>

                            <div class="row">
                                <div class="col-md-6">
                                        @if (count($ususarios) === 0)
                                        No se encontro Nada
                                    @elseif (count($ususarios) >= 1)
                                    
                                        @foreach($ususarios as $usuario)
                                           <p>- </p><strong>Nombre :</strong> {{ $usuario->name }}
                                           <br>
                                           <strong>Sexo</strong> {{ $usuario->sex }}
                                           <br>
                                           
                                        @endforeach
                                    @endif
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                            

    </div>
 
				</main>
				<footer> 
                    <p>Si estas en este sistema Es porque tu Certificado esta en Proceso y en Espera a Aprobarse</p>
					
					<img src=" images/ama_la_vida.jpg" alt="" title="">
				</footer>
			</div>
		</div>
	</div>
<div id="textarea_simulator" style="position: absolute; top: 0px; left: 0px; visibility: hidden;"></div><div class="ui-dialog-docking-zone"></div>
<style>
    .row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
}
.col-md-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
    .titulo{
        transform: translate(250px)
    }

    .mapa{
        font-size: 10px
        position: relative;
        top: 210px; left: 65px;

    }
    .arena{
        position: relative;
        top: 210px; left: 75px;

    }
    .fabio{
        position: relative;
        top: 210px; left: 100px;
    }


    .moi{
        transform: translate(465px);
        position: relative;
        top: -12px; left: 0px;
    }
    .arturo{
	    transform: translatex(15.5%);
    }
    .hola{
	    transform: translatex(10%);
    }
</style>

</body>
</html>









                   @if (count($ususarios) === 0)
                        No se encontro Nada
                    @elseif (count($ususarios) >= 1)
                    
                        @foreach($ususarios as $usuario)
                           <strong>Nombre :</strong> {{ $usuario->name }}
                            {{ $usuario->sex }}
                        @endforeach
                    @endif