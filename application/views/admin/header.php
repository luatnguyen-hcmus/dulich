<div class="topNav">
	<div class="wrapper">
		<div class="welcome">
			<?php if(isset($admin_info)) : ?>
				<span>Hello: <b><?php echo ($admin_info->name)?></b></span>
			<?php endif?>
		</div>
		
		<div class="userNav">
			<ul>
				<li><a href="<?php echo admin_url() ?>">
					<img style="margin-top:7px;" src="<?php echo public_url()?>/admin/images/icons/light/home.png">
					<span>Home</span>
				</a></li>
				
				<!-- Logout -->
				<li><a href="<?php echo admin_url('home/logout') ?>">
					<img src="<?php echo public_url()?>/admin/images/icons/topnav/logout.png" alt="">
					<span>Logout</span>
				</a></li>
				
			</ul>
		</div>
		
		<div class="menu show-menu" id="menu_toggle" onclick="list_menu_toggle_show()">
            <i></i>
            <i></i>
            <i></i>
        </div>
        <div id="list_menu_toggle">
            
				<!-- Account panel -->
						    
					<!-- Left navigation -->
					<ul id="menu" class="nav">
						<li class="home">
							<a href="<?php echo admin_url()?>" class="active" id="current">
								<span>Home</span>
								<strong></strong>
							</a>			
						</li>
						<li class="tran">
							<a href="" class="exp inactive">
								<span>Manage Menu</span>
								<strong>1</strong>
							</a>
							<ul class="sub" style="display: none;">
								<li>
									<a href="<?php echo admin_url('menu') ?>">
											List Menu						
									</a>
								</li>
							</ul>
										
						</li>
						<li class="tran">
							<a href="" class="exp inactive">
								<span>Manage Transaction</span>
								<strong>1</strong>
							</a>
							<ul class="sub" style="display: none;">
								<li>
									<a href="<?php echo admin_url('transaction') ?>">
											List Transaction						
									</a>
								</li>
							</ul>
										
						</li>
						<li class="product">
							<a href="" class="exp inactive">
								<span>Category and Tour</span>
								<strong>2</strong>
							</a>
							<ul class="sub" style="display: none;">
								<li>
									<a href="<?php echo admin_url('tour') ?>">
										Manage Tour						
									</a>
								</li>
								<li>
									<a href="<?php echo admin_url('catalog') ?>">
										Manage Category							
									</a>
								</li>
							</ul>
						</li>
						<li class="account">
							<a href="" class="exp inactive">
								<span>Manage Account</span>
								<strong>2</strong>
							</a>
							
							<ul class="sub" style="display: none;">
								<li>
									<a href="<?php echo admin_url('admin')?>">
										Admin							
									</a>
								</li>
								<li>
									<a href="<?php echo admin_url('user')?>">
										user
									</a>
								</li>
							</ul>
										
						</li>
						<li class="content">
					
							<a href="" class="exp inactive">
								<span>Content</span>
								<strong>2</strong>
							</a>
							
							<ul class="sub" style="display: none;">
								<li>
									<a href="<?php echo admin_url('slide') ?>">
										Manage Slide							
									</a>
								</li>
								<li>
									<a href="<?php echo admin_url('news') ?>">
										Manage new
									</a>
								</li>
								
							</ul>
									
						</li>

						<li class="content">
					
							<a href="" class="exp inactive">
								<span>HotLine</span>
								<strong>1</strong>
							</a>
							
							<ul class="sub" style="display: none;">
								<li>
									<a href="<?php echo admin_url('phone') ?>">
										Manage Hotline							
									</a>
								</li>
							</ul>
									
						</li>
					
					</ul>
							
				
        </div>


		<div class="clear"></div>
	</div>
</div>