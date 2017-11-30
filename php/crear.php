<?php
    session_start(); 
    include_once "conexion.php";
    if(isset($_POST['registrar'])) 
    { 

        $buscarUsuario = "SELECT * FROM usuarios
        WHERE nombre_user = '$_POST[nombreusuario]' ";
        
        $resultado1 = $con->query($buscarUsuario);
        $count = mysqli_num_rows($resultado1);

        if($count == 0){ 
            $usuario = $_POST['nombreusuario'];
            $pass = $_POST['password'];
            $passcode = base64_encode($pass); 
            $sql1 = "INSERT INTO usuarios (nombre_user,pass_user) VALUES ('$usuario','$passcode')";
            
            if($con->query($sql1) == TRUE){
                //echo '<br><h1>Usuario registrado correctamente.</h1>';
            }
        }else{ 
            //echo 'Este usuario ya ha sido registrado anteriormente.'; 
        }
        mysqli_close($con); 
    } 
?>

<script type="text/javascript">
    $(location).attr('href','localhost/menu01' );
</script>