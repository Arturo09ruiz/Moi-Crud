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
                        </div></div>
    
                        
                      

			
                        <div>
                                <div class="tutilo-consulta">
                                    <h3>CONSULTA DE TÍTULOS REGISTRADOS</h3>
                                </div>
                                <br>
                                <div id="formPrincipal:j_idt25" class="ui-panelgrid ui-widget companyHeaderGrid">
                                    <div id="formPrincipal:j_idt25_content" class="ui-panelgrid-content ui-widget-content ui-grid ui-grid-responsive">
                                        <div class="ui-grid-row">
                                            <div class="ui-panelgrid-cell ui-grid-col-6">
                                            <table id="formPrincipal:j_idt26" class="ui-panelgrid ui-widget companyHeaderGrid" role="grid">
                                                <tbody>
                                                    <tr class="ui-widget-content" role="row">
                                                        <td role="gridcell" class="ui-panelgrid-cell">
                                                            <label id="formPrincipal:j_idt27" class="ui-outputlabel ui-widget" for="formPrincipal:apellidos">Apellidos</label>
                                                        </td>
                                                    </tr>
                                                    <tr class="ui-widget-content" role="row">
                                                        <td role="gridcell" class="ui-panelgrid-cell">
                                                                <form class="" action="" method="post">
                                                                        <input name="" type="hidden" value=""/>
                                                                        <input type="text" placeholder="Apellido..." name="query">
                                                                    </form>   
                                                        </td>
                                                    </tr>
                                                    <tr class="ui-widget-content" role="row">
                                                        <td role="gridcell" class="ui-panelgrid-cell">
                                                            <label id="formPrincipal:j_idt28" class="ui-outputlabel ui-widget" for="formPrincipal:identificacion">Identificación(Cédula)</label>
                                                        </td>
                                                    </tr>
                                                    <tr class="ui-widget-content" role="row">
                                                        <td role="gridcell" class="ui-panelgrid-cell">
                                                                <form class="" action="{{ route('search') }}" method="post">
                                                                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                                                        <input type="text" placeholder="Ingresa N° de Cedula" name="query">
                                                                    </form>                                                        </td>
                                                    </tr>
                                                    <tr class="ui-widget-content" role="row">
                                                        <td role="gridcell" class="ui-panelgrid-cell">
                                                            <label>*Ingrese los caracteres</label>
                                                        </td>
                                                    </tr>
                                                    <tr class="ui-widget-content" role="row">
                                                            <td role="gridcell" class="ui-panelgrid-cell">
                                                                <label>*Presiona la Tecla Enter para Buscar</label>
                                                            </td>
                                                        </tr>
                                                    <tr class="ui-widget-content" role="row">
                                                        <td role="gridcell" class="ui-panelgrid-cell">
                                                            
                                                        </div></div></div></div></div></td></tr><tr class="ui-widget-content" role="row"><td role="gridcell" class="ui-panelgrid-cell"><div id="formPrincipal:messages" class="ui-messages ui-widget" aria-live="polite"></div></td></tr></tbody></table></div><div class="ui-panelgrid-cell ui-grid-col-6"><table id="formPrincipal:j_idt30" class="ui-panelgrid ui-widget companyHeaderGrid" role="grid"><tbody><tr class="ui-widget-content" role="row"><td role="gridcell" class="ui-panelgrid-cell">
                                        <div class="msg-amarillo">
                                            <h4>ATENCIÓN</h4>
                                            <p>La SENESCYT emitirá certificados impresos únicamente
                                                cuando sean requeridos para uso en el extranjero o para fines
                                                judiciales. El título emitido por cualquier Universidad o
                                                Instituto de Educación Superior existente en el Ecuador no
                                                requerirá validación alguna, por parte del CES o la SENESCYT.</p>
                                            <span>(Reglamento General de Aplicación a la Ley Orgánica
                                                de Educación Superior, Art. 19)</span>
                
                                        </div>
                                        <div class="msg-amarillo">
                                            <h4>ATENCIÓN</h4>
                                            <p>El reconocimiento/registro del título no habilita al
                                                ejercicio de las profesiones reguladas por leyes específicas, y
                                                de manera especial al ejercicio de las profesiones que pongan en
                                                riesgo de modo directo la vida, salud y seguridad ciudadana
                                                conforme el artículo 104 de la Ley Orgánica de Educación
                                                Superior.</p>
                                            <span>Resolución RPC-SO-16-No.256-2016</span>
                                        </div></td></tr></tbody></table></div></div></div></div>
                                            
				
				<br>
				
				</main>
				<footer> 
					
					<img src=" images/ama_la_vida.jpg" alt="" title="">
				</footer>
			</div>
		</div>
	</div>
<div id="textarea_simulator" style="position: absolute; top: 0px; left: 0px; visibility: hidden;"></div><div class="ui-dialog-docking-zone"></div>
<style>
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
