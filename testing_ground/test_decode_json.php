<?php

$videos = json_decode(file_get_contents('videos.json'), true);
echo $videos[0]["id"];

?>
