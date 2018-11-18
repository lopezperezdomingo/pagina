<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include '../config/Conexion.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="width: 500px;border:1px solid red;padding: 10px">
            <form class="formSecciones">
                <?php 
                $sqlquery = "SELECT * FROM tbl_secciones WHERE seccion_id=".$_GET['id'];
                $result = mysqli_query($myConnection, $sqlquery);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                ?>
                <br><br>
                <label>NOMBRE DE LA SECCIÓN</label><br>
                <input type="text" name="seccion_nombre" style="width: 100%" value="<?=$row['seccion_nombre']?>">
                <br>
                <label>DESCRIPCIÓM DE LA SECCIÓN</label><br>
                <textarea type="text" name="seccion_descripcion" style="width: 100%"><?=$row['seccion_descripcion']?></textarea>
                <br>
                <label>SELECCIONAR IMAGEN</label><br>
                <input type="file" name="seccion_img"><br><br>
                <input type="hidden" name="actionType" value="Secciones">
                <input type="hidden" name="seccion_id" value="<?=$_GET['id']?>">
                <input type="hidden" name="seccion_action" value="<?=$_GET['action']?>">
                <button class="">GUARDAR</button><br><br>
            </form>
        </div>
    </body>
    <script src="../../js/jquery.min.js"></script>
    <script src="../js/secciones.js?<?= date('YmdHis')?>"></script>
</html>
