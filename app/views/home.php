<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if (empty($songs)): ?>
		<p>No songs found </p>
	<?php else: ?>
	
			<form class="search-form" action="search.php" method="POST">
				<input class="search-bar" type="text" name="search" placeholder="Search for song or artist" />
				<input class="search-submit" type="submit" value="Search" />
			</form>
			<br>
	
			<table class="search-results">
			
			<h3>Songs:</h3>
			<!--<thead>
				<tr>
					<th colspan="5">Songs</th>
				</tr>
			</thead>-->
			<thead><tr><th colspan="4">Title</th><th colspan="4">Artist</th><th>Views</th colspan="1"></tr></thead>
			<tbody>
			<?php foreach ($songs as $song): ?>
				<tr>
					<td colspan="4"><a href="<?php echo BASE_URL;?>/song.php?song=<?php echo $song['slug']; ?>"><?php echo $song['title']; ?></a></td>
					<td colspan="4"><a href="<?php echo BASE_URL;?>/song.php?song=<?php echo $song['slug']; ?>"><?php echo $song['artist']; ?></a></td>
					<td colspan="1" class="table-views"><?php echo $song['views']; ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	<?php endif; ?>
	
<?php require VIEW_ROOT . '/templates/footer.php'; ?>