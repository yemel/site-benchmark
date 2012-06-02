<h1>Usuarios Index</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Username</th>
		<th>Created</th>
	</tr>

	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($user['User']['username'], 
array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
		</td>
		<td><?php echo $user['User']['created']; ?></td>
	</tr>
	<?php endforeach; ?>

</table>