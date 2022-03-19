<div class="content-wrapper">
	<section class="content-header">
		<h3>
			Empleado<small> Nuevo</small>
		</h3>
	</section>
	<section class="content">
		<div class="box box-solid">
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<?php if($this->session->flashdata("error")):?>
							<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
							</div>
						<?php endif;?>
						<form action="<?php echo base_url();?>empleados/store" method="POST">
							<fielset><legemd></legemd>
								<div class="row">
									<div class="col-md-4 form-group">
										<label for="nombres" class="control-label"><small>Nombre:</small></label>
										<input type="text" class="form-control input-sm" id="nombres" name="nombres">
									</div>
									<div class="col-md-4 form-group">
										<label for="aPaterno" class="control-label"><small>Apellido Paterno:</small></label>
										<input type="text" class="form-control input-sm" id="aPaterno" name="aPaterno">
									</div>
									<div class="col-md-4 form-group">
										<label for="aMaterno" class="control-label"><small>Apellido Materno:</small></label>
										<input type="text" class="form-control input-sm" id="aMaterno" name="aMaterno">
									</div>
									<div class="col-md-6 form-group">
										<label for="profesion"><small>Profesion:</small></label>
										<input type="text" class="form-control input-sm" id="profesion" name="profesion" placeholder="Usar Mayusculas y minisculas">
									</div>
									<div class="col-md-4 form-group">
										<label for="fechaNacimiento"><small>Fecha de Nacimiento:</small></label>
										<input class="form-control input-sm" type="date" value="2011-08-19" name="fechaNacimiento" id="fechaNacimiento">
									</div>
								</div>
							</fielset>
							<fieldset><legend></legend>
								<div class="row">
									<div class="col-md-4 form-group">
										<label for="rfc"><small>RFC:</small></label>
										<input type="text" class="form-control input-sm" id="rfc" name="rfc">
									</div>
									<div class="col-md-4 form-group">
										<label for="curp"><small>CURP:</small></label>
										<input type="text" class="form-control input-sm" id="curp" name="curp">
									</div>
									<div class="col-md-4 form-group">
										<label for="nss"><small>Numero Seguro Social:</small></label>
										<input type="text" class="form-control input-sm" id="nss" name="nss">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 form-group">
										<label for="tSangre"><small>Tipo de Sangre:</small></label><br>
										<select name="tSangre" id="tSangre" class="form-control input-sm">
											<?php foreach($tiposangres as $tiposangre):?>
												<option value="<?php echo $tiposangre->tipoSangre?>"><?php echo $tiposangre->tipoSangre;?></option>
											<?php endforeach;?>
										</select>
									</div>
									<div class="col-md-4 form-group">
										<label for="estadoCivil"><small>Estado Civil:</small></label>
										<select name="estadoCivil" id="estadoCivil" class="form-control input-sm">
											<?php foreach($estadocivils as $estadocivil):?>
												<option value="<?php echo $estadocivil->estadoCivil?>"><?php echo $estadocivil->estadoCivil;?></option>
											<?php endforeach;?>
										</select>
									</div>
									<div class="col-md-4 form-group">
										<label for="email"><small>Email:</small></label>
										<input type="email" class="form-control input-sm" id="email" name="email">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 form-group">
										<label for="celular1"><small>Celular:</small></label>
										<input type="text" class="form-control  input-sm" id="celular1" name="celular1">
									</div>
									<div class="col-md-4 form-group">
										<label for="celular2"><small>Celular Secundario:</small></label>
										<input type="text" class="form-control input-sm" id="celular2" name="celular2">
									</div>
								</div>
							</fieldset>
							<fieldset><legend><small>Direccion</small></legend>
								<div class="row">
									<div class="col-md-6 form-group">
										<label for="direccion"><small>Calle y Numero:</small></label>
										<input type="text" class="form-control input-sm" id="direccion" name="direccion" placeholder="Calle y numero">
									</div>
									<div class="col-md-4 form-group">
										<label for="colonia"><small>Colonia:</small></label>
										<input type="text" class="form-control  input-sm" id="colonia" name="colonia">
									</div>
									<div class="col-md-2 form-group">
										<label for="codigopostal"><small>CP:</small></label>
										<input type="text" class="form-control  input-sm" id="codigopostal" name="codigopostal">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 form-group">
										<label for="entrecalles"><small>Entre Calles:</small></label>
										<input type="text" class="form-control input-sm" id="entrecalles" name="entrecalles">
									</div>
									<div class="col-md-4 form-group">
										<label for="referencia"><small>Referencia:</small></label>
										<input type="text" class="form-control input-sm" id="referencia" name="referencia" placeholder="Referencia del domicilio para su facil localizacion">
									</div>
									<div class="col-md-4 form-group">
										<label for="municipio"><small>Municipio:</small></label>
										<input type="text" class="form-control input-sm" id="municipio" name="municipio">
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 form-group">
										<label for="localidad"><small>Localidad:</small></label>
										<input type="text" class="form-control input-sm" id="localidad" name="localidad">
									</div>
									<div class="col-md-4 form-group">
										<label for="estado"><small>Estado:</small></label>
										<select name="estado" id="estado" class="form-control">
											<?php foreach($estados as $estado):?>
												<option value="<?php echo $estado->Estado?>"><?php echo $estado->Estado;?></option>
											<?php endforeach;?>
										</select>
									</div>
									<div class="col-md-4 form-group">
										<label for="pais"><small>Pais:</small></label>
										<input type="text" class="form-control  input-sm" id="pais" name="pais">
									</div>
								</div>
							</fieldset>
							<fieldset><legend><small>En Caso de Emergencia</small></legend>
								<div class="row">
									<div class="col-md-4 form-group">
										<label for="nombree"><small>Nombre de Emergencia:</small></label>
										<input type="text" class="form-control  input-sm" id="nombree" name="nombree">
									</div>
									<div class="col-md-4 form-group">
										<label for="parentescoe"><small>Parentezco:</small></label>
										<input type="text" class="form-control input-sm" id="parentescoe" name="parentescoe">
									</div>
									<div class="col-md-4 form-group">
										<label for="telefonoe"><small>Telefono:</small></label>
										<input type="text" class="form-control input-sm" id="telefonoe" name="telefonoe">
									</div>
									<div class="col-md-4 form-group">
										<label for="celulare"><small>Celular:</small></label>
										<select name="celulare" id="celulare" class="form-control input-sm">
											<?php foreach($estados as $estado):?>
												<option value="<?php echo $estado->Estado?>"><?php echo $estado->Estado;?></option>
											<?php endforeach;?>
										</select></div>
								</div>
							<fieldset>
							<div class="form-group">
								<button type="submit" class=" btn btn-primary btn-xs">Guardar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
