<?php
	function printImageUri($name) {
		echo get_template_directory_uri() . "/images/" . $name . "";
	}
	function getImageUri($name) {
		return get_template_directory_uri() . "/images/" . $name . "";
	}
	
	// Get a list of post id of category
	function getAllPostByCategory($category) {
		
		// Query posts based on the category
		$query = new WP_Query(array(
			'category_name' => $category,
			'posts_per_page' => -1,
			'fields' => 'ids',
		));
		
		$result = array();
		
		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				$post_id = get_the_ID();
				$result[] = $post_id;
			}
		}
		
		return $result;

		wp_reset_postdata();
	}

	// Get a post part
	function getIndividualPart($html) {
		libxml_use_internal_errors(true);
		$doc = new DOMDocument();
		$doc->loadHTML($html);

		$xpath = new DOMXPath($doc);

		$blocks = $xpath->query('//figure|//p');
		
		$result = array();
		foreach ($blocks as $block) {
			$type = $block->nodeName;
			$html = $doc->saveHTML($block);
			$result[] = array(
				'type' => $type,
				'html' => $html
			);
		}
		
		return $result;
	}
	
	// Find a post part by its type
	function findByType($array, $type, $nth = 1) {
		$counter = 1;
		foreach ( $array as $element ) {
			if ( $type == $element['type']) {
				if($nth == $counter++) {
					return $element;
				}
			}
		}
		return array(
			'type' => '',
			'html' => ''
		);
	}
?>

<?php get_header();?>

<div class="container">
	<!-- Header -->
	<?php get_template_part('includes/section','header');?>
	
	<!-- Menu -->
	<?php get_template_part('includes/section','menu');?>

	<!-- Banner -->
	<?php get_template_part('includes/section','banner');?>
	
	<!-- About -->
	<?php get_template_part('includes/section','about');?>
	
	<!-- Main Services -->
	<?php get_template_part('includes/section','mainservice');?>
	
	<!-- Our Services -->
	<?php get_template_part('includes/section','ourservices');?>
	
	<!-- Gallery -->
	<?php get_template_part('includes/section','gallery');?>
	
	<!-- Blog -->
	<?php get_template_part('includes/section','blog');?>
	
	<!-- Newsletter -->
	<?php get_template_part('includes/section','newsletter');?>
	
	
	<!--?php get_template_part('includes/section','content');?-->

</div>

<?php get_footer();?>