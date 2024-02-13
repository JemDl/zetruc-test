
<div class="d-flex justify-content-center" style="background-color: white; height: 969px;">
	
	<div style="width: 1234px; height:780px; margin-top: 40px;">
		<!-- Heading -->
			<div class="flex-align-items-center flex-column title-medium">
				<!-- Title box -->
				<div class="title-box-gray mb-2">
					<img src="<?php printImageUri("icon-group.svg");?>" alt="icon commercial" height="23" width="23" class="me-2"/>
					<span>Blog & Articles</span>
				</div>
		
			<h2 class="title-medium c-blue">Latest News and Articles</h2>
		</div>
		
		<div class="d-flex">
			
			<?php				
				$category = 'blog';

				$query = new WP_Query(array(
					'category_name' => $category,
					'posts_per_page' => -1,
					'fields' => 'ids',
				));

				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post();
						$post_id = get_the_ID();
						
						$page = get_post($post_id);
						$content = apply_filters('the_content', $page->post_content);
						
						$blocks = getIndividualPart($content);
						
						echo '
							<div class="blog-article">
								' . findByType($blocks, 'figure')['html'] . '
								<div style="width: 354px; min-height: 60px; z-index: 4; transform: translateY(-45px); display: flex;">
									<div class="flex-align-items-center justify-content-center" style="width: 50%; background-color: #FFC368">
										<img src="' . getImageUri("icon-admin.svg") . '" alt="blog image" width="18" height="20" class="me-3"/>
										' . get_the_author_meta('display_name') . '
									</div>
									
									<div class="flex-align-items-center justify-content-center" style="width: 50%; background-color: var(--theme-yellow-color);">
										<img src="' . getImageUri("icon-date.svg") . '" alt="blog image" width="18" height="18" class="me-3"/>
										' . ucfirst(get_the_date('F j, Y', $page)) . '
									</div>
								</div>
								
								<div style="transform: translateY(-20px);">
									<h3 class="c-blue" style="font-size: 30px; font-weight: 700;">' . $page->post_title . '</h3>
									' . findByType($blocks, 'p')['html'] . '
									<a href="" class="c-blue" style="text-decoration: none; font-size: 20px; font-weight: 600;">
										Read More
										<img src="' . getImageUri("icon-arrow.svg") . '" width="6" height="11" class="ms-1"/>
									</a>
								</div>
							</div>
						';
					}
				}

				wp_reset_postdata();
			?>
			
		</div>
	</div>
</div>
