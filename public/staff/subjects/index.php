<!-- 

Teodulfo Espero
BS Cloud and Systems Administration
Western Governors University 

-->	

<?php 
	

	require_once('../../../private/initialize.php'); 
	$pageTitle = 'Subjects Menu';
	include(SHARED_PATH . '/staff_header.php');

	// our array that simulates a table/database
	$subjects = [
		['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Global Bank'],
		['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
		['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
		['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
	];

?>


<div id="content">
	<div class="subjects listing">
		<h1>Subjects</h1>

		<div class="actions">
				<a class="action" href="">Create New Subject</a>
		</div>

		<table class="list">
			<tr>
				<th>ID</th>
				<th>Position</th>
				<th>Visible</th>
				<th>Name</th>
				<th colspan="3">Actions</th>
			</tr>

			<?php
				foreach ($subjects as $subject) {
			?>
				<tr>
					<td><?php echo $subject['id']; ?></td>
					<td><?php echo $subject['position']; ?></td>
					<td><?php echo $subject['visible'] == 1 ? 'True' : 'False'; ?></td>
					<td><?php echo $subject['menu_name']; ?></td>
					<td><a class="action" href="<?php echo url_for('/staff/subjects/show.php?id=' . $subject['id']); ?>">View</a></td>
					<td><a class="action" href="<?php echo url_for('/staff/subjects/edit.php?id=' . $subject['id']); ?>">Edit</a></td>
					<td><a class="action" href="<?php echo url_for('/staff/subjects/delete.php?id=' . $subject['id']); ?>">Delete</a></td>
				</tr>

			<?php }?>
		</table>
	</div>
</div>

<?php 

	include(SHARED_PATH . '/staff_footer.php');

?>


