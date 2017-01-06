<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['p'])){
		include __DIR__.'/../pages/home.php';
	} else {
		$p = $_GET['p'];
		$pages = ['bio', 'contact', 'home'];
		$path = __DIR__ . '/../pages/' . $p . '.php';
		if(in_array($p, $pages) && file_exists($path)) {
			include $path;			
		} else {
			die('404');
		}
	}
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData(){
	$json = file_get_contents(__DIR__ . '/../data/user.json');
	$user = json_decode($json, true);
	return $user;
}