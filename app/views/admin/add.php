<?php require VIEW_ROOT . '/templates/header.php'; ?>

<h2>Add page</h2>

<form action="<?php echo BASE_URL; ?>/admin/add.php" method="POST" autocomplete="off">
	<label for="title">
		Title
		<input class="admin-edit" type="text" name="title" id="title" >
	</label>
	
	<label for="artist">
		Artist
		<input class="admin-edit" type="text" name="artist" id="artist" >
	</label>
	
	<label for="slug">
		Slug
		<input class="admin-edit" type="text" name="slug" id="slug" >
	</label>
	
	<label for="content">
		content
		<textarea class="admin-edit" name="content" id="content" cols="30" rows="10"></textarea>
	</label>
	
	<input type="submit" value="Add">
</form>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>