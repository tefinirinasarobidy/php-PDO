<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a href="https://sourcecodester.com" class="navbar-brand">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - SImple Insert Form Data Using PDO</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add user</button>
			<br /><br />
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Username</th>
						<th>Password</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require 'conn.php';
						$query = $conn->prepare("SELECT * FROM `user` ORDER BY `user_id` DESC");
						$query->execute();
						while($fetch = $query->fetch()){
					?>
						<tr>
							<td><?php echo $fetch['firstname']?></td>
							<td><?php echo $fetch['lastname']?></td>
							<td><?php echo $fetch['username']?></td>
							<td>******</td>
						</tr>	
					<?php
						}
					?>
				</tbody>
			</table>
		</div>	
	</div>
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="insert.php">
				<div class="modal-header">
					<h3 class="modal-title">Add User</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Firstname</label>
							<input class="form-control" type="text" name="firstname"/>
						</div>
						<div class="form-group">
							<label>Lastname</label>
							<input class="form-control" type="text" name="lastname"/>
						</div>
						<div class="form-group">
							<label>Username</label>
							<input class="form-control" type="text" name="username"/>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" type="password" name="password"/>
						</div>
					</div>	
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button class="btn btn-primary" name="insert"><span class="glyphicon glyphicon-save"></span> Save</button>
				</div>
			</form>
		</div>
	</div>
</div>	
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>
</html>