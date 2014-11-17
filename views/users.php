<?php include "../php/conexion.php";?>
<div class="title-view">
	<h1>Users</h1>
</div>
<div class="team">
	
	<div id="head-team" >
		<a class="icon-group gruop-icon"> Users</a>
		<a href="#/Add_users" class="icon-plus-alt"></a>
	</div>

	<section class="main-team">
		<table id="table_id" class="display" ng-model="table">
		    <thead>
		        <tr>
		            <th>Image</th>
		            <th>Username</th>
		            <th>Password</th>
		            <th>Title</th>
		            <th>Mail</th>
		            <th>Status</th>
		            <th>Read more</th>
		            <th>Update</th>
		            <th>Delete</th>
		        </tr>
		    </thead>
		    <tbody>
				<?php
					$status=0;
					$result = mysqli_query($con,"SELECT * FROM user");
					while ($rs = mysqli_fetch_array($result)){
						if($rs['uImg'] == '0'){
							$status = 'Disable';
						}else{
							$status = 'Enable';
						}

				?>
		        <tr>
		            <th><img src="<?php echo $rs['uImg'];?>" alt=""></th>
		            <th><?php echo $rs['uUser'];?></th>
		            <th><?php echo $rs['uPassword'];?></th>
		            <th><?php echo $rs['uTitle'];?></th>
		            <th><?php echo $rs['uMail'];?></th>
		            <th><?php echo $status; ?></th>
		            <th><a href="#/Description?id=<?php echo $rs['uId']; ?>" class="icon-user"></a></th>		
		            <th><a href="#/Update_user?id=<?php echo $rs['uId']; ?>" class="icon-gear"></a></th>
		            <th><a href="Delete_user.php?id=<?php echo $rs['uId']; ?>" class="icon-times"></a></th>
		        </tr>
		        <?php
					}
				?>
		    </tbody>
		</table>
	</section>
		
</div>