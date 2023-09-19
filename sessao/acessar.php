<?php   

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if (($usuario =="admin") && ($senha == "1234" )){
    $_SESSION['acesso'] = true;
    $_SESSION['nome_usuario'] = "Administrador";
    header('Location: principal.php');
} else {
    header('Location: index.php?acesso=negado');
    exit;
}
?>
