<div class="d-flex flex-row grpcontainer">
	
<?php
$selectallusersgrps=mysqli_query($con,"SELECT * FROM groups where admin_id='$user_identity'")or die($con->error);
if (mysqli_num_rows($selectallusersgrps)>0) {
 	while ($fetgrps=mysqli_fetch_array($selectallusersgrps)) {
 		$id=$fetgrps['id'];
 		$sqlect=mysqli_query($con, "SELECT count(user_id) as Totalusers FROM grp_users where grp_id='$id' ")or die($con->error); 
 		$fetgr=mysqli_fetch_array($sqlect); 
 		?>
 		<div class="col-lg-2 grps rounded bg-white shadow p-2 ml-2">

 			<div class="row">
 				<div class="col-lg-12">
 					<img src="images/<?php echo$fetgrps['profile']?>" class="img-thumbnail" height="100px" width="100%">
 				</div>
 				<div class="col-lg-12 text-center p-2 text-primary">
 					<h4>
 						<?php
 						echo(substr(($fetgrps['name']),0,15))
 					?></h4>


 				
 				</div>
 				<div class="col-lg-12 mb-2 text-break">
 					<p><?php echo(substr(($fetgrps['description']),0,60))?> 
 					</p>
 					<span class="text-muted"><?php echo$fetgr['Totalusers']?> Members</span>
 				</div>
 				<div class="col-lg-12 x"> 
 					<form method="POST">
 						<input type="text" name="group_id" value="<?php echo$fetgrps['id']?>" hidden>
 						<input type="text" name="admin_id" value="<?php echo$fetgrps['admin_id']?>" hidden>
 						<input type="text" name="users_id" value="<?php echo$user_identity?>" hidden>
 						 <a class="btn btn-primary btn-block shadow" href="messages.php?unique_id_profile=<?php echo($user_identity)?>&usercontroller='messangerController'&unique_id_profile_receiver=<?php echo($id)?>&messangerController='messagesAPi'&type=1">Participate</a>
 						<button class="btn btn-block btn-danger shadow" name="delete" type="submit"> Remove</button>
 						<?php require"c_chat/removegrp.php"?>

 					</form>
 					
 				</div>
 			</div>
 			</div>
 		
 		<?php  		 
 	}
}else{
	?>
	no grps available
	<?php
}
?></div>