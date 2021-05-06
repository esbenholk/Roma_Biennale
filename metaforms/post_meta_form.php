<div style="display: flex-column; justify-content: space-between; background-color: lightblue; padding: 20px;">
		<div>
				<label style="width:100%;" for="post_location_place">Location (if applicable)</label>
				<input style="width:100%;" name="post_location_place" id="post_location_place" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'post_location_place', true ) ); ?>"/>
		
		</div>


		<p>Adding location to a post helps locate it! It can announce where an exhibition occured, what nation a project began in or even where the author is writing from<br></p>

</div>

