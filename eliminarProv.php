<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  </head>
  <body>
  <br><br><br><br><br><br>
    <?php
    include("conexion.php");
    $id=$_GET["proveedor_id"];
    $ban=0;
    $consulta="SELECT * FROM producto WHERE proveedor_id=$id";
    $res=mysqli_query($con,$consulta);
    while($vec=mysqli_fetch_array($res)){
      if($vec[0]==$id){
        echo"<h1 class='alert-light text-center'> No se puede Eliminar</h1><br>";
        $ban=1;
      }
    }

      if($ban==0){
        $consulta2="DELETE FROM proveedor WHERE proveedor.id=$id";
        $res2=mysqli_query($con, $consulta2);
        if($res2){
        echo"<h1 class='alert-light text-center'>Proveedor eliminado</h1>";
      }
    }
echo"<a href='inicio.php' class='btn btn-outline-info btn-lg btn-block'>Ir a Home</a>";
    ?>
  </body>
</html>
