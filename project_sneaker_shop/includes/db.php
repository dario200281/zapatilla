<?php 
function openCon($config_ini)
{
    
$config=parse_ini_file($config_ini);
$conn=new mysqli ($config['SERVERNAME'],//creo la conexion
    $config['USERNAME'],
    $config['PASSWORD'],
    $config['NAMEDB']
    );
if ($conn==false)
die("no me pude conectar");
return $conn;
}
function closeCon($conn)//parametro de entrada $conn, que viene de la funcion anterior
{
    $conn->close();//cierra la conexion
}


?>
