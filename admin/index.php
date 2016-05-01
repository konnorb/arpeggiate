 <?php
 require '../app/start.php';
 
 $songs = $db->query("
	SELECT id, artist, title, slug
	FROM songs
	ORDER BY created DESC
	")->fetchAll(PDO::FETCH_ASSOC);
 
 require VIEW_ROOT . '/admin/list.php';
 ?>