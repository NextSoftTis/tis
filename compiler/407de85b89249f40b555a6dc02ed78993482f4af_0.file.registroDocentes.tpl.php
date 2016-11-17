<?php /* Smarty version 3.1.27, created on 2016-11-17 13:53:13
         compiled from "/opt/lampp/htdocs/tis/styles/templates/vistaSecretaria/registroDocentes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1889917884582da839c4ebf6_21452857%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '407de85b89249f40b555a6dc02ed78993482f4af' => 
    array (
      0 => '/opt/lampp/htdocs/tis/styles/templates/vistaSecretaria/registroDocentes.tpl',
      1 => 1479387180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1889917884582da839c4ebf6_21452857',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582da83a3e4769_20638093',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582da83a3e4769_20638093')) {
function content_582da83a3e4769_20638093 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1889917884582da839c4ebf6_21452857';
echo $_smarty_tpl->getSubTemplate ('global/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ('global/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div class="container nt-form-docente">
        
        <form action="core/controllers/reg.php" method="POST">

        <fieldset class="form-group">
            <LEGEND>REGISTRO</LEGEND>
                <div class="col-md-4">   
                    <div class="form-group  div-form">
                        <label for="formGroupExampleInput">Nombres:</label>
                        <input name="nombres" type="text" class="form-control" id="nombres" placeholder="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Apellido Paterno</label>
                        <input name="ape-pat" type="text" class="form-control" id="ape-pat" placeholder="">
                    </div>
                </div>

                <div class="col-md-4">    
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Apellido Materno</label>
                        <input name="ape-mat" type="text" class="form-control" id="ape-mat" placeholder="">
                    </div>
                </div>
                
                <div class="col-md-4">   
                    <div>   
                        <div class="form-group col-xs-2 div-ci">
                            <label for="formGroupExampleInput">C.I.:</label>
                            <input name="form-control" type="text" class="form-control" id="ci" placeholder="">
                        </div>

                        <div class="form-group col-xs-2 div-sel">
                            <label for="formGroupExampleInput">Extendido:</label>
                            <select name="ciudad" class="form-control">
                                    <option>Beni</option>
                                    <option>Cochabamba</option>
                                    <option>Chuquisaca</option>
                                    <option>La Paz</option>
                                    <option>Oruro</option>
                                    <option>Pando</option>
                                    <option>Potosi</option>
                                    <option>Santa Cruz</option>
                                    <option>Tarija</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Fecha de Nacimiento:</label>
                        <input name="fec-nac" type="text" class="form-control" id="fec-nac" placeholder="dd/mm/aa">
                    </div>
                </div>

                  <div class="col-md-4">
                    <div class="form-group div-from">
                        <label for="formGroupExampleInput">Sexo:</label>
                        <select name="sexo" class="form-control">
                            <option>Femenino</option>
                            <option>Masculino</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">    
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Telefono Fijo</label>
                        <input name="tel" type="text" class="form-control" id="tel-fij" placeholder="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Celular:</label>
                        <input name="cel" type="text" class="form-control" id="celular" placeholder="">
                    </div>
                </div>

                 <div class="col-md-4">    
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Direccion Domiciliaria:</label>
                        <input name="dir" type="text" class="form-control" id="cor-elc" placeholder="">
                    </div>
                </div>

                <div class="col-md-4">    
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Coreo Electronico</label>
                        <input name="email" type="text" class="form-control" id="cor-elc" placeholder="xyz@dominio.com">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Titulo Profecional:</label>
                        <input name="titulo" type="text" class="form-control" id="fec-nac" placeholder="Another input">
                    </div>
                </div>

              

                <div class="col-md-4">
                    <div class="form-group div-from">
                        <label for="formGroupExampleInput">Tiempo de Dedicion:</label>
                        <select name="dedicacion" class="form-control">
                            <option>Parcial</option>
                            <option>Exclusivo</option>
                        </select>
                    </div>
                </div>
                
                <div class="checkbox col-md-8">
                    <label>
                        <input name="activo" type="checkbox"> Activo
                    </label>
                </div>
                
                <div class="col-md-8 nota">
                    <label for="formGroupExampleInput">NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</label> 
                </div>
        </fieldset>
            <div class=" form-group col-md-offset-4">    
                    <button type="submit" class="btn btn-success registrar" >Registrar
                    </button>
                
                    <button type="submit" class="btn btn-success cancelar" >Cancelar
                    </button>
            </div>  
        </form>

    </div>



    
<?php }
}
?>