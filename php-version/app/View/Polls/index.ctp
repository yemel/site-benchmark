<h1>Polls Index</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Question</th>
		<th>Created</th>
	</tr>

	<?php foreach ($polls as $poll): ?>
	<tr>
		<td><?php echo $poll['Poll']['id']; ?></td>
		<td><?php echo $this->Html->link($poll['Poll']['question'], 
array('controller' => 'polls', 'action' => 'view', $poll['Poll']['id'])); ?>
		</td>
		<td><?php echo $poll['Poll']['created']; ?></td>
	</tr>
	<?php endforeach; ?>

</table>