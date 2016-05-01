<?php require VIEW_ROOT . '/templates/header.php'; ?>

<h2>Edit song</h2>

<form action="<?php echo BASE_URL; ?>/admin/edit.php" method="POST" autocomplete="off">
	<label for="title">
		Title
		<input class="admin-edit" type="text" name="title" id="title" value="<?php echo e($song['title']); ?>" >
	</label>
	
	<label for="artist">
		Artist
		<input class="admin-edit" type="text" name="artist" id="artist" value="<?php echo e($song['artist']); ?>" >
	</label>
	
	<label for="slug">
		Slug
		<input class="admin-edit" type="text" name="slug" id="slug" value="<?php echo e($song['slug']); ?>" >
	</label>
	
	<label for="body">
		Content
		<textarea class="admin-edit" name="content" id="content" cols="30" rows="10" ><?php echo e($song['content']); ?></textarea>
	</label>
	
	<input type="hidden" name="id" value="<?php echo e($song['id']); ?>" >
	
	<input type="submit" value="Edit">
</form>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>