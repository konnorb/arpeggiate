<?php

require 'app/start.php';

if (empty($_GET['song'])){
	$song = false;
}else{
	//var_dump($_GET);
	$slug = $_GET['song'];
	
	$song = $db->prepare("
		SELECT *
		FROM songs
		WHERE slug = :slug
		LIMIT 1
	");
	
	$song->execute(['slug' => $slug]);
	
	$song = $song->fetch(PDO::FETCH_ASSOC);
	
	//var_dump($song);
	
	if ($song){
		$song['created'] = new DateTime($song['created']);
		
		if ($song['updated']){
			$song['updated'] = new DateTime($song['updated']);
		}
	}
}

require VIEW_ROOT . '/song/show.php';

?>