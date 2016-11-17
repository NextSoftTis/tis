<?php /* Smarty version 3.1.27, created on 2016-11-16 22:28:04
         compiled from "C:\xampp\htdocs\proyecto\tis\styles\templates\vistaSecretaria\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4761582ccf6484b1d2_07669846%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b367c0f809dead90367de58234a9a31740d7a05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\tis\\styles\\templates\\vistaSecretaria\\menu.tpl',
      1 => 1479331341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4761582ccf6484b1d2_07669846',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582ccf648a1bc9_87188558',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582ccf648a1bc9_87188558')) {
function content_582ccf648a1bc9_87188558 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4761582ccf6484b1d2_07669846';
echo $_smarty_tpl->getSubTemplate ('global/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ('global/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



	<div class="container nt-menu-cuerpo">
		<div class="row navbar">
			<div class="col-sm-2 dropdown">
				<a href="" class="dropdown-toggle" data-toggle="dropdown"><img class="img-circle img-responsive" src="styles/images/nombramiento.png"  id="dropdownMenu1">Nombramiento</a>

				<span class="caret"></span>
				<ul class="dropdown-menu inline-block" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="">seleccion 1</a></li>

					<li role="presentation"><a role="menuitem" tabindex="-1" href="">seleccion 2</a></li>

					<li role="presentation"><a role="menuitem" tabindex="-1" href="">seleccion 3</a></li>

				</ul>

			</div>
			<div class="col-sm-2">
				<a href=""><img class="img-circle img-responsive" src="styles/images/seguimiento.png">Seguimiento</a>
			</div>
			<div class="col-sm-2">
				<a href=""><img class="img-circle img-responsive" src="styles/images/reportes.png">Reportes</a>
			</div>
			<div class="col-sm-2">
				<a href=""><img class="img-circle img-responsive" src="styles/images/historicos.png">Historicos</a>
			</div>
			<div class="col-sm-2">
				<a href="?view=registro"><img class="img-circle img-responsive" src="styles/images/registros.png">Registros</a>
			</div>
		</div>
	</div>

	<div class="container nt-menu-pie">
		<div class="row">
			<ul>

				<li>
					<a href="">
					<i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>
					manualPDF
					</a>
				</li>

				<li>
					<a href="">
					<i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i>
					manualDOC
					</a>
				</li>

				<li>
					<a href="">
					<i class="fa fa-users fa-2x" aria-hidden="true"></i>
					contacto
					</a>
				</li>

				<li>
					<a href="">
					<i class="fa fa-question-circle fa-2x" aria-hidden="true"></i>
					varios
					</a>
				</li>

			</ul>
				
		</div>
	</div>

<?php echo $_smarty_tpl->getSubTemplate ('global/subtitle.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ('global/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>