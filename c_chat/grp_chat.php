<?php
	if (mysqli_num_rows($selectallusersgrps)<= 0) {
					 ?>
		<h5 class="text-muted userselect">Select User </h5>
					 <?php
				}else{ 
			?> 
			<div class="row sticky-top">
				<div class="col-lg-12 ">
					<?php require"c_chat/grp_Receiver.php"?>
				</div>
				<div class="col-lg-12 p-3 text-muted" > 
					 <div id="message">
					 	
					 </div>
				</div> 
				<div class="col-lg-12 messagesendarea shadow-top pr-5 ">
					<?php echo$error?>
					<form method="POST" class="d-flex flex-row" id="sendmessageForm">

						<div class="file"> 
							<a class="nav-link" href="userscontainerformessage.php?unique_id_profile=<?php echo($user_identity)?>&usercontroller='messangerController'&unique_id_profile_receiver=&messangerController='messagesAPi'&type=">
							<i class="fa fa-arrow-left"></i></a>
						</div>
						<div class="flex-grow-1 mr-3">
							<label class="errorsending bg-dark text-danger" style="position: absolute;top: 0"></label>
							<input type="text" name="type" value="<?php echo$_GET['type']?>" hidden>
							<input type="text" name="unique_id_profile_receiver" value="<?php echo$_GET['unique_id_profile_receiver']?>" hidden>
							<input type="hidden" value="<?php echo($user_identity)?>" name="user_identity" placeholder="Send a message.." class="form-control" id="user_identity">
							<input type="hidden" value="<?php echo($user_receiver)?>" name="user_receiver"  class="form-control" id="user_receiver">
							<input type="text" name="messages" placeholder="Send a message.." class="form-control messageer" id="messageer">
						</div>
						<div class="send">
							<button type="submit" id="send" name="send" class="btn btn-sm "><i class="fa fa-arrow-right"></i></button>
						</div>
				</form>
			</div> 
		</div>

		<?php
	}
	?>


	<script type="text/javascript" src="js_chat/js_grp_chat.js"></script> 