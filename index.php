<?php 

	require 'header.php'; 
	require 'posts.php';

	$posts_list = new PostsList();	
	
	foreach($posts_list->getRandom(3) as $random_post)
	{
		extract($random_post);
		?>
		<div class="post">
		<table class="table table-bordered">
			<tr><th>Author:</th><td><?php echo $author; ?></td></tr>
			<tr><th>Date:</th><td><?php echo $data; ?></td></tr>
			<tr><th>Title:</th><td><?php echo $title ?></td></tr>
			<tr><th>Content:</th><td><?php echo $content ?></td></tr>
		</table>
		<?php
	}

require 'footer.php';
?>