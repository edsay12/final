

<?php
// headee


// <!-- navegaçao -->


// <!-- Paginas do meu site --

if (!isset($_SESSION['usuario'])) {
    $usuario = "edvan@hotmail.com";
    $senha = '123456';

session_start();
$_SESSION['usuario']=$usuario; 
$_SESSION['email']=$senha; 

switch ($_GET['pg']) {
    case 'cpanel':
    include_once "app/paineladm/index.php";
        break;
    
    case 'login':
        include_once "app/paineladm/index.php";
        break;
    
    
    
}


} else {
    include_once "app/paineladm/paginas/login.php";
  }