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
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th {
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <div style="width: 500px;border:1px solid black;position: relative">
            
            <a href="AgresarSeccion.php?id=0&action=add" style="margin-top: 10px!important;text-align: right">AGREGAR SECCIÓN</a>
            <br><br>
            <table>
                <thead>
                    <th>IMG</th>
                    <th style="width: 60%">SECCION</th>
                    <th>ACCIONES</th>
                </thead>
                <tbody>
                    <?php 
                    $sqlquery = "SELECT * FROM tbl_secciones";
                    $result = mysqli_query($myConnection, $sqlquery);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td>
                            <?php if($row['seccion_img']!=''){?>
                            <img src="../../img/secciones/<?=$row['seccion_img']?>" style="width: 100px">
                            <?php }?>
                        </td>
                        <td><?=$row['seccion_nombre']?></td>
                        <td>
                            <a href="AgresarSeccion.php?id=<?=$row['seccion_id']?>&action=edit">Editar</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </body>
</html>
