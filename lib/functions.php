<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	} 
	else if($_GET['page'] == 'bio'){
		// le reste du code
		include __DIR__.'/../pages/bio.php';
	} else if($_GET['page'] == 'contact'){
		include __DIR__.'/../pages/contact.php';
	}
	elseif($_GET['page'] == 'admin'){
		include __DIR__.'/../public/admin.php';
	}
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData($filePath){
	$data = file_get_contents($filePath);
	$decode = json_decode($data);
	foreach($decode as $key => $value){
		echo("<br>"."<b>".$key." :</b> $value "); // Affiche l'array a cause du foreach 
		$type = gettype($value);
            if ($type == "array") {
				foreach($value as $val) {
					echo("<br>");
					echo("<br>".$val->year);
					echo("<br>".$val->company);
					echo("<br>");
				}
			}
		}
}