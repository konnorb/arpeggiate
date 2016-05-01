<?php
require 'app/start.php';
require VIEW_ROOT . '/templates/header.php';


mysql_connect("localhost", "root", "") or die("Doesn't connect");
mysql_select_db("arpeggiate") or die("doesnt werk");
$output ='';

if(isset($_POST['search'])) {
	$searchq = $_POST['search'];
	$query = mysql_query("SELECT * FROM songs WHERE title LIKE '%$searchq%'") or die("errord");
	$count = mysql_num_rows($query);
	
	if($count == 0) {
		$output = 'There were no search results';
	}else{
		while($row = mysql_fetch_array($query)){
		$titleq = $row['title'];
		$artistq = $row['artist'];
		$slugq = $row['slug'];
		$viewsq = $row['views'];
		
		$output .= '<tr>
						<td colspan="4"><a href="' . BASE_URL . '/song.php?song=' . $slugq . '">' . $titleq . '</a></td>
						<td colspan="4"><a href="' . BASE_URL . '/song.php?song=' . $slugq . '">' . $artistq . '</a></td>
						<td colspan="1" class="table-views">' . $viewsq . '</td>
					</tr>';
		}
	}
}
?>

<form class="search-form" action="search.php" method="POST">
	<input class="search-bar" type="text" name="search" placeholder="Search for song or artist" />
	<input class="search-submit" type="submit" value="Search" />
</form>
<br>

<table class="search-results">
<h3>Results:</h3>
<thead><tr><th colspan="4">Title</th><th colspan="4">Artist</th><th>Views</th colspan="1"></tr></thead>
	<tbody>					
	<?php print("$output"); ?>
	</tbody>
</table>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>