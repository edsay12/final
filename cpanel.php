

<?php
// headee


// <!-- navegaçao -->


// <!-- Paginas do meu site -->

$paginas=isset($_GET['pg']);

if ($paginas) {
   
switch ($_GET['pg']) {
    case 'cpanel':
       include_once "app/paineladm/paginas/login.php";
        break;
    
    case 'inicial':
       include_once "app/site/paginas/inicial.php";
        break;
    


}

} else {
    include_once "app/site/paginas/inicial.php";
}

// <!-- Rodape -->



?>  


