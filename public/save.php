<?php if(isset($_POST['email']) && isset($_POST['message'])) {
	$array = [];
	$array['email'] = $_POST['email'];
	$array['message'] = $_POST['message'];
	$encode = json_encode($array);
	file_put_contents('./../data/last_message.json', $encode);
}?>