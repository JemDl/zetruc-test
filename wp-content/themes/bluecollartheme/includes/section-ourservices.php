
<div class="d-flex justify-content-center" style="background-color: #F4F4F4;">
		
	<div style="max-width: 1210px; margin-top: 290px; display: flex; flex-direction: column; align-items: center;">
		<!-- Heading -->
		<div class="flex-align-items-center flex-column" style="width: 55%">
		
			<!-- Title box -->
			<div class="title-box-gray bg-white mb-2">
				<img src="<?php printImageUri("icon-group.svg");?>" alt="icon commercial" height="23" width="23" class="me-2"/>
				<span>Our service</span>
			</div>
			
			<h2 class="title-medium c-blue">Our Services</h2>
			
			<p class="main-text text-center">Pellentesque vehicula eros neque, maximus mattis est sagittis Nulla facilisi. In sed pretium metus. Proin pretium id urna sit amet tincidunt.</p>
		</div>
		
		<!-- Services -->
		<div class="mt-4" style="width:100%; height: 671px; display: flex; flex-wrap: wrap; margin-bottom: 160px;">
				
			<?php
				$posts_id = getAllPostByCategory('service');
				asort($posts_id);
				
				forEach($posts_id as $post_id) {
					$page = get_post($post_id);
						
					$content = apply_filters('the_content', $page->post_content);
					$blocks = getIndividualPart($content);
					
					echo '
						<div class="service-box">
							' . findByType($blocks, 'figure')['html'] . '
							<h3 style="font-size: 25px; font-weight: 700; color: #FFB342;">' . $page->post_title . '</h3>
							' . findByType($blocks, 'p')['html'] . '
							<a href="">Read More</a>
						</div>
					';
				}
			?>			
		
		</div>
	</div>
</div>