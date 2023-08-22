<h1>Inicio</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1>Agregar Estudiante</h1>

<?php            
/*<form action="<?php echo base_url();?>index.php/estudiante/agregarbd" method="POST">*/
?>
            <?php            
                echo form_open_multipart('estudiante/agregarbd');
            ?>
                <input type="text" name="nombre" placeholder="Escriba el nombre" class="form-control"><br>

                <input type="text" name="apellido1" placeholder="Escriba el primer apellido" class="form-control"><br>

                <input type="text" name="apellido2" placeholder="Escriba el segundo apellido" class="form-control"><br>
                
                <button type="submit" class="btn btn-success">Agregar</button>
            <?php            
                echo form_close();
            ?>
<!--</form>-->
        </div>
    </div>
</div>