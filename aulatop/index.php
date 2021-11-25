<?php
session_start();
 if (!isset($_SESSION['logado'])) {
    require_once "layouts/login.php";
 } else {
        include "bibliotecas/parametros.php";
        include "bibliotecas/conexao.php";
    
        include LAYOUTS.'header.php';
    
        include LAYOUTS.'menu.php';
    
        if (!isset($_GET['pagina']))
            include LAYOUTS.'home.php';
        else
            include CADASTROS.$_GET['modulo'].'/'.$_GET['pagina'].'.php';
    
        include LAYOUTS.'footer.php';

        if (isset($_GET['desconectar'])) {
            $_SESSION['usuario'] = null;
            session_destroy();
           // unset($_SESSION['logado']);
            header("Location: index.php");
        }
 }

 if (isset($_POST['cadastro'])) {
   require_once 'layouts/cadastro.php';
}


