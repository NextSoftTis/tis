<?php /* Smarty version 3.1.27, created on 2016-11-16 22:28:04
         compiled from "C:\xampp\htdocs\proyecto\tis\styles\templates\global\subtitle.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14686582ccf648c8963_31971817%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd8280e3d9019b22e85ba05190b723b92fffee67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\tis\\styles\\templates\\global\\subtitle.tpl',
      1 => 1479331341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14686582ccf648c8963_31971817',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582ccf648cc187_31852992',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582ccf648cc187_31852992')) {
function content_582ccf648cc187_31852992 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14686582ccf648c8963_31971817';
?>
<div class="container nt-menu-subpie site-footer">
		<div class="row">

			<div class="col-sm-4">
					<a class=" navbar-left" href="?view=secretaria">
					<i class="fa fa-home fa-3x inicio" aria-hidden="true"></i>
					</a>
			</div>

			<div class="col-sm-4">
				<b>Copyright ©2016 - Nextsoft - Derechos Reservados</b><br>
				<b>Desarrollado por</b> <a><u>NextSoft srl.</u></a><br>
				<a href=""><u>nextsoft@gmail.com</u></a>
			</div>
			<div class="col-sm-4">
				<b>Paginas Relacionas:</b>
				<a target="_blank" href="http://www.umss.edu/"><u>UMSS</u></a>
				<a target="_blank" href="http://websis.umss.edu.bo/"><u>WebSISS</u></a>
				<a target="_blank" href="http://www.memi.umss.edu.bo"><u>MEMI</u></a>
				<a target="_blank" href="http://enlinea.umss.edu.bo/moodle2/"><u>Moodle</u></a><br>
				<a target="_blank" href="http://www.fcyt.umss.edu/"><u>Facultad de Ciencias y Tecnologia</u></a><br>
				<b>Contactos: Departamento</b>
				<a href=""><u>dpto.inf.sis@cs.umss.edu.bo</u></a> 
			</div>
		</div>
</div>

<style type="text/css">
	
div.nt-menu-subpie {
	margin-top: 16.48%;
	background-image: url("styles/images/pie.png");
	background-size: cover;
	/*background-color: #3949AB;*/
	border-top: 1px solid #BDBDBD;
	bottom: 0;
	position: fixed;
	width: 100%;
	text-align: center;

}

div.col-sm-4 i.inicio {
	margin-top: 7px;
	margin-left: 80px;
}

div.col-sm-4 b {
	font-family: verdana, arial, helvetica, sans-serif;
	font-size: 13px;
	color: white;
}
div.col-sm-4 a {
	color: white;
	font-size: 13px;
}

</style>
<?php }
}
?>