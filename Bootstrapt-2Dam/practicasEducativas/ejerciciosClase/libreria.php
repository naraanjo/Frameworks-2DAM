<?php

//Archivo de librería para conectar a una BBDD

$host="localhost";  //Direccion Ip/nombre de dominio del servidor de BBDD

$user="root";       //Usuario
 
$pass="";           //Contraseña

$base="framework";   //Nombre de la BBDD sobre la que nos queremos conectar

function Conectar()
{
  global $host,$user,$pass,$base; 
    
  $db=mysqli_connect($host,$user,$pass,$base);  
    
  if ($db==FALSE)
  {
      echo "Error al conectar".mysqli_connect_error();  
      exit ;
  }
  
  return $db;  
}

function ConsultaSimple($consulta)   //Funcion que ejecuta una consulta que no devuelve datos
{
   $db=Conectar();
   
   $resul=mysqli_query($db, $consulta);
   
   if (!$resul)  //Si ha dado un error
   {
       echo mysqli_error($db); //mostramos el error en esa consulta
   }
  
   Cerrar($db);
      
}

function ConsultaDatos($consulta)   //Funcion que ejecuta una consulta qu devuelve datos
{
    $db=Conectar();
    
    $filas=array();  //Declaramos un array para guardar las filas que devuelva la consulta
    
    $resul=mysqli_query($db, $consulta);
    
    if (!$resul)
    {
        echo mysqli_error($db);
    }
    else //Si no hay error, retornamos todas las filas
    {
      $filas=mysqli_fetch_all($resul,MYSQLI_ASSOC);  //Convertimos el resultado de la consulta en un array de filas Php
    }
    
    Cerrar($db);
    
    return $filas;
    
}


function Cerrar($db)
{
   mysqli_close($db);

}




?>