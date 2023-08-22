<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista de Estudiantes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Estudiante Habilitados</h3><br>

                <h1><?php echo $fechatest;?></h1><br>
                <h1><?php
                    date_default_timezone_set('America/La_Paz');
                    echo date('Y/m/d H:i:s');
                ?></h1><br>
                    <a href="<?php echo base_url();?>index.php/estudiantelte/agregarlte">
                        <button type="button" class="btn btn-primary">Crear Estudiante</button>
                    </a>

                    <a href="<?php echo base_url();?>index.php/estudiantelte/deshabilitadoslte">
                        <button type="button" class="btn btn-warning">Ver lista deshabilitados</button>
                    </a>

                    <a href="<?php echo base_url();?>index.php/usuarios/logout">
                        <button type="button" class="btn btn-danger">Cerrar Sesion</button>
                    </a>

                    <br>
                    <h3>
                      Login: <?php echo $this->session->userdata('login'); ?> <br>
                      Id: <?php echo $this->session->userdata('idusuario'); ?> <br>
                      Tipo: <?php echo $this->session->userdata('tipo'); ?> <br>
                    </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nro.</th>
                    <th>Nombre Completo</th>
                    <th>Creado</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                    <th>Deshabilitar</th>
                  </tr>
                  </thead>
                  <tbody>
         <?php
        $indice=1;
            foreach($estudiantes->result() as $row)
            {
        ?>    
                  <tr>
                    <td><?php echo $indice; ?></td>
                    <td><?php echo $row->nombre." ".$row->primerApellido." ".$row->segundoApellido; ?></td>
                    <td><?php echo formatearFecha($row->creado); ?></td>
                    <td>
                        <?php            
                            echo form_open_multipart('estudiantelte/modificarlte');
                        ?>
                            <input type="hidden" name="idestudiante" value="<?php echo $row->idEstudiante;?>">
                            <button type="submit" class="btn btn-success">Modificar</button>
                        <?php            
                            echo form_close();
                        ?>
                    </td>
                    <td>
                        <?php            
                            echo form_open_multipart('estudiantelte/eliminarbdlte');
                        ?>
                            <input type="hidden" name="idestudiante" value="<?php echo $row->idEstudiante;?>">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        <?php            
                            echo form_close();
                        ?>
                    </td>
                    <td>
                        <?php            
                            echo form_open_multipart('estudiantelte/deshabilitarbdlte');
                        ?>
                            <input type="hidden" name="idestudiante" value="<?php echo $row->idEstudiante;?>">
                            <button type="submit" class="btn btn-warning">Deshabilitar</button>
                        <?php            
                            echo form_close();
                        ?>
                    </td>
                  </tr>
        <?php
        $indice++;
            }
        ?>          
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nro.</th>
                    <th>Nombre Completo</th>
                    <th>Creado </th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                    <th>Deshabilitar</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->