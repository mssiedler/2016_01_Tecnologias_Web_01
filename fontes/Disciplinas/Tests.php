<?php


 
require 'config.php';
require 'dao/DisciplinaDAO.class.php';


$dao = new DisciplinaDAO();

$obj = $dao->buscarPorChavePrimaria(456);
print_r($obj);


?>