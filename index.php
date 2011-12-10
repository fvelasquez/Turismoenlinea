<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
//ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

include_once('init.php');
include_once("includes/conexion.php");
include_once("includes/funciones.php");

$spot = new spot();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="Lo mejor de turismo en Guatemala,  hoteles Guatemala, restaurantes Guatemala, transporte Guatemala,  entretenimiento Guatemala, agencias de viaje Guatemala, Guatemala,  Antigua, Atitlan, Flores Peten, Alta Verapaz, baja Verapaz, Chimaltenango, Chiquimula , el progreso, Escuintla, Huehuetenango, Izabal, jalapa, Jutiapa, peten, Quetzaltenango, quiche, Retalhuleu, Sacatep�quez, san marcos, santa rosa, Solol�, Suchitep�quez, Totonicap�n, Zacapa, La isla de flores peten, rio dulce, Cuevas de B�omb�il Pek y Jul Iq� , Cuevas del Rey Marcos , Eco Centro Sata�a , Hun Nal Ye , Parque Nacional Candelaria Camposanto , Parque Nacional Laguna de Lachu� , Reserva Natural Privada Chajbaoc , Saquij� , Semuc Champey, Antigua Guatemala , Bas�lica de Esquipulas , Castillo de San Felipe , Chichicastenango , Comalapa , Lago de Atitl�n , Panajachel , Parque Ecol�gico del Sur , Parque Ecotur�stico Cascadas de Tatasirire , Parque Nacional Tikal , Quetzaltenango , Quirigu� , R�o Dulce , Todos Santos Cuchumat�n , Volc�n de Pacaya, Aguateca , Ceibal , Cooperativa Nuevo Horizonte , Parque Nacional Tikal , Puerta al Mundo Maya , R�o Azul , Sitio Arqueol�gico Cancu�n Chicacnab , Cuevas de B�omb�il Pek y Jul Iq� , Cuevas del Rey Marcos , Eco Centro Sata�a , Hun Nal Ye , Parque Nacional Candelaria Camposanto , Parque Nacional Laguna de Lachu� , Reserva Natural Privada Chajbaoc , Saquij� , Semuc Champey, R�o Escondido , Salto de Chilasc�,  Iximch�, Bas�lica de Esquipulas , San Francisco Quetzaltepeque , San Juan Camot�n , San Juan Ermita , Santiago de Esquipulas , Santiago Jocot�n , Sant�sima Trinidad (Iglesia Vieja) , Volc�n de Ipala , San Agust�n Acasaguastl�n , San Crist�bal Acasaguastl�n , Sanarate, Parque Natural Calderas , Volc�n de Pacaya, Amatitl�n , Palacio Nacional de la Cultura, Biotopo Choc�n Machacas , Bocas del Polochic , Castillo de San Felipe , Livingston , Quirigu� , Reserva Protectora de Manantiales Cerro San Gil , R�o Dulce , R�o Las Escobas , R�o Quehueche , Siete Altares, Monterrico , Parque Ecol�gico del Sur, Aventura Maya K�iche�, Museo de Estanzuela , Valle Escondido" />
  <meta name="description" content="Lo mejor de turismo en Guatemala,  hoteles Guatemala, restaurantes Guatemala, transporte Guatemala,  entretenimiento Guatemala, agencias de viaje Guatemala, Guatemala,  Antigua, Atitlan, Flores Peten, Alta Verapaz, baja Verapaz, Chimaltenango, Chiquimula , el progreso, Escuintla, Huehuetenango, Izabal, jalapa, Jutiapa, peten, Quetzaltenango, quiche, Retalhuleu, Sacatep�quez, san marcos, santa rosa, Solol�, Suchitep�quez, Totonicap�n, Zacapa, La isla de flores peten, rio dulce, Cuevas de B�omb�il Pek y Jul Iq� , Cuevas del Rey Marcos , Eco Centro Sata�a , Hun Nal Ye , Parque Nacional Candelaria Camposanto , Parque Nacional Laguna de Lachu� , Reserva Natural Privada Chajbaoc , Saquij� , Semuc Champey, Antigua Guatemala , Bas�lica de Esquipulas , Castillo de San Felipe , Chichicastenango , Comalapa , Lago de Atitl�n , Panajachel , Parque Ecol�gico del Sur , Parque Ecotur�stico Cascadas de Tatasirire , Parque Nacional Tikal , Quetzaltenango , Quirigu� , R�o Dulce , Todos Santos Cuchumat�n , Volc�n de Pacaya, Aguateca , Ceibal , Cooperativa Nuevo Horizonte , Parque Nacional Tikal , Puerta al Mundo Maya , R�o Azul , Sitio Arqueol�gico Cancu�n Chicacnab , Cuevas de B�omb�il Pek y Jul Iq� , Cuevas del Rey Marcos , Eco Centro Sata�a , Hun Nal Ye , Parque Nacional Candelaria Camposanto , Parque Nacional Laguna de Lachu� , Reserva Natural Privada Chajbaoc , Saquij� , Semuc Champey, R�o Escondido , Salto de Chilasc�,  Iximch�, Bas�lica de Esquipulas , San Francisco Quetzaltepeque , San Juan Camot�n , San Juan Ermita , Santiago de Esquipulas , Santiago Jocot�n , Sant�sima Trinidad (Iglesia Vieja) , Volc�n de Ipala , San Agust�n Acasaguastl�n , San Crist�bal Acasaguastl�n , Sanarate, Parque Natural Calderas , Volc�n de Pacaya, Amatitl�n , Palacio Nacional de la Cultura, Biotopo Choc�n Machacas , Bocas del Polochic , Castillo de San Felipe , Livingston , Quirigu� , Reserva Protectora de Manantiales Cerro San Gil , R�o Dulce , R�o Las Escobas , R�o Quehueche , Siete Altares, Monterrico , Parque Ecol�gico del Sur, Aventura Maya K�iche�, Museo de Estanzuela , Valle Escondido" />  
<title>Turismo En Linea</title>
<link href="css/Style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/south-street/jquery-ui-1.8.custom.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery.rating.css"/>
<script type="text/javascript" language="javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.pngFix.pack.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery-ui-1.8.custom.min.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.MetaData.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.rating.pack.js"></script>
<script type="text/javascript" language="javascript" src="menuJs/stmenu.js"></script>
<script>
var Options = {
	monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Augosto','Septiembre','Octubre','Noviembre','Diciembre'],
	dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
	dateFormat: 'yy-mm-dd'
}
$(document).pngFix();
</script>
</head>
<body>
<div id="container">
            <table width="960" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="2">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr class="fondouser" >
                                <td colspan="2" align="left">
                                    <?php $spot->GeneraBanner(8); ?>
                                    <a href="index.php?p=5" style="float:right; "><img src="images/contactenos.png" border="0" /></a>
								<form name="search"  action="index.php" method="get" id="search">
                                <input type="hidden" value="71" name="p" />
                                <input type="text" name="2|nombre" style="font-size:0.8em; width:250px" />
                                <input type="submit" class="botoncito" value="Buscar"/>
                                </form>
                                <!--div style="float:right; margin-right:10px; font-family:Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold">
                                <?php 
								$usuario = fSession::get("username");
								if(isset($usuario) && $usuario != ""){ ?>
                                <img src="admin/images/user.png" border="0" /> <?php echo $usuario; ?>
                                <img src="admin/images/door_out.png" border="0" /> <a href="logout.php">cerrar sesi&oacute;n</a>
                                <?php }else{ ?>
                                <form name="login" action="login.php" id="login" method="post">
                                <table border="0" cellpadding="0" cellspacing="0" >
                                    <tr>
                                        <td>
                                            &nbsp;<label ID="UserNameLabel">Usuario:</label>
                                            <input type="text" id="usuario" name="usuario" size="10" class="validate[required]"/>
                                            <label ID="PasswordLabel">Password:</label>
                                            <input type="password" id="password" name="password" size="10" class="validate[required]"/>
                                            <input type="submit" ID="Entrar" name="Entrar" class="botoncito" value="Entrar" />
										</td>
                                    </tr>
                                </table>
                                </form>
                                <?php } ?>
                                </div-->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr><!-- Termina el Header -->
                <tr bgcolor="#FFFFFF"><!-- inicio del banner medio -->
                    <td colspan="2">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <?php $spot->GeneraBanner(10); ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="201" align="center" valign="bottom" class="fondomenu" style="height:10px;" >                        
                    <?php echo date("M, d/Y"); ?>    
                    </td>
                    <td width="759" rowspan="2" align="left" valign="top" style="background-color:White">
                        <table border="0" cellspacing="0" cellpadding="0" class="text" width="99%">
                            <tr>
                                <td align="left">&nbsp;</td>
                                <td valign="top">
                                    <br />
                                    <?php
									$p = fRequest::get('p');
                                    switch($p){
										case '1':
											include('main.php');
										break;
										case '2':
											include('registro.php');
										break;
										case '20':
											include('confirma.php');
										break;
										case '22':
											include('agregarregistro.php');
										break;
										case '3':
											include('contactenos.php');
										break;
										case '4':
											include('contactenos.php');
										break;
										case '5':
											include('contactenos.php');
										break;
										case '6':
											include('busqueda.php');
										break;
										case '7':
											include('resultado.php');
										break;
										case '71':
											include('resultado_all.php');
										break;
										case '8':
											include('detalle.php');
										break;
										case '9':
											include('mapas.php');
										break;
										case '10':
											include('showcase.php');
										break;
										default:
											include('main.php');
										break;
									}
									?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="fondomenu">
                    <td valign="top" align="center" style="height: 208px;">
                    <br /><br />
                        <!--<div id="dMenu" runat="server"></div>-->
                        <table style=" vertical-align:middle" cellpadding="0" cellspacing="0" border="0">
                            <tr valign="middle">
                                <td align="center" valign="middle">
                                <div id="menuPrincipal">
										<?php 
                                        $menuDinamico = new menuDinamico();
                                        echo $menuDinamico->generaMenuSecciones('','menuPrincipal'); 
                                        ?>
								</div>
                                </td>
                            </tr>
                        </table>
                        <br /><br />
                    </td>
                </tr>
                <tr align="left" style="background-color:Transparent; width:100%" valign="top">
                    <td colspan="2" style="height:30px; width: 100%">
                        <table  class="fondofooter" border="0" cellspacing="0" cellpadding="8" style="height:30px; width:100%" >
                            <tr>
                                <td align="center" style="height: 30px">
                                    <span style="font-family:Verdana; background-color:Transparent; font-size:small; color:White">
                                        &copy; 2009 | www.turismoenlinea.org - Todos los derechos reservados
                                    </span></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>

    <!--script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>

    <script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3695948-2");
pageTracker._trackPageview();
    </script-->

</body>
</html>