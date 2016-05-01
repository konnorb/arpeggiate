 <?php
require '../app/start.php';

if (!empty($_POST)){
	$id    = $_POST['id'];
	$artist = $_POST['artist'];
	$title = $_POST['title'];
	$slug  = $_POST['slug'];
	$content  = e($_POST['content']);
	
	$updatePage = $db->prepare("
		UPDATE songs
		SET
			artist   = :artist,
			title   = :title,
			slug    = :slug,
			content    = :content,
			updated = NOW()
		WHERE id = :id
	");
	
	$updatePage->execute([
		'id' => $id,
		'artist' => $artist,
		'title' => $title,
		'slug' => $slug,
		'content' => $content,
	]);
	
	header('Location: ' . BASE_URL . '/admin/index.php');
}


if (!isset($_GET['id'])){
	header('Location: ' . BASE_URL . '/admin/index.php');
	die();
}

$song = $db->prepare("
	SELECT id, title, artist, content, slug
	FROM songs
	WHERE id = :id

");

$song->execute(['id' => $_GET['id']]);
$song = $song->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/edit.php';
?>