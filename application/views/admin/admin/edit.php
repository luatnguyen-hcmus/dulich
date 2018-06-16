<?php 
	$this->load->view('admin/admin/head', $this->data);
?>
<div class="line"></div>
<div class="wrapper">
	<div class="widget">
		<div class="title">
			<h6>Edit Admin</h6>
		 	
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="formRow">
					<label class="formLeft" for="param_name">Name:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="name" id="param_name" value="<?=$info->name?>" _autocheck="true" type="text"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('name') ?></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label class="formLeft" for="param_username">UserName:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="username" id="param_username" value="<?=$info->username?>" _autocheck="true" type="text" readonly></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('username') ?></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label class="formLeft" for="param_password">Password:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="password" id="param_password" _autocheck="true" type="password"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('password') ?></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label class="formLeft" for="param_re_password">Confirm Password:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="re_password" id="param_re_password" _autocheck="true" type="password"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('re_password') ?></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label class="formLeft" for="param_re_password">Role:<span class="req">*</span></label>
					<div class="formRight">
						<?php foreach($config_permissions as $controller => $actions) : ?>
							<?php 
								$permissions_actions = array();

								if(isset($info->permissions->{$controller})){
									$permissions_actions = $info->permissions->{$controller};
								}
							?>

							<div>
								<label><b><?php echo $controller?> : </b></label>
								<?php foreach($actions as $action):?>
									<label><input type="checkbox" name="permissions[<?php echo $controller ?>][]" value="<?php echo $action ?>" <?php echo (in_array($action, $permissions_actions)) ? "checked" : "" ?> /><?php echo $action ?></label>
								<?php endforeach?>
							</div>
							<div class="clear"></div>
						<?php endforeach ?>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formSubmit">
           			<input type="submit" value="Update" class="redB">
           			<input type="reset" value="reset" class="basic">
           		</div>
			</fieldset>
		</form>
	</div>
	
</div>