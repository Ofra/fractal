<?php include "../php/conexion.php";?>
<div class="title-view">
	<h1>Create a new user</h1>
</div>
<section id="fondo-form">
	
	<div class="team">
		<div id="head-team" >
			<a class="icon-user gruop-icon"> Add User</a>
		</div>
		
		<form  role="form" class="form-horizontal" method="post" enctype="multipart/form-data" action="php/insert_user.php">
			<table>
				<tr>
					<td>Username:*</td>
					<td><input name="username" type="text" required></td>
				</tr>
				<tr>
					<td>First Name:*</td>
					<td><input name="firstname" type="text" required></td>
				</tr>
				<tr>
					<td>Last name:*</td>
					<td><input name="lastname" type="text" required></td>
				</tr>
				<tr>
					<td>Password:*</td>
					<td><input name="pass"  type="text" required></td>
				</tr>
				<tr>
					<td>Title:*</td>
					<td><input name="title" type="text" required></td>
				</tr>
				<tr>
					<td>Phone:*</td>
					<td><input name="phone" type="text" required></td>
				</tr>
				<tr>
					<td>Address:*</td>
					<td><input name="address" type="text" required></td>
				</tr>
				<tr>
					<td>Email:*</td>
					<td><input name="email" type="mail" required></td>
				</tr>
				<tr>
					<td>Image:*</td>
					<td><input name="image" id="file-team" type="file" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input name="save" id="guardar-team" type="submit" required value="Save"></td>
				</tr>
			</table>		
		</form>
			
	</div>	
		
	</section>