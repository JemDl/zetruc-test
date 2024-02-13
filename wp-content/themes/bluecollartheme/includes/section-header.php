
<div>
	<!-- Top bar -->
	<div id="topbar">
		<!-- Content -->
		<div id="topbar-content">
			<!-- Opening hours -->
			<div>
				Opening Hours: 06:00 to 20:00
			</div>
			
			<!-- Social media -->
			<div class="ms-auto me-0">
				<a href=""><img class="ms-3" src="<?php printImageUri("icon-social-insta.svg");?>" alt="instagram" height="18" width="18"/></a>
				<a href=""><img class="ms-3" src="<?php printImageUri("icon-social-fb.svg");?>" alt="facebook" height="18" width="18"/></a>
				<a href=""><img class="ms-3" src="<?php printImageUri("icon-social-twitter.svg");?>" alt="twitter" height="18" width="18"/></a>
				<a href=""><img class="ms-3" src="<?php printImageUri("icon-social-pinterest.svg");?>" alt="pinterest" height="18" width="18"/></a>
			</div>
		</div>
	</div>
	
	<!-- Header -->
	<div class="flex-align-items-center justify-content-center">
		<div id="topbar-header">
			<!-- Logo -->
			<div>
				<img src="<?php printImageUri("logo.png");?>" alt="bluecollar logo" height="47.5" width="44" style="vertical-align: bottom; margin-right: 8px;"/>
				<span style="font-size: 35px; font-weight: 800; color: var(--theme-blue-color);">BlueCo<span style="color: #FFB342">ll</span>ar</span>
			</div>
			
			<!-- Contact -->
			<div id="topbar-contact" class="d-flex ms-auto me-0">
				<!-- Mail -->
				<div class="flex-align-items-center">
					<img class = "me-3" src="<?php printImageUri("icon-mail.svg");?>" alt="email" height="68" width="68" style=""/>
					<div class="d-flex flex-column">
						<div class="contact-title">Mail Us</div>
						<div class="contact-content"><?php echo get_bloginfo('admin_email') ?></div>
					</div>
				</div>
				
				<!-- Phone -->
				<div id="contact-phone" class="flex-align-items-center">
					<img class = "me-3" src="<?php printImageUri("icon-phone.svg");?>" alt="email" height="68" width="68" style=""/>
					<div class="d-flex flex-column">
						<div class="contact-title">Call Us</div>
						<div class="contact-content">+01 569 896 654</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>