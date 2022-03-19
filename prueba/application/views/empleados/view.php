<div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
	<section class="content-header"><!-- Content Header (Page header) -->
		<h1>
			<small>Informacion</small>
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
							<div class="row">
								<div class="col-sm-4 form-group">
                                    <p><small><b>Nombre: </b><?php echo $empleados->nombres;?><?php echo " "?><?php echo $empleados->aPaterno;?><?php echo " "?><?php echo $empleados->aMaterno;?></small></p>
                                	<p><small><b>Profesion: </b><?php echo $empleados->profesion;?></small></p>
									<p><small><b>Fecha de Nacimiento: </b><?php echo $empleados->fechaNacimiento ?></small></p>
									<p><small><b>RFC: </b><?php echo $empleados->rfc;?></small></p>
									<p><small><b>CURP: </b><?php echo $empleados->curp;?></small></p>
									<p><small><b>Numero Seguro Social: </b><?php echo $empleados->nss;?></small></p>
									<p><small><b>Tipo de Sangre: </b><?php echo $empleados->tSangre;?></small></p>
									<p><small><b>Estado Civil: </b><?php echo $empleados->estadoCivil;?></small></p>
									<p><small><b>Email: </b><?php echo $empleados->email;?></small></p>
									<p><small><b># Celular: </b><?php echo $empleados->celular1;?></small></p>
								</div>
								<div class="col-sm-4 form-group">							
									<p><b><small> Fecha de Alta IMSS</small></b></p>
									<fieldset><legend><small> Direccion</small></legend>
									<p><small><b>Calle y numero: </b><?php echo $empleados->direccion;?></small></p>
									<p><small><b>Colonia: </b><?php echo $empleados->colonia;?></small></p>
									<p><small><b>Codigo Postal: </b><?php echo $empleados->codigoPostal;?></small></p>
									<p><small><b>Entre Calles: </b><?php echo $empleados->entreCalles;?></small></p>
									<p><small><b>Referencia: </b><?php echo $empleados->referencia;?></small></p>
									</fieldset>
								</div>
								<div class="col-sm-12 form-group">
									<fieldset><legend><small>En Caso de Emergencia</small></legend>
									<p><small><b>Nombre: </b><?php echo $empleados->nombreE;?></small></p>
									<p><small><b>Parentesco: </b><?php echo $empleados->parentescoE;?></small></p>
									<p><small><b>Telefono: </b><?php echo $empleados->telefonoE;?></small></p>
									<p><small><b>Celular: </b><?php echo $empleados->celularE;?></small></p>
								</div>
							</div>
							<div class="form-group">
							<a href="<?php echo base_url()?>Empleados" class="btn btn-primary btn-sm"><span class="fa fa-arrow-left"></span></a>				
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->