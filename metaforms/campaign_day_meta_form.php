	<div style="display: flex-column; justify-content: space-between; background-color: <?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_color', true ) ); ?>">
			

				<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
					<label style="width:100%;" for="category1_color">Main Color</label>
					<input style="width:100%;" name="category1_color" id="category1_color" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_color', true ) ); ?>"/>
					<label style="width:100%;" for="category1_color">Text Color</label>
					<input style="width:100%;" name="category1_color2" id="category1_color2" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_color2', true ) ); ?>"/>
				</div>
		
	
	</div>

