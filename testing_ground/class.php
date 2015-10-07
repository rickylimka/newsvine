<?php
class Video {
	public $id = "";
	public $title = "";
	public $rating = 0;
	public $location = "";
	public $tags = "";
	public $comments = [];
}


$videos = array();


$v = new Video();
$v->id = "nwsv001";
$v->title  = "dog";
$v->rating = 5;
$v->location = "-27.485614, 152.992901";
$v->tags = "#animal #funny";
$v->comments = [
	"user1" => "hahahhaha",
	"user2" => "cute lol",
];


$v2 = new Video();
$v2->id = "nwsv002";
$v2->title  = "cat";
$v2->rating = 5;
$v2->location = "-27.485614, 152.992901";
$v2->tags = "#animal #funny";
$v2->comments = [
	"user1" => "hahahhaha",
	"user2" => "cute lol",
];




$videos[] = $v;
$videos[] = $v2;


$fp = fopen('videos.json', 'w');
fwrite($fp, json_encode($videos));
fclose($fp);

?>
