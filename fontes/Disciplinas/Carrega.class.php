<?php

function __autoload($classe) {
	$dir = str_replace("\\","/",dirname(__FILE__));

	if(file_exists($dir."/".$classe.".class.php")) {
		include($dir."/".$classe.".class.php");
	} else {
		if(file_exists($dir."/modelo/".$classe.".class.php")) {
			include($dir."/modelo/".$classe.".class.php");
		} else {
			if(file_exists($dir."/dao/".$classe.".class.php")) {
				include($dir."/dao/".$classe.".class.php");
			} else {
					echo $dir."/dao/".$classe.".class.php";
				exit("Arquivo não encontrado!");
			}
		}
	}
}

