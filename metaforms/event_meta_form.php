<div style="display: flex-column; justify-content: space-between; background-color: grey; padding: 20px;">
		<div>
				<label style="width:100%;" for="event_date_start">START DATE/TIME (Local time)</label>
				<input style="width:100%;" name="event_date_start" id="event_date_start" type="datetime-local" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'event_date_start', true ) ); ?>"/>
				
				<label style="width:100%;" for="event_date_end">END DATE/TIME (Local time)</label>
				<input style="width:100%;" name="event_date_end" id="event_date_end" type="datetime-local" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'event_date_end', true ) ); ?>"/>
						
				
				<label style="width:100%;" for="event_date_timezone">Time Zone it is happening in</label>
				<input style="width:100%;" name="event_date_timezone" id="event_date_timezone" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'event_date_timezone', true ) ); ?>"/>
		</div>

		<div>
				<label style="width:100%;" for="event_place">Place</label>
				<input style="width:100%;" name="event_place" id="event_place" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'event_place', true ) ); ?>"/>
				<label style="width:100%;" for="event_livestream_url">*(if applicable) URL for livestream (must be full url: http/https)</label>
				<input style="width:100%;" name="event_livestream_url" id="event_livestream_url" type="url" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'event_livestream_url', true ) ); ?>"/>
		</div>

		<p>Dont forget to sort the event into a category to the right.<br>
		The category should correlate with a category description from the Program page</p>


</div>

