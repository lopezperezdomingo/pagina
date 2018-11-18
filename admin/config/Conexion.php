<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author felipe de jesus
 */
$host= "localhost";
$user= "sigh381493718local";
$password = "sigh-381493718-local";
$database = "ham_oconsingo";
$myConnection   = mysqli_connect($host, $user, $password, $database);
if (!$myConnection) {
   echo "ERROR AL CONECTARSE A MySQL: " . mysqli_connect_error();
}  
