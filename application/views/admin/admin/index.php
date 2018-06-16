<?php 
	$this->load->view('admin/admin/head', $this->data);
?>
	<div class="line"></div>
	<div class="wrapper">

		<?php $this->load->view('admin/mesage', $this->data);?>

	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>List Admin</h6>
		 	<div class="num f12">Quantity: <b><?=$total?></b></div>
		</div>
		
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin')?>/images/icons/tableArrows.png" /></td>
					<td style="width:80px;">Identify</td>
					<td>FullName</td>
					<td>UserName</td>
					<td style="width:100px;">Action</td>
				</tr>
			</thead>
			
 			<tfoot>
				<tr>
					<td colspan="7">
					     <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="user/del_all.html">
									<span style='color:white;'>Delete All</span>
								</a>
						 </div>
							
					     <div class='pagination'></div>
					</td>
				</tr>
			</tfoot>
 			
			<tbody>
				<!-- Filter -->
				<?php  foreach ($list as $row) :?>
				<tr>
						<td><input type="checkbox" name="id[]" value="<?=$row->id?>" /></td>
						
						<td class="textC"><?=$row->id?></td>
						
						
						<td><span title="<?=$row->name?>" class="tipS">
							<?=$row->name?>					</span></td>
						
						
						<td><span title="<?=$row->username?>" class="tipS">
							<?=$row->username?>						</span></td>
						<td class="option">
							 <a href="<?php echo admin_url('admin/edit/'.$row->id) ?>" title="Edit" class="tipS ">
							<img src="<?php echo public_url('admin')?>/images/icons/color/edit.png" />
							</a>
							
							<a href="<?php echo admin_url('admin/delete/'.$row->id) ?>" title="Delete" class="tipS verify_action" >
							    <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
							</a>
						</td>
					</tr>					
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
<div class="clear mt30"></div>
