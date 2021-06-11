<?php

namespace viewsInformcontacto;

use controller\Controller;





$controller = Controller::getInstances();
$controller->AccesModel();
$controller->RegistrarUser($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['mensaje']);

header('Location: ../../index.php');

 ?>