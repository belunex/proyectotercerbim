<h1>Inicio</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>Modificar Estudiante</h1>

<?php            
/*<form action="<?php echo base_url();?>index.php/estudiante/agregarbd" method="POST">*/
?>
            <?php     
                foreach($infoestudiante->result() as $row)
                {       
                    echo form_open_multipart('estudiante/modificarbd');
            ?>
                    <input type="hidden" name="idestudiante" class="form-control" value="<?php echo $row->idEstudiante?>">

                    <input type="text" name="nombre" placeholder="Escriba el nombre" class="form-control" value="<?php echo $row->nombre?>"><br>

                    <input type="text" name="apellido1" placeholder="Escriba el primer apellido" class="form-control" value="<?php echo $row->primerApellido?>"><br>

                    <input type="text" name="apellido2" placeholder="Escriba el segundo apellido" class="form-control" value="<?php echo $row->segundoApellido?>"><br>
                    
                    <button type="submit" class="btn btn-success">Modificar</button>
            <?php            
                    echo form_close();
                }    
            ?>
<!--</form>-->
        </div>
    </div>
</div>