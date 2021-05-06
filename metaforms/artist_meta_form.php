<div style="display: flex-column; justify-content: space-between; background-color: pink; padding: 20px;">
		<div>
				<label style="width:100%;" for="artist_title">Title (if applicable)</label>
				<input style="width:100%;" name="artist_title" id="artist_title" type="" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'artist_title', true ) ); ?>"/>
				
				<label style="width:100%;" for="artist_website_url">Website</label>
				<input style="width:100%;" name="artist_website_url" id="artist_website_url" type="url" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'artist_website_url', true ) ); ?>"/>
						
				<label style="width:100%;" for="artist_facebook_url">Facebook</label>
				<input style="width:100%;" name="artist_facebook_url" id="artist_facebook_url" type="url" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'artist_facebook_url', true ) ); ?>"/>

				<label style="width:100%;" for="artist_instagram_url">Instagram</label>
				<input style="width:100%;" name="artist_instagram_url" id="artist_instagram_url" type="url" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'artist_instagram_url', true ) ); ?>"/>

				<label style="width:100%;" for="artist_twitter_url">Twitter</label>
				<input style="width:100%;" name="artist_twitter_url" id="artist_twitter_url" type="url" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'artist_twitter_url', true ) ); ?>"/>
				
				<label style="width:100%;" for="artist_youtube_url">Youtube</label>
				<input style="width:100%;" name="artist_youtube_url" id="artist_youtube_url" type="url" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'artist_youtube_url', true ) ); ?>"/>
		
		</div>


		<p>Adding a title to the Artist, ei: "curator, founder or similar" moves the Artist to the top of the list<br></p>
		<p>Make sure only to put in full URLs ei: copy from address bar with "https/..."<br></p>



</div>

