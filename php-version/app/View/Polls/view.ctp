<h1><?php echo $poll['Poll']['question']?></h1>
<ul>
<?php foreach ($poll['Choice'] as $choice): ?>
	<li><?php echo $choice['choice']; ?> 
		(<?php echo $choice['votes']; ?>)</li>
<?php endforeach; ?>
</ul>
