<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if (!$song): ?>
		<p>This song doesn't exist
	<?php else: ?>
		
		<h2><?php echo e($song['title']); ?></h2><h3>by: <?php echo e($song['artist']); ?></h3>
		
		<?php echo "<pre>" . e($song['content']) . "</pre>"; ?>
		
		<p class="faded">
			Created on <?php echo $song['created']->format('jS M Y'); ?>
			<?php if($song['updated']): ?>
				Last updated <?php echo $song['updated']->format('jS M Y'); ?>
			<?php endif;?>
		</p>
		
	<?php
	//View Counter
	$id = $song['id'];
	$updateViews = $db->prepare("	UPDATE songs
									SET views = views + 1
									WHERE id = :id
								");							
	$updateViews->execute([ 'id' => $id ]);						
	?>
		
		
		
	<?php endif;?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>