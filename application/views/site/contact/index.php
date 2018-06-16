<?php 
		echo "<h1>".$contact_list->title."</h1>";
		echo "<br />";
		
	
?>
<div class="container">
	<div class="c-content-product-1 c-opt-1">
		
		<div class="row">
                                
			<div class="col-md-12">
				
                <div class="col-md-12">
                   
                    <div style="clear: both; margin: 0px; padding: 0px 0px 12px; background-repeat: no-repeat;">

						<p style="font-size: 12px; padding: 0px; margin: 0px; text-align: center;">&nbsp;</p>
						<p style="padding: 0px; margin: 0px; text-align: center; color: #F37920 !important"; font-family: Arial, sans-serif; line-height: 24px;">
							<?=$contact_list->content ?>
						</p>
					</div>
					
					<div class="row">
					<div class="col-md-4">
						<h4 style="color: #F37920 !important">CONTACT INFO</h4>
					<p><b style="text-align:center;color: #e49924;">Address: </b>
					13 Tran Van Giap Street, Hiep Ten block, Tan Phu District, HCM City</p>

					<p>
						<b style="text-align:center;color: #e49924;">Phone: </b>
						<?php foreach($phone_list as $pl) : ?>
							<?=$pl->phone_show;?>
						<?php endforeach?>
						
					</p>

					<p><b style="text-align:center;color: #e49924;">Email: </b>
						<?php foreach($email_list as $el) : ?>
							<?=$el->email;?>
						<?php endforeach?>
					</p>

					</div>
					<div class="col-md-4">
						<h4 style="color: #F37920 !important">MAPS</h4>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.461801293332!2d106.6297202143993!3d10.775898992321908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ea0d78113c3%3A0xc407098171fdb7ce!2zMTMgVHLhuqduIFbEg24gR2nDoXAsIEhp4buHcCBUw6JuLCBUw6JuIFBow7osIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1523790563888" width="300" height="230" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-4">
						<h4 style="color: #F37920 !important;">FORM INPUT GET INFO</h4>
						<form novalidate="" accept-charset="UTF-8" action="https://forms.hsforms.com/submissions/v3/public/submit/formsnext/multipart/1546585/2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" enctype="multipart/form-data" id="hsForm_2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" method="POST" class="hs-form stacked hs-form-private hs-form-2dc2f8a8-06a2-4643-b067-3f6fb538a5f9_4cadcbc2-e3f2-43df-8014-cbe06c4d9a54" data-form-id="2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" data-portal-id="1546585" target="target_iframe_2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" data-reactid=".hbspt-forms-1">
							<fieldset class="form-columns-2" data-reactid=".hbspt-forms-1.0:$0"><div class="hs-richtext" data-reactid=".hbspt-forms-1.0:$0.0"></div>
							<div class="hs_firstname hs-firstname hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-1.0:$0.1:$firstname"><label id="label-firstname-2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" class="" placeholder="Enter your First Name" for="firstname-2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" data-reactid=".hbspt-forms-1.0:$0.1:$firstname.0"><span data-reactid=".hbspt-forms-1.0:$0.1:$firstname.0.0">First Name</span><span class="hs-form-required" data-reactid=".hbspt-forms-1.0:$0.1:$firstname.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.0:$0.1:$firstname.1"></legend><div class="input" data-reactid=".hbspt-forms-1.0:$0.1:$firstname.$firstname"><input id="firstname-2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" class="hs-input invalid error" type="text" name="firstname" required="" value="" placeholder="First Name" autocomplete="given-name" data-reactid=".hbspt-forms-1.0:$0.1:$firstname.$firstname.0"></div><ul class="hs-error-msgs inputs-list" style="display:block;" role="alert" data-reactid=".hbspt-forms-1.0:$0.1:$firstname.3"><li data-reactid=".hbspt-forms-1.0:$0.1:$firstname.3.$0"><label data-reactid=".hbspt-forms-1.0:$0.1:$firstname.3.$0.0">Please complete this required field.</label></li></ul></div><div class="hs_lastname hs-lastname hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-1.0:$0.1:$lastname"><label id="label-lastname-2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" class="" placeholder="Enter your Last Name" for="lastname-2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" data-reactid=".hbspt-forms-1.0:$0.1:$lastname.0"><span data-reactid=".hbspt-forms-1.0:$0.1:$lastname.0.0">Last Name</span><span class="hs-form-required" data-reactid=".hbspt-forms-1.0:$0.1:$lastname.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.0:$0.1:$lastname.1"></legend><div class="input" data-reactid=".hbspt-forms-1.0:$0.1:$lastname.$lastname"><input id="lastname-2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" class="hs-input invalid error" type="text" name="lastname" required="" value="" placeholder="Last Name" autocomplete="family-name" data-reactid=".hbspt-forms-1.0:$0.1:$lastname.$lastname.0"></div><ul class="hs-error-msgs inputs-list" style="display:block;" role="alert" data-reactid=".hbspt-forms-1.0:$0.1:$lastname.3"><li data-reactid=".hbspt-forms-1.0:$0.1:$lastname.3.$0"><label data-reactid=".hbspt-forms-1.0:$0.1:$lastname.3.$0.0">Please complete this required field.</label></li></ul></div></fieldset>

							<fieldset class="form-columns-2">
								<div class="hs_email hs-email hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-1.0:$1.1:$email">
									<label id="label-email-2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" class="" placeholder="Enter your Email Address" for="email-2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" data-reactid=".hbspt-forms-1.0:$1.1:$email.0">
										<span data-reactid=".hbspt-forms-1.0:$1.1:$email.0.0">Email Address</span>
										<span class="hs-form-required" data-reactid=".hbspt-forms-1.0:$1.1:$email.0.1">*</span>
									</label>
									<legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.0:$1.1:$email.1"></legend>
									<div class="input" data-reactid=".hbspt-forms-1.0:$1.1:$email.$email">
										<input id="email-2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" class="hs-input invalid error" type="email" name="email" required="" placeholder="Email Address" value="" autocomplete="email" data-reactid=".hbspt-forms-1.0:$1.1:$email.$email.0">
									</div>
									<ul class="hs-error-msgs inputs-list" style="display:block;" role="alert" data-reactid=".hbspt-forms-1.0:$1.1:$email.3"><li data-reactid=".hbspt-forms-1.0:$1.1:$email.3.$0"><label data-reactid=".hbspt-forms-1.0:$1.1:$email.3.$0.0">Please complete this required field.</label></li></ul>
								</div>

								<div class="hs_phone hs-phone hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-1.0:$1.1:$phone"><label id="label-phone-2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" class="" placeholder="Enter your Phone Number" for="phone-2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" data-reactid=".hbspt-forms-1.0:$1.1:$phone.0"><span data-reactid=".hbspt-forms-1.0:$1.1:$phone.0.0">Phone Number</span><span class="hs-form-required" data-reactid=".hbspt-forms-1.0:$1.1:$phone.0.1">*</span></label><legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-1.0:$1.1:$phone.1"></legend><div class="input" data-reactid=".hbspt-forms-1.0:$1.1:$phone.$phone"><input id="phone-2dc2f8a8-06a2-4643-b067-3f6fb538a5f9" class="hs-input invalid error" type="tel" name="phone" required="" value="" placeholder="Phone Number" autocomplete="tel" data-reactid=".hbspt-forms-1.0:$1.1:$phone.$phone.0"></div><ul class="hs-error-msgs inputs-list" style="display:block;" role="alert" data-reactid=".hbspt-forms-1.0:$1.1:$phone.3"><li data-reactid=".hbspt-forms-1.0:$1.1:$phone.3.$0"><label data-reactid=".hbspt-forms-1.0:$1.1:$phone.3.$0.0">Please complete this required field.</label></li></ul></div></fieldset>




							</form>
					</div>
					</div>
                </div>  
          	</div>
		</div>
	</div>
</div>