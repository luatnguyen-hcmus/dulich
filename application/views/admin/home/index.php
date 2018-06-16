<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Control</h5>
			<span>Admin system</span>
		</div>
		
		<div class="clear"></div>
	</div>
</div>
<div class="line"></div>
<div class="wrapper">
	
	<div class="widgets row">
	     <!-- Stats -->
		
		<!-- Amount -->
		<div class="oneTwo col-md-6 col-xs-12">
			<div class="widget">
				<div class="title">
					<img src="<?php echo public_url('admin')?>/images/icons/dark/money.png" class="titleIcon">
					<h6>Business</h6>
				</div>
				
				<table cellpadding="0" cellspacing="0" width="100%" class="sTable myTable">
					<tbody>
						
							<tr>
									<td class="fontB blue f13">Total All tour</td>
									<td class="textR webStatsLink red" style="width:120px;"><?=number_format($amount_total)?> đ</td>
							</tr>
						    
						    <tr>
									<td class="fontB blue f13">total tour now of day</td>
									<td class="textR webStatsLink red" style="width:120px;"><?=number_format($day_total)?> đ</td>
							</tr>
					</tbody>
				</table>
			</div>
		</div>


		<!-- User -->
		<div class="oneTwo col-md-6 col-xs-12">
			<div class="widget">
				<div class="title">
					<img src="<?php echo public_url('admin')?>/images/icons/dark/users.png" class="titleIcon">
					<h6>Data statistic</h6>
				</div>
				
				<table cellpadding="0" cellspacing="0" width="100%" class="sTable myTable">
					<tbody>
						
						<tr>
							<td>
								<div class="left">Total transaction</div>
								<div class="right f11"><a href="<?php echo admin_url('transaction')?>">Detail</a></div>
							</td>
							
							<td class="textC webStatsLink">
								<?= $total_transaction?>					
							</td>
						</tr>
						
						<tr>
							<td>
								<div class="left">Total tour</div>
								<div class="right f11"><a href="<?php echo admin_url('tour')?>">Detail</a></div>
							</td>
							
							<td class="textC webStatsLink">
								<?= $total_product?>				
							</td>
						</tr>
						
						<tr>
							<td>
								<div class="left">Total New</div>
								<div class="right f11"><a href="<?php echo admin_url('news')?>">Detail</a></div>
							</td>
							
							<td class="textC webStatsLink">
								<?= $total_new?>				
							</td>
						</tr>
						
						<tr>
							<td>
								<div class="left">Total Member</div>
								<div class="right f11"><a href="<?php echo admin_url('user')?>">Detail</a></div>
							</td>
							
							<td class="textC webStatsLink">
								<?= $total_user?>					
							</td>
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>

		<div class="clear"></div>
		
		<!-- Giao dich thanh cong gan day nhat -->
		
	<div class="widget">
		<div class="title">
			<span class="titleIcon"><div class="checker" id="uniform-titleCheck"><span><input type="checkbox" id="titleCheck" name="titleCheck" style="opacity: 0;"></span></div></span>
			<h6>List Transaction</h6>
		</div>
		
			<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
				
				
				<thead>
					<tr>
						<td><img src="<?php echo public_url('admin')?>/images/icons/tableArrows.png"></td>
						<td>Identyfi</td>
						<td>Customer</td>
						<td>Money</td>
						<td>Geometry Checkout</td>
						<td>transaction state</td>
						<td>date created</td>
						<td>Day Checkout</td>
						<td>User Checkout</td>

						<td style="width:55px;">action</td>
					</tr>
				</thead>
				
	 			<tfoot class="auto_check_pages">
					<tr>
						<td colspan="10">
							 <div class="list_action itemActions">
									<a href="#submit" id="submit" class="button blueB" url="admin/tran/del_all.html">
										<span style="color:white;">delete all</span>
									</a>
							 </div>
						</td>
					</tr>
				</tfoot>
				
				<tbody class="list_item">

					<?php $i = 1; foreach($list_transaction as $lt) : ?>
						<tr>
							<td>
								<div class="checker" id="uniform-undefined">
									<span><input type="checkbox" name="id[]" value="21" style="opacity: 0;"></span>
								</div>
							</td>
							
							<td class="textC"><?=$i++;?></td>
							
							<td>
								<?=$lt->user_name?>				
							</td>
							
							<td class="textR red"><?=number_format($lt->amount)?></td>
							
							<td>
								<?php if($lt->payment == 2) {
										echo "send EMail";
									}else{
										echo "don't know";
								}?>				
							</td>
							
							
							<td class="status textC">
								<span class="pending">
									<?php 
										if($lt->status == 0){
											echo "waiting process payment";
										}
										else if($lt->status == 1){
											echo "<p style='color:red;'>success process</p>";
										}
										else{
											echo "payment failed";
										}
									?>

								</span>
							</td>
							
							<td class="textC"><?=$lt->created?></td>
							<td class="textC"><?php echo $lt->day_checkout ?></td>
							<td class="textC"><?php echo $lt->user_checkout ?></td>

							<td class="textC">
									<a href="<?php echo admin_url('transaction/process/'.$lt->id) ?>" title="Process transacton " >
										<img src="<?php echo public_url('admin')?>/images/icons/color/view.png">
									</a>
									
								   <a href="<?php echo admin_url('transaction/delete/'.$lt->id) ?>" class="tipS verify_action" original-title="delete">
								    <img src="<?php echo public_url('admin')?>/images/icons/color/delete.png">
								   </a>
							</td>
						</tr>
					<?php endforeach ?>	
				</tbody>
				
			</table>
		</div>

    </div>
	
</div>
<div class="clear mt30"></div>