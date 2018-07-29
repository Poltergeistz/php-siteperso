<div class="ui container">
<?php if(isset($_POST['email']) && isset($_POST['message'])) {
	$array = [];
	$array['email'] = $_POST['email'];
	$array['message'] = $_POST['message'];
	$encode = json_encode($array);
	file_put_contents('./../data/last_message.json', $encode);
}?>
<h4> Merci, votre message a bien été envoyé ! </h4>
<a href="/">Retour a l'accueil</a>
</div