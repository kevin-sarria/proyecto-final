<?php

    include ("../controlador/c_editar_producto.php");
    /*AUTORES: GRUPO PROYECTO FONDO EMPRENDER
    * Copyright © Todos los derechos reservados
    */

?>
<!------------------------------------------v_Inserta_producto------------------------------------------------------------>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8" ></script>
    <link rel = "stylesheet" type = "text/css" href="../css/inicio.css">
    <link rel = "stylesheet" type = "text/css" href="../css/secciones_editar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    
</head>

<body>
    
    <?php  include("v_menu.php"); ?>
    <section id="container">

        <div class="form_insertar">
        <h1 class = "titulos_2">Editar Producto</h1>
        <!-- Activa la alerta si alguno de los campos no se rellena de forma adecuada -->
        <div class="galeria_producto">
        <?php include("v_img_prod.php"); ?>
        </div>

        <form class="form_editar_productos" action = ""  method="post" > 
        
            <div class="alert"><?php echo isset($aler) ? $aler : ""; ?></div>
            <input class ="input_2" type = "hidden" name = "id_producto" value="<?php echo $id_producto ?>">
            <br>Nombre del producto<br> <!--esto edita el nombre del producto-->
            <br><input class ="input_2" type = "text" name = "nombre_producto" value="<?php echo $nombre ?>">
            <!--<br>Tipo de producto<br>-->
            <select class="select" name = "id_tipo_producto"> <!-- empieza a dibujar una lista -->
            
            <?php 
        

            //Construye una consulta pero solo es texto
                $sql = "SELECT id_tipo_producto, Tipo_producto FROM tipo_producto";//------- dos campos
            //echo $sql;

            //ejecuta la consulta
            $resultado = $conexion->query( $sql );

            //Recorre los datos que arroja la consulta
            while( $fila = mysqli_fetch_array( $resultado ) )
            {

                $tmp = $fila[ 'id_tipo_producto' ] ;//--------- muestra los dos campos de una
                $tmp2 = $fila[ 'Tipo_producto' ];
                
                
                // Imprime los items de la lista.
                if($tipo == $tmp2){
                    echo "<option value='$tmp' selected='selected'> $tmp2 </option>";
                }else{
                    echo "<option value='$tmp'> $tmp2 </option>";
                }

            }

            ?>
            </select> <!--Termina la lista-->
            <!--<br>Empresa<br>-->
            <select class="select" name = "nit_empresa" ?>"> <!-- empieza a dibujar una lista -->

            <?php 


            //Construye una consulta pero solo es texto
            $sql = "SELECT nit_empresa, nombre_empresa FROM empresas";
            //echo $sql;

            //ejecuta la consulta
            $resultado = $conexion->query( $sql );

            //Recorre los datos que arroja la consulta
            while( $fila = mysqli_fetch_array( $resultado ) )
            {

                $tmp = $fila[ 'nit_empresa' ]; 
                $tmp2 = $fila[ 'nombre_empresa' ];
            
                //Ojo con el value. Imprime los items de la lista.
                if($empresa == $tmp2){
                    echo "<option value='$tmp' selected='selected'> $tmp2 </option>";
                }else{
                    echo "<option value='$tmp'> $tmp2 </option>";
                }
                

            }

            ?>
            </select> <!-- termina la lista -->

        
        <input class="botones_seccion_editar" type="submit" value="Editar Producto" class="btn_save">
        <div class="cam_img"><span>Cambiar imagen.</span></div>

        </form>
        </div>
    </section>

    <script>
                $(".cam_img").click(function(){
        $(this).toggleClass("active");
        $(".form_editar_productos").toggleClass("active");
        $(".galeria_producto").toggleClass("active");
        });

        $(".iconn").click(function(){
        $(this).removeClass("active");
        $(".form_editar_productos").removeClass("active");
        $(".galeria_producto").removeClass("active");
        });
    </script>

</body>