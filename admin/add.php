<?php

require '../app/start.php';

if (!empty($_POST)){
	$artist = $_POST['artist'];
	$title = $_POST['title'];
	$slug  = $_POST['slug'];
	$content  = $_POST['content'];
	
	$insertPage = $db->prepare("
		INSERT INTO songs (artist, title, slug, content, created)
		VALUES (:artist, :title, :slug, :content, NOW())
	");
	
	$insertPage->execute([
		'artist' => $artist,
		'title' => $title,
		'slug'  => $slug,
		'content'  => $content,
	]);
	
	header('Location: ' . BASE_URL . '/admin/index.php');
}

require VIEW_ROOT . '/admin/add.php';
?>