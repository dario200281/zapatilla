<?php
// comienzo la conexion
include_once '../includes/db.php';
$conn = openCon('../config/db_login.ini'); // si o si devuelve un return
                  // los datos vienen del html name por medio del post
                  // guardamos en una variable ejemplo$usr despues usamos una funcion llamada mds que sirve para que loas contraseña coincidan con l bdd
$usr = $_POST['username']; // email o nombre
$pass = md5($_POST['password']);//md5 encrpta el us


$conn -> set_charset("utf-8");
$sql = "select * from users where (username ='$usr' or email   = '$usr') and (password = '$pass')";

$result =$conn -> query($sql);

$row= $result -> fetch_assoc();

if ($row==0)
    
    echo "<h1> ingreso invalido </h1>";
    
    else
        session_start();
        $_SESSION['uname']=$usr;
        $_SESSION['logueado']=true;
        $_SESSION['time'] = date('H:i:s');
        
        header ("location:welcome.php")
        
        ?>




























































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































uario

$con->set_charset("utf-8"); // nos aseguramos que toda la conexion este en utf8
                            // objeto->metodo(invoco)

// armamos la query de la conexion con login
$sql="select * from users where (username='$usr' or email='$usr') and (password='$pass')";
$result=$con->query($sql);
$row=$result->fetch_assoc();

if($row==0)//si no encontro nada devuelve el mensaje
{
    echo "<h1> Ingreso invalido </h1>";
}
else 
    
    session_start();
    $_SESSION['uname']=$usr;
    $_SESSION['logueado']=true;
    $_SESSION['time']=date ('H.i.s');//me ingresa la hora de la conexion
    header ("location:welcome.php");
    



?>