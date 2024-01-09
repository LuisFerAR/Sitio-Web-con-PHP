<?php 
include("../../bd.php"); 
include("../../templates/header.php");  ?>


<div class="card" style="background-color: #E5E5DF">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar entrada</a>
    </div>
    <div class="card-body" style="background-color: #F0F0F0" >

        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>1</td>
                        <td>11-02-2023</td>
                        <td>Inicia empresa</td>
                        <td>Empresas para todos</td>
                        <td>imagen1.jpg</td>
                        <td>Editar | Borrar</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    <div class="card-footer text muted" ></div>
  
</div>




<?php  include("../../templates/footer.php");  ?>