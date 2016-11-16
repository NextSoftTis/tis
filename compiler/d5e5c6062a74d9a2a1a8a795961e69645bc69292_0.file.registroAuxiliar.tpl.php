<?php /* Smarty version 3.1.27, created on 2016-11-16 21:03:28
         compiled from "C:\xampp\htdocs\TIS\tis\styles\templates\vistaSecretaria\registroAuxiliar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8831582cbb90c0bdf5_52465807%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5e5c6062a74d9a2a1a8a795961e69645bc69292' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TIS\\tis\\styles\\templates\\vistaSecretaria\\registroAuxiliar.tpl',
      1 => 1479326603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8831582cbb90c0bdf5_52465807',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582cbb90c679d8_95359148',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582cbb90c679d8_95359148')) {
function content_582cbb90c679d8_95359148 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8831582cbb90c0bdf5_52465807';
echo $_smarty_tpl->getSubTemplate ('global/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ('global/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>






    <div class="container nt-form-docente">
        
        <form>

        <fieldset class="form-group">
            <LEGEND>REGISTRO</LEGEND>
                <div class="col-md-4">   
                    <div class="form-group  div-form">
                        <label for="formGroupExampleInput">Nombres:</label>
                        <input type="text" class="form-control" id="nombres" placeholder="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Apellido Paterno</label>
                        <input type="text" class="form-control" id="ape-pat" placeholder="">
                    </div>
                </div>

                <div class="col-md-4">    
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Apellido Materno</label>
                        <input type="text" class="form-control" id="ape-mat" placeholder="">
                    </div>
                </div>
                
                <div class="col-md-4">   
                    <div>   
                        <div class="form-group col-xs-2 div-ci">
                            <label for="formGroupExampleInput">C.I.:</label>
                            <input type="text" class="form-control" id="ci" placeholder="">
                        </div>

                        <div class="form-group col-xs-2 div-sel">
                            <label for="formGroupExampleInput">Extendido:</label>
                            <select class="form-control">
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
                        <input type="text" class="form-control" id="fec-nac" placeholder="dd/mm/aa">
                    </div>
                </div>

                  <div class="col-md-4">
                    <div class="form-group div-from">
                        <label for="formGroupExampleInput">Sexo:</label>
                        <select class="form-control">
                            <option>Femenino</option>
                            <option>Masculino</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">    
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Telefono Fijo</label>
                        <input type="text" class="form-control" id="tel-fij" placeholder="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Celular:</label>
                        <input type="text" class="form-control" id="celular" placeholder="">
                    </div>
                </div>

                 <div class="col-md-4">    
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Direccion Domiciliaria:</label>
                        <input type="text" class="form-control" id="cor-elc" placeholder="">
                    </div>
                </div>

                <div class="col-md-4">    
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Coreo Electronico</label>
                        <input type="text" class="form-control" id="cor-elc" placeholder="xyz@dominio.com">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group div-form">
                        <label for="formGroupExampleInput2">Carrera:</label>
                        <input type="text" class="form-control" id="fec-nac" placeholder="Another input">
                    </div>
                </div>

                <div class="col-md-8">
                    <label for="formGroupExampleInput">NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</label> 
                </div>

                
        </fieldset>
        <div class=" form-group col-mod-4 col-md-offset-4">    
                    <button type="submit" class="btn btn-success registrar" >Registrar
                    </button>
                
                    <button type="submit" class="btn btn-success cancelar" >Cancelar
                    </button>
        </div>
        </form>

    </div><?php }
}
?>