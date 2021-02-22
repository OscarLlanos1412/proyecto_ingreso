<?php
    require '../conexion/conec.php';
  

    if($_POST["enviar"]){
        //Declaramos las variables para almacenar los datos digitados
        $user = $_POST["usuario"];
        $clave = $_POST["clave"];

        //Hacemos la consulta para que me seleccione los datos en la BD y valide
        $consul = "SELECT * FROM user WHERE nom_user = '$user' AND clave = '$clave'";
        $query = mysqli_query($mysqli,$consul);
        $fila = mysqli_fetch_assoc($query);

        //Hacemos una toma de decision para que se logee el usuario correctamente
        if($fila){
            $_SESSION['nombre'] = $fila['nom_user'];
            $_SESSION['id_tip_usu'] = $fila['id_tip_user'];
            
            //Hacemos la toma de decision para determinar quien se va a logear
            if($_SESSION['id_tip_usu'] == 1){
                header('Location:../admin/admin.php');
                exit();
            }
            elseif ($_SESSION['id_tip_usu'] == 2) {
                header('Location:../usuario/usuario.php');
                exit();
            }
            else{
                echo "No perro no cogio";
            }
        }
        else{
            echo '<script> alert ("Verifica que el usuario y contraseña esten ingresados correctamente");</script>';
            echo '<script> window.location="../index.php" </script>';
        }
    }
    else{
        echo '<script> alert ("Ups algo fallo, intentalo de nuevo");</script>';
        echo '<script> window.location="../index.php" </script>';
    }
    // $usuario = $_POST['usuario'];
    // $contra = $_POST['clave'];
    // session_start();
    // $_SESSION['usuario'] = $usuario;

    // $connex = mysqli_connect("localhost", "root", "", "ingreso");;

    // $consulta = "SELECT * FROM user WHERE nom_user = '$usuario' AND clave = '$contra'";
    // $query = mysqli_query($connex,$consulta);
    // $filas = mysqli_num_rows($query);

    // if($filas){
    //     header("location:inicio.php");
    // }
    // else{
    //      
    //         include('index.php');
    //     
     //     <h1 class="error">Error</h1> -->
    //     <?php
    // }
    // mysqli_free_result($query);
    // mysqli_close($connex);
?>
  