<?php 
	$this->load->view('admin/transaction/head', $this->data);
?>
<div class="line"></div>

<!-- Main content wrapper -->
<div class="wrapper" id="main_transaction">
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>
				List Transaction		</h6>
		 	<div class="num f12">Quantity: <b><?php echo $total_rows?></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
			
			<thead class="filter"><tr><td colspan="10">
				<form class="list_filter form" action="<?php echo admin_url('transaction') ?>" method="get">
					<table cellpadding="0" cellspacing="0" width="80%"><tbody>
						<tr>
							<td class="label" style="width:40px;"><label for="filter_id">Identify</label></td>
							<td class="item"><input name="id" value="<?php echo $this->input->get('id') ?>" id="filter_id" type="text" style="width:55px;" /></td>
							<td style='width:150px'>
							<input type="submit" class="button blueB" value="Lọc" />
							<input type="reset" class="basic" value="Reset" onclick="window.location.href = '<?php echo admin_url('transaction') ?>'; ">
							</td>
							
						</tr>
					</tbody></table> 
				</form>
			</td></tr></thead>
			
			<thead>
				<tr>
					<td><img src="<?php echo public_url('admin')?>/images/icons/tableArrows.png" /></td>
					<td>Identify</td>
					<td>Customer</td>
					<td>Number Money Checkout</td>
					<td>Geometry checkout</td>
					<td>Status</td>
					<td>Created</td>
					<td>Day Checkout</td>
					<td>User Checkout</td>

					<td>action</td>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="10">
						 <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="<?php echo admin_url('transaction/del_all')?>">
									<span style='color:white;'>Delete All</span>
								</a>
						 </div>
							
					    <div class='pagination'>
					    	<?php echo $this->pagination->create_links() ?>
						</div>
					</td>
				</tr>
			</tfoot>
			
			<tbody class="list_item">
				<?php foreach ($list as $row): ?>
				    <tr class='row_<?php echo $row->id ?>'>
						<td><input type="checkbox" name="id[]" value="<?php echo $row->id?>" /></td>
						<td class="textC"><?php echo $row->id?></td>
						<td class="textC"><?php echo $row->user_name?></td>
						<td>
							<?= number_format($row->amount)?> USD
						</td>
						<td>
							<?php if($row->payment == 2) {
								echo "send EMail";
							}else{
								echo "don't know";
							}?>
						</td>

						<td>
							<?php 
								if($row->status == 0){
									echo "waiting process Payment";
								}else if($row->status == 1){
									echo "<p style='color:red;'>success process</p>";
								}else{
									echo "payment failed";
								}
							 ?> 
						</td>
						
						<td class="textC"><?php echo $row->created ?></td>

						<td class="textC"><?php echo $row->day_checkout ?></td>
						<td class="textC"><?php echo $row->user_checkout ?></td>

						<td class="option textC">
							<a href="<?php echo admin_url('transaction/process/'.$row->id) ?>" title="Process Transaction" class="tipE">
								<img src="<?php echo public_url('admin')?>/images/icons/color/star.png" />
							</a>

							<a href="<?php echo admin_url('transaction/delete/'.$row->id) ?>" title="delete" class="tipS verify_action" >
							    <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png" />
							</a>
						</td>
					</tr>
				<?php endforeach ?>
		    </tbody>
		</table>
	</div>
</div>