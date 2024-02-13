<div style="background-color: var(--theme-blue-color); height: 1134px;">
		
	<div style="padding-top: 150px;">
		<!-- Heading -->
		<div class="flex-align-items-center flex-column title-medium">
			<!-- Title box -->
			<div class="title-box-gray mb-2">
				<img src="<?php printImageUri("icon-group.svg");?>" alt="icon commercial" height="23" width="23" class="me-2"/>
				<span>The Gallery</span>
			</div>
			
			<h2 class="title-medium text-white">Check Our Recent Work</h2>
		</div>
		
		<!-- Gallery -->
		<div class="d-flex justify-content-center" style="margin-top: 50px;">
			
			<?php
				$posts_id = getAllPostByCategory('gallery');
				asort($posts_id);
				
				forEach($posts_id as $post_id) {
					$page = get_post($post_id);
						
					$content = apply_filters('the_content', $page->post_content);
					$blocks = getIndividualPart($content);
					
					echo '
						<a class="gallery-box" href="">
							' . findByType($blocks, 'figure')['html'] . '
							
							<h3>' . $page->post_title . '</h3>
							' . findByType($blocks, 'p')['html'] . '
						</a>
					';
				}
			?>
		
		</div>
	</div>
</div>