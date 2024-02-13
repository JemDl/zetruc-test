
<div class="flex-align-items-center justify-content-center bg-white" style="height: 846px;">
	<!-- Content Box -->
	<div class="d-flex" style="width: 1200px;">
		<img src="<?php printImageUri("about-image.jpg");?>" alt="your future" height="546" width="540"/>
		
		<div class="ms-5 mt-5 mb-5">
			<!-- Title Box -->
			<div class="flex-align-items-center justify-content-center" style="width: 235.5px; height: 45px; background-color: #F4F4F4;">
				<img src="<?php printImageUri("icon-logo.svg");?>" alt="instagram" height="24.5" width="22.5" class="me-3"/>
				<span style="font-size: 18px; font-weight: 500; color: var(--theme-blue-color);">Welcome BlueCollar</span>
			</div>
			
			<?php
				$page_id = 37;
				$page = get_post($page_id);

				// Check if the page exists and is published
				if ($page) {
					// Output the title of the page
					echo '<h2 class="title-medium c-blue">' . $page->post_title . '</h2>';
					
					// Output the content of the page
					echo '<span style="font-size: 18px; font-weight: 400; color: #7E7E7E;">' . apply_filters('the_content', $page->post_content) . '</span>';
				}
			?>

		</div>
	</div>
</div>
	