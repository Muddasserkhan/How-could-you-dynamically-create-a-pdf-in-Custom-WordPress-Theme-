<?php

	class ElementorPostswidget extends \Elementor\Widget_Base 
	{
		public function get_name(){
			return "pws_posts";
		}
		public function get_title(){
			return "Announcemnet Listing";
		}
		public function get_icon(){
			return "far fa-clone";
		}
		public function get_categories(){
			return ['general'];
		}
		protected function _register_controls(){


			$this->start_controls_section('content_section',['label'=>'Content', 'tab'=>\Elementor\Controls_Manager::TAB_CONTENT,]);
			$this->add_control('postsno', ['label'=>'Enter No of Posts','type'=>Elementor\Controls_Manager::NUMBER, 'input_type'=> 'number', 'default'=> '5']);
			$this->end_controls_section();

			
			$this->start_controls_section('content_section',['label'=>'Content', 'tab'=>\Elementor\Controls_Manager::TAB_CONTENT,]);
			$this->add_control('color', ['label'=>'Text Color','type'=>Elementor\Controls_Manager::COLOR, 'input_type'=> 'color','default'=> '#fff']);
			$this->end_controls_section();

		}
		protected function render(){
			 $atts = $this->get_settings_for_display();
			 $posts = $atts['postsno'];
			 $color = $atts['color'];
			// echo "<h1 style='color:{$color}'>{$title}</h1>";

			 $args = ['post_type'=>'announcements','post_status'=>'publish', 'posts_per_page'=>$posts];
			 $q= new WP_Query($args);
			 if($q->have_posts()):
			 ?>
			 <table class="table table-bordered table-announcemnt">
				
					<tr>
						<th>Announcement Date</th>
						<th>Announcement Title</th>
						<th>Announcement Description</th>
						<th>Announcement Download</th>
					</tr>
			 <?php
			 	while($q->have_posts()): $q->the_post();
			 		//echo "<div class='pws__posts' style='display:flex;'>";
			 		//echo "<figure class='pws__thumb' style='width:100px;'>";
			 		//the_post_thumbnail();
			 		//echo "</figure><p style='color:$color;'>";
			 		//the_title();
			 		//echo "</p></div>";
					
					$postid = get_the_ID();
					
					$download_link = get_post_meta( $postid, 'Announcement Attachment', true );
			 		
				?>

					<tr>
						<td><?php echo get_the_date('l F j, Y'); ?></td>
						<td><?php the_title(); ?></td>
						<td><?php the_content(); ?></td>
						<td><a href="<?php echo $download_link; ?>" target="_blank">Download Announcement</a></td>
					</tr>	
			<?php	
			 endwhile;
			?>
			</table>	
				<?php
			 endif;
			 wp_reset_query();
		}
	}