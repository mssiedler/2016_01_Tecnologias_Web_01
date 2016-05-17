<?php


 
require 'config.php';
require 'dao/DisciplinaDAO.class.php';


$dao = new DisciplinaDAO();

$obj = $dao->listar();
print_r($obj);


?>