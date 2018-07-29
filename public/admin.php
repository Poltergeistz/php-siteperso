<div class="ui container">
<h4> Dernier message : </h4>
<?php
    $lastMessage = file_get_contents(__DIR__.'/../data/last_message.json');
    $lData = json_decode($lastMessage);
    foreach($lData as $key => $value){
    echo "<div>";
    echo "<p>".$key. " : ".$value."</p>";
    echo "</div>";
    }
?>
</div>