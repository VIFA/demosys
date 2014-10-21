<?php //print_r($users); die(); ?>
<div class="users form well bs-component">
	<h3>Usuarios</h3>
	<hr />
	<table class="table table-striped table-hover ">
		<thead>
			<tr>
				<th style="width:60px;"><?php echo $this->paginator->sort('id', 'Id') ?></th>
				<th><?php echo $this->paginator->sort('name', 'Nombre') ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $user) { ?>
				<tr class="active">
					<td><strong><?php echo $user['User']['id'] ?></strong></td>
					<td>
						<strong><?php echo $user['User']['name'].' '.$user['User']['last_name'] ?></strong>
						<br /><small><?php echo $roles[$user['User']['role']] ?></small>
						<br /><small>Nombre de usuario: <?php echo $user['User']['username'] ?></small>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>