<?php
require '../app/start.php';
 
if (isset($_GET['id'])){
	//Delete
	$deletePage = $db->prepare("
		DELETE FROM songs
		WHERE id = :id
	");
	
	$deletePage->execute(['id' => $_GET['id']]);
}
 
header('Location: ' . BASE_URL . '/admin/index.php');
?>