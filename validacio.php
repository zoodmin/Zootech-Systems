<?php

// usuaris registrats
if ( !session_id() ) @ session_start();
require_once "AccesBDenPhp.php";
if (!isset($connexio) || !$connexio) {
    die("Error al conectar a la base de datos. Verifica AccesBDenPhp.php.");
}
$sql = "SELECT * from zoomataro";

// dades per formulari registre

$_SESSION['usuari'] = $_POST["usuari"];
if ($_GET){

    $usuari = $_GET["usuari"];
    $contrasenya = $_GET["contrasenya"];
    $email = $_GET["email"];

    $sql = "SELECT username FROM usuaris WHERE username='$usuari';";

    $resultat = mysqli_query($connexio,$sql) or die (mysqli_error($connexio));

    $num = $resultat->num_rows; 

    if ($Num == 0) {

        $sql = "INSERT INTO `usuaris` (`username`,`email`, `pwd`) VALUES ('$usuari', '$email','$contrasenya');";
        $resultat = mysqli_query($connexio,$sql) or die (mysqli_error($connexio));

        if ($resultat){
            header('Location: login.php');
            exit;
        }
    }exit;

}
// dades per formulari login

if ($_POST) {
   
    $usuari = $_POST["usuari"];

    $contrasenya = $_POST["contrasenya"];
   
    $sql = "SELECT username, pwd from usuaris WHERE username = '$usuari';";

    $resultat = mysqli_query($connexio,$sql) or die (mysqli_error($connexio));
    
    $num = $resultat -> num_rows;

    if ($num > 0){

        $fila = $resultat-> fetch_assoc();
    
        if ($fila["pwd"]==$contrasenya){

                $_SESSION['usuario_validado'] == $fila["username"];
                header("Location: home.php");
        }else{
               header("Location: login.php?error=contrasenya");
                
        }
    }else{
            header("Location: login.php?error=usuari"); 
    }

    
}
?>