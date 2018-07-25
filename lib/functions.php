<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/


// 4. créez une fonction getUserData récupérez le contenu du fichier `data/user.json` 
// grâce à la fonction standard 'file_get_contents' et transformez le json en un 
// tableau PHP avec la fonction standard `json_decode` puis affichez ces informations 


function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}

// function getContent($name){
// 	if(!isset($_GET['page'])){
// 		include __DIR__.'/../pages/home.php';
// 	} else {
// 		include __DIR__.'../pages/'.$name.'.php';
// 	}
// }

function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	} else {
		include __DIR__.'../pages/'.$_GET['page'].'.php';
	}
}

function getUserData ($user) {

	$datas = file_get_contents(__DIR__.'../data/user.json');
	$table = json_decode($datas);
	return $table;
}