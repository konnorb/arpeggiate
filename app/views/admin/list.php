<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if (empty($songs)): ?>
		<p>No songs exist</p>
	<?php else: ?>
		<table class="search-results">
			<thead>
				<tr>
					<th>Song</th>
					<th>Artist</th>
					<th>Slug</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($songs as $song): ?>
					<tr>
						<td><?php echo e($song['title']); ?></td>
						<td><?php echo e($song['artist']); ?></td>
						<td><a href="<?php echo BASE_URL; ?>/song.php?song=<?php echo e($song['slug']);?>"><?php echo e($song['slug']); ?></a></td>
						<td><a href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo e($song['id']); ?>">Edit</a></td>
						<td><a href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo e($song['id']); ?>">Delete</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php endif; ?>

	<a href="<?php echo BASE_URL; ?>/admin/add.php">Add new song</a>
	
	
<?php require VIEW_ROOT . '/templates/footer.php'; ?>