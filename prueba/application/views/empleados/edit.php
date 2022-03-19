<div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
	<section class="content-header"><!-- Content Header (Page header) -->
		<h1>
			Empleados
			<small>Editar</small>
		</h1>
	</section>
	<section class="content"><!-- Main content -->
		<div class="box box-solid"><!-- Default box -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<?php if($this->session->flashdata("error")):?>
							<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
							</div>
						<?php endif;?>
						<form action="<?php echo base_url();?>Empleados/update" method="POST">
						<input type="hidden" value="<?= $empleados->idEmpleado?>" >
							<div class="row">	
								<div class="col-md-4 form-group">
									<label class="control-label" for="nombres">Nombres:</label>
									<input type="text" class="form-control input-sm " id="nombres" name="nombres" value="<?= $empleados->nombres?>" >
								</div>
								<div class="col-md-4 form-group">
									<label for="aPaterno">Apellido Paterno:</label>
									<input type="text" class="form-control  input-sm" id="aPaterno" name="aPaterno" value="<?= $empleados->aPaterno?>" >
								</div>
								<div class="col-md-4 form-group">
									<label for="aMaterno">Apellido Materno:</label>
									<input type="text" class="form-control  input-sm" id="aMaterno" name="aMaterno" value="<?= $empleados->aMaterno?>" >
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label for="profesion">Profesion:</label>
									<input type="text" class="form-control" id="profesion" name="profesion" value="<?= $empleados->profesion?>" >
								</div>
								<div class="col-md-4 form-group">
                                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                                    <input class="form-control input-sm " type="date" value=<?= $empleados->fechaNacimiento?> name="fechaNacimiento" id="fechaNacimiento">
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label for="curp">CURP:</label>
									<input type="text" class="form-control  input-sm" id="curp" name="curp" value="<?= $empleados->curp?>">
								</div>
								<div class="col-md-4 form-group">
									<label for="rfc">RFC:</label>
									<input type="text" class="form-control input-sm" id="rfc" name="rfc" value="<?= $empleados->rfc?>" >
								</div>
								<div class="col-md-4 form-group">
									<label for="nss">Numero Seguro Social:</label>
									<input type="text" class="form-control input-sm" id="nss" name="nss" value="<?= $empleados->nss?>" >
                                </div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label for="tSangre">Tipo de Sangre:</label>
									<input type="text" class="form-control  input-sm" id="tsangre" name="tsangre" value="<?= $empleados->tSangre?>">
									<?php foreach($tiposangres as $tiposangre): ?>
										<option value="<?php echo $tiposangre->tipoSangre?>"><?php echo $tiposangre->tipoSangre;?></option>
									<?php endforeach;?>
								</div>
								<div class="col-md-4 form-group">
									<label for="estadocivil">Estado Civil:</label>
									<input type="text" class="form-control input-sm" id="estadoCivil" name="estadoCivil" value="<?= $empleados->estadoCivil?>">
								</div>
								<div class="col-md-4 form-group">
									<label for="email">Email:</label>
									<input type="email" class="form-control input-sm" id="email" name="email" value="<?= $empleados->email?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label for="celular1">Celular:</label>
									<input type="text" class="form-control  input-sm" id="celular1" name="celular1" value="<?= $empleados->celular1?>">
								</div>
								<div class="col-md-4 form-group">
									<label for="celular2">Celular Secundario:</label>
									<input type="text" class="form-control input-sm" id="celular2" name="celular2" value="<?= $empleados->celular2?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="direccion">Direccion:</label>
									<input type="text" class="form-control input-sm" id="direccion" name="direccion" placeholder="Calle y numero" value="<?= $empleados->direccion?>">
                            	</div>
								<div class="col-md-6 form-group">
									<label for="colonia">Colonia:</label>
									<input type="text" class="form-control  input-sm" id="colonia" name="colonia" value="<?= $empleados->colonia?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label for="entrecalles">Entre Calles:</label>
									<input type="text" class="form-control input-sm" id="entrecalles" name="entrecalles" value="<?= $empleados->entreCalles?>">
								</div>
								<div class="col-md-4 form-group">
									<label for="referencia">Referencia:</label>
									<input type="text" class="form-control input-sm" id="referencia" name="referencia" value="<?= $empleados->referencia?>">
								</div>
								<div class="col-md-4 form-group">
									<label for="municipio">Municipio:</label>
									<input type="text" class="form-control input-sm" id="municipio" name="municipio"  value="<?= $empleados->municipio?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									<label for="localidad">Localidad:</label>
									<input type="text" class="form-control input-sm" id="localidad" name="localidad" value="<?= $empleados->localidad?>">
								</div>
								<div class="col-md-4 form-group">
									<label for="estado">Estado:</label>
									<input type="text" class="form-control input-sm" id="estado" name="estado" value="<?= $empleados->estado?>">
								</div>
								<div class="col-md-4 form-group">
									<label for="pais">Pais:</label>
									<input type="text" class="form-control  input-sm" id="pais" name="pais" value="<?= $empleados->pais?>">
								</div>
							</div>
							<fieldset><legend><small>En Caso de Emergencia</small></legend> 
								<p>
								<div class="row">
									<div class="col-md-4 form-group">
										<label for="nombree">Nombre de Emergencia:</label>
										<input type="text" class="form-control  input-sm" id="nombree" name="nombree" value="<?= $empleados->nombreE?>">
									</div>
									<div class="col-md-4 form-group">
										<label for="parentezco">Parentezco:</label>
										<input type="text" class="form-control input-sm" id="parentezco" name="parentezco" value="<?= $empleados->parentescoE?>">
									</div>
									<div class="col-md-4 form-group">
										<label for="telefonoe">Telefono:</label>
										<input type="text" class="form-control input-sm" id="telefonoe" name="telefonoe" value="<?= $empleados->telefonoE?>">
                            		</div>
									<div class="col-md-4 form-group">
										<label for="celulare">Celular:</label>
										<input type="text" class="form-control input-sm" id="celulare" name="celulare" value="<?= $empleados->celularE?>">
                            		</div>
								</div>
								<p>
							<fieldset>
							<div class="form-group">
								<button type="submit" class=" btn btn-primary btn-sm">Guardar</button>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->