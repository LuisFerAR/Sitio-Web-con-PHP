<?php
include("../../bd.php"); 

    //SELECCIONAR REGISTROS
    $sentencia=$conexion->prepare("SELECT * FROM `tbl_equipo`");
    $sentencia->execute();
    $lista_servicios=$sentencia->fetchAll(PDO::FETCH_ASSOC);


include("../../templates/header.php");  
?>

<div class="card"  style="background-color: #E5E5E0">
    <div class="card-header"> 
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registros</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">NombreCompleto</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Twitter</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">LinkedIn</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                        <td>R1C3</td>
                        <td>R1C3</td>
                        <td>R1C3</td>
                        <td>R1C3</td>
                        <td>
                            <a name="editar" id="editar" class="btn btn-info" href="editar.php?txtID=<?php echo $registros['ID'];?>" role="button">Editar</a>
                            <a name="eliminar" id="eliminar" class="btn btn-danger" href="index.php?txtID=<?php echo $registros['ID'];?>" role="button">Eliminar</a>      
                        </td>
                    </tr> 
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php  include("../../templates/footer.php");  ?>