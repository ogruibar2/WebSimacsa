<div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
	<section class="content-header"><!-- Content Header (Page header) -->
		<h1>
			Empleados<small>Listado</small>
		</h1>
	</section><!-- Main content -->
	<section class="content"><!-- Default box -->
		<div class="box box-solid">
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo base_url();?>Empleados/add" class="btn btn-primary btn-xs"><span class="fa fa-plus"></span> Agregar</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<table id="example1" class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>#</th>
								<th>Nombres</th>
								<th>Profesion</th>
								<th>Fecha Nacimiento</th>
								<th>Opciones</th>
							</tr>
							</thead>
							<tbody>
							<?php if(!empty($empleados)):?>
								<?php foreach($empleados as $empleado):?>
									<tr>
										<td><?php echo $empleado->idEmpleado;?></td>
										<td><?php echo $empleado->nombres;?><?php echo " "?><?php echo $empleado->aPaterno;?><?php echo " "?><?php echo $empleado->aMaterno;?></td>
										<td><?php echo $empleado->profesion;?></td>
										<td><?php echo $empleado->fechaNacimiento;?></td>
										<td>
											<a href="<?php echo base_url()?>Empleados/view/<?php echo $empleado->idEmpleado;?>" class="btn btn-info btn-sm"><span class="fa fa-eye"></span></a>	
											<a href="<?php echo base_url()?>Empleados/edit/<?php echo $empleado->idEmpleado;?>" class="btn btn-warning btn-sm"><span class="fa fa-pencil"></span></a>
											<a href="<?php echo base_url();?>Empleados/delete/<?php echo $empleado->idEmpleado;?>" class="btn btn-danger btn-remove btn-sm"><span class="fa fa-remove"></span></a>
										</td>
									</tr>
								<?php endforeach;?>
							<?php endif;?>
							</tbody>
						</table>
					</div>
				</div>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->