<?php
session_start();

if(!@include_once('class/database.php')) throw new Exception('classe database não pode ser carregada.');

if(!@include_once('class/valid.php')) throw new Exception('classe Valid não pode ser carregada.');

if(!@include_once('class/account.php')) throw new Exception('classe Account não pode ser carregada.');

if(!@include_once('class/story.php')) throw new Exception('classe Story não pode ser carregada.');

function loadmodule(){

	if(isset($_GET['page'])) {

		$page = 'modules/'.$_GET['page'].'.php';

    		if(file_exists($page)){

    			include($page);

		} else { echo '404';}
	} else { include('modules/home.php');}

}

if(!@include_once('template/index.php')) throw new Exception('index não pode ser carregada.');

?>