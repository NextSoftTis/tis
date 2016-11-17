<?php /* Smarty version 3.1.27, created on 2016-11-17 15:37:09
         compiled from "/opt/lampp/htdocs/tis/styles/templates/home/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:181706797582dc095991e35_68863371%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '398e70ae035737d9c740b724fd3856d56ca689ed' => 
    array (
      0 => '/opt/lampp/htdocs/tis/styles/templates/home/login.tpl',
      1 => 1479393415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181706797582dc095991e35_68863371',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582dc095e04841_53312000',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582dc095e04841_53312000')) {
function content_582dc095e04841_53312000 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '181706797582dc095991e35_68863371';
echo $_smarty_tpl->getSubTemplate ('global/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ('global/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<div class="container-fluid nt-inicio">
		<h1 class="nt-h1"><strong>Sistema de <br>Apoyo <br>Administrativo</strong></h1>

		<p class="nt-p">Sistema para la generacion de formularios de <br>seguimiento
		y solicitud de nombramiento de docentes.</p>

</div>

<div class="container formulario">
	<form action="core/controllers/sesion.php" method="POST">
		<div class="form-group">
			<h3><strong>Inicie sesion por favor</strong></h3><br>
			<input type="text" class="form-control" placeholder="nombre de usuario" name="user"><br>
			<input type="password" class="form-control" placeholder="contraseña" name="pass"><br>
			<input type="submit" class="btn btn-success" value="	Ingresar" name="login">
		</div>
	</form>
</div>

<div class="container nt-menu-subpie site-footer">
		<div class="row">

			<div class="col-sm-4">
					<a class=" navbar-left" href="?view=index">
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

<?php echo $_smarty_tpl->getSubTemplate ('global/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<style type="text/css">
	
	div.formulario {
		width: 400px;
		border-radius: 5px;
		border: 1px solid #9E9E9E;
	}

</style>e	
<?php }
}
?>