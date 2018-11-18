<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './Conexion.php';
//error_reporting(0);
if($_POST['actionType']=='Secciones'){
    $seccion_nombre=$_POST['seccion_nombre'];
    $seccion_descripcion=$_POST['seccion_descripcion'];
    $seccion_img='';
    if($_FILES['seccion_img']['name']!=''){
        $seccion_img=date('YmdHis').'.'. end(explode(".", $_FILES['seccion_img']['name']));
        if(copy($_FILES['seccion_img']['tmp_name'], '../../img/secciones/'.$seccion_img)){
            
        }
    }
    if($_POST['seccion_action']=='add'){
        $sql="  INSERT INTO
                    tbl_secciones (seccion_id, seccion_nombre,seccion_descripcion,seccion_img)
                VALUES
                    (0, '$seccion_nombre','$seccion_descripcion','$seccion_img')";
        if (mysqli_query($myConnection,$sql) ) {
            echo "1";
        }else {
            echo "2";
        }
    }else{
        $sql="  UPDATE
                    tbl_secciones 
                SET 
                    seccion_nombre='$seccion_nombre',seccion_descripcion='$seccion_descripcion',seccion_img='$seccion_img'
                WHERE seccion_id=".$_POST['seccion_id'];
        if (mysqli_query($myConnection,$sql) ) {
            echo "1";
        }else {
            echo "2";
        }
    }
}