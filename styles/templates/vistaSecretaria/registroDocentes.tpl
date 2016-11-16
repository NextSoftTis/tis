{include 'global/header.tpl'}

{include 'global/title.tpl'}

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
                        <label for="formGroupExampleInput2">Titulo Profecional:</label>
                        <input type="text" class="form-control" id="fec-nac" placeholder="Another input">
                    </div>
                </div>

              

                <div class="col-md-4">
                    <div class="form-group div-from">
                        <label for="formGroupExampleInput">Tiempo de Dedicion:</label>
                        <select class="form-control">
                            <option>Parcial</option>
                            <option>Exclusivo</option>
                        </select>
                    </div>
                </div>
                
                <div class="checkbox col-md-8">
                    <label>
                        <input type="checkbox"> Activo
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



    
