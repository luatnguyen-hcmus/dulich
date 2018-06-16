<?php 
	$this->load->view('admin/catalog/head', $this->data);
?>
<div class="line"></div>
<div class="wrapper">
	<div class="widget">
		<div class="title">
			<h6>Add new Destination</h6>
		 	
		</div>
		<form class="form" id="form" action="add" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="formRow">
					<label class="formLeft" for="param_name">Name:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="name" id="param_name" value="<?php echo set_value('name')?>" _autocheck="true" type="text"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"><?php echo form_error('name') ?></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label class="formLeft" for="param_name">of Menu:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo">
							<select name="parent_id_menu" id="param_parent_id" _autocheck="true">
								<option value="0"> Parent Destination</option>
								<?php foreach($list_menu as $row) : ?>
									<option value="<?php echo $row->id ?>"><?php echo $row->title?></option>
								<?php endforeach?>
							</select>

						</span>
						<span name="parent_id_autocheck" class="autocheck"></span>
						<div name="parent_id_error" class="clear error"><?php echo form_error('parent_id') ?></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label class="formLeft" for="param_name">Parent Category:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo">
							<select name="parent_id" id="param_parent_id" _autocheck="true">
								<option value="0"> Is Parent Category</option>
								<?php foreach($list as $row) : ?>
									<option value="<?php echo $row->id ?>"><?php echo $row->name?></option>
								<?php endforeach?>
							</select>

						</span>
						<span name="parent_id_autocheck" class="autocheck"></span>
						<div name="parent_id_error" class="clear error"><?php echo form_error('parent_id') ?></div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label class="formLeft" for="param_name">Sort Order:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="sort_order" id="param_sort_order" value="<?php echo set_value('sort_order')?>" _autocheck="true" type="text"></span>
						<span name="sort_order_autocheck" class="autocheck"></span>
						<div name="sort_order_error" class="clear error"><?php echo form_error('sort_order') ?></div>
					</div>
					<div class="clear"></div>
				</div>	
				

				<div class="formSubmit">
           			<input type="submit" value="Add" class="redB">
           			<input type="reset" value="Reset" class="basic">
           		</div>
			</fieldset>
		</form>
	</div>
	
</div>