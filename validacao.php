<?php
    

    <?php
    

    if(!empty($_POST) AND (empty($_POST['usuario'])) OR (empty($_POST['senha']))){
        header("location: index.php"); exit;
    }

    include 'config.php';

    
    $usuario = $conn->real_escape_string($_POST['usuario']);
    $senha = $conn->real_escape_string($_POST['senha']);

    

    // validação de usuário e senha digitados

    $sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios`
        WHERE (`usuario`='".$usuario."') AND (`senha`='".sha1($senha)."')
        AND (`ativo`=1) LIMIT 1";

    $resultado=$conn->query($sql);
    
    if($resultado->num_rows !=1){

        // mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

        echo"login inválido";
        exit;

    }else{
        // salva os dados na variável $linha
        echo "Login Existente";
        $linha=$resultado->fetch_assoc();

        if(!isset($_SESSION)) session_start();

        $_SESSION['UsuarioID']=$linha['id'];
        $_SESSION['UsuarioNome']=$linha['nome'];
        $_SESSION['UsuarioNivel']=$linha['nivel'];

        header("location: restrito.php");exit;

    }
?>
