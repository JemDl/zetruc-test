
<div class="d-flex justify-content-center" style="background-color: #FFB342; height: 750px;">
		
	<div style="width: 1200px; height: 766px; z-index: 4; margin-top: 127px; position: absolute; display: flex; align-items: center; flex-direction: column">
		<div style="display: flex; flex-direction: column; align-items: center; width: 725px; margin-bottom: 40px;">
			<h2 class="title-medium c-blue">Professional Main Services</h2>
			
			<p class="main-text text-center" style="color: var(--theme-blue-color);">Pellentesque vehicula eros neque, maximus mattis est sagittis Nulla facilisi. In sed pretium metus. Proin pretium id urna sit amet tincidunt.</p>
			
			<!-- Buttons -->
			<div class="d-flex" style="width: fit-content;">
				<!-- Commercial -->
				<div id="button-commercial" class="main-service-selector-button active">
					<img src="<?php printImageUri("icon-service-type-commercial.png");?>" alt="commercial" height="36" width="36"/>
					<span class="ms-3" style="color: var(--theme-blue-color); font-size: 20px; font-weight: 600;">Commercial</span>
				</div>
				
				<!-- Residential -->
				<div id="button-residential" class="main-service-selector-button ms-5">
					<img src="<?php printImageUri("icon-service-type-residential.png");?>" alt="residential" height="36" width="36"/>
					<span class="ms-3" style="color: var(--theme-blue-color); font-size: 20px; font-weight: 600;">Residential</span>
				</div>
				
				<!-- Industrial -->
				<div id="button-industrial" class="main-service-selector-button ms-5">
					<img src="<?php printImageUri("icon-service-type-industrial.png");?>" alt="industrial" height="36" width="36"/>
					<span class="ms-3" style="color: var(--theme-blue-color); font-size: 20px; font-weight: 600;">Industrial</span>
				</div>
			</div>
		</div>
		
		<div style="width: 100%; background-color: white; box-shadow: 0px 20px 38px rgba(216, 216, 216, .25);">
			<!-- Content -->
			<ul id="page-slides-container" class="slides-container">
				
				<?php
					$posts_id = array(43 => 'commercial', 45 => 'residential', 47 => 'industrial');
				
					forEach($posts_id as $id => $label) {
						$page = get_post($id);
							
						$content = apply_filters('the_content', $page->post_content);
						$blocks = getIndividualPart($content);
						
						echo '
							<li id="page-' . $label . '" class="page" style="' . (($id === 43) ? '' : 'display: none') . '">
								<div class="page-content">
									<div class="d-flex flex-column" style="width: 50%;">
										<!-- Based on -->
										<div class="title-box-gray mb-2">
											<img src="' . getImageUri("icon-service-type-commercial-2.png") . '" alt="icon commercial" height="28" width="28" class="me-2"/>
											<span>Based on ' . ucfirst($label) . '</span>
										</div>
										
										<h2 style="font-size: 35px; font-weight: 800; color: var(--theme-blue-color);">' . $page->post_title . '</h2>

										<span style="font-size: 18px; font-weight: 400; color: #7E7E7E;">' . findByType($blocks, 'p', 1)['html'] . findByType($blocks, 'p', 2)['html'] . '</span>
									
										<a href="" class="yellow-button mb-0 mt-auto">
											Read More
										</a>
									</div>
									' . findByType($blocks, 'figure')['html'] . '
								</div>
							</li>
						';
					}
				?>
				
			</ul>
		</div>
	</div>
</div>
