<div style="display: flex-column; justify-content: space-between; background-color: <?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_color', true ) ); ?>">
		<div style="display: flex;">
			<div style="width:60%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;" for="category1_title">TITLE</label>
				<input style="width:100%;" name="category1_title" id="category1_title" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_title', true ) ); ?>"/>
				<label style="width:100%;" for="category1_title2">OPTIONAL SECOND LINE TO TITLE</label>
				<input style="width:100%;" name="category1_title2" id="category1_title2" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_title2', true ) ); ?>"/>	
			</div>

			<div style="width:20%; margin-right: 20px;">
				<label style="width:100%;" for="category1_date">DATE</label>
				<input style="width:100%;" name="category1_date" id="category1_date" type="date" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_date', true ) ); ?>"/>

				<label style="width:100%;" for="category1_category_key">Category Key</label>
				<input style="width:100%;" name="category1_category_key" id="category1_category_key" type="text" class="postbox"size="100%" placeholder="must correlate with event category" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_category_key', true ) ); ?>"/>
			</div>
		</div>

		<div style="width:100%; display: flex-column; margin-left: 20px; margin-top: 20px">
			<textarea name="category1_description" id="category1_description" rows="4" cols="50" size="100%" height="200" textalign="left">
                 <?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_description', true ) ); ?>			
            </textarea>
		</div>
		<input style="width:100%;" name="category1_color" id="category1_color" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_color', true ) ); ?>"/>

	</div>

	<div style="display: flex-column; justify-content: space-between; background-color: <?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_color', true ) ); ?>">
		<div style="display: flex;">
			<div style="width:60%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;" for="category2_title">TITLE</label>
				<input style="width:100%;" name="category2_title" id="category2_title" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_title', true ) ); ?>"/>

				<label style="width:100%;" for="category2_title2">OPTIONAL SECOND LINE TO TITLE</label>
				<input style="width:100%;" name="category2_title2" id="category2_title2" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_title2', true ) ); ?>"/>	
			</div>

			<div style="width:20%; margin-right: 20px;">
				<label style="width:100%;" for="category2_date">DATE</label>
				<input style="width:100%;" name="category2_date" id="category2_date" type="date" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_date', true ) ); ?>"/>

				<label style="width:100%;" for="category2_category_key">Category Key</label>
				<input style="width:100%;" name="category2_category_key" id="category2_category_key" type="text" class="postbox"size="100%" placeholder="must correlate with event category" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_category_key', true ) ); ?>"/>
			</div>
		</div>

		<div style="width:100%; display: flex-column; margin-left: 20px; margin-top: 20px">
			<textarea name="category2_description" id="category2_description" rows="4" cols="50" size="100%" height="200">
                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_description', true ) ); ?>
			</textarea>
		</div>
		<input style="width:100%;" name="category2_color" id="category1_color" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_color', true ) ); ?>"/>


	</div>

	<div style="display: flex-column; justify-content: space-between; background-color: <?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_color', true ) ); ?>">
		<div style="display: flex;">
			<div style="width:60%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;" for="category3_title">TITLE</label>
				<input style="width:100%;" name="category3_title" id="category3_title" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_title', true ) ); ?>"/>

				<label style="width:100%;" for="category3_title2">OPTIONAL SECOND LINE TO TITLE</label>
				<input style="width:100%;" name="category3_title2" id="category1_title2" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_title2', true ) ); ?>"/>	
			</div>

			<div style="width:20%; margin-right: 20px;">
				<label style="width:100%;" for="category3_date">DATE</label>
				<input style="width:100%;" name="category3_date" id="category3_date" type="date" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_date', true ) ); ?>"/>

				<label style="width:100%;" for="category3_category_key">Category Key</label>
				<input style="width:100%;" name="category3_category_key" id="category3_category_key" type="text" class="postbox"size="100%" placeholder="must correlate with event category" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_category_key', true ) ); ?>"/>
			</div>
		</div>

		<div style="width:100%; display: flex-column; margin-left: 20px; margin-top: 20px">
			<textarea name="category3_description" id="category3_description" rows="4" cols="50" size="100%" height="200" >
                <?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_description', true ) ); ?>
			</textarea>
		</div>
		<input style="width:100%;" name="category3_color" id="category1_color" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_color', true ) ); ?>"/>

	</div>

	<div style="display: flex-column; justify-content: space-between; background-color: <?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_color', true ) ); ?>">
		<div style="display: flex;">
			<div style="width:60%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;" for="category4_title">TITLE</label>
				<input style="width:100%;" name="category4_title" id="category4_title" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_title', true ) ); ?>"/>

				<label style="width:100%;" for="category4_title2">OPTIONAL SECOND LINE TO TITLE</label>
				<input style="width:100%;" name="category4_title2" id="category1_title2" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_title2', true ) ); ?>"/>	
			</div>

			<div style="width:20%; margin-right: 20px;">
				<label style="width:100%;" for="category4_date">DATE</label>
				<input style="width:100%;" name="category4_date" id="category4_date" type="date" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_date', true ) ); ?>"/>

				<label style="width:100%;" for="category4_category_key">Category Key</label>
				<input style="width:100%;" name="category4_category_key" id="category4_category_key" type="text" class="postbox"size="100%" placeholder="must correlate with event category" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_category_key', true ) ); ?>"/>
			</div>
		</div>

		<div style="width:100%; display: flex-column; margin-left: 20px; margin-top: 20px">
			<textarea name="category4_description" id="category4_description" rows="4" cols="50" size="100%" height="200">
                <?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_description', true ) ); ?>
			</textarea>
		</div>
		<input style="width:100%;" name="category4_color" id="category1_color" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_color', true ) ); ?>"/>

	</div>

	<div style="display: flex-column; justify-content: space-between; background-color: <?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_color', true ) ); ?>">
		<div style="display: flex;">
			<div style="width:60%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;" for="category5_title">TITLE</label>
				<input style="width:100%;" name="category5_title" id="category5_title" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_title', true ) ); ?>"/>

				<label style="width:100%;" for="category5_title2">OPTIONAL SECOND LINE TO TITLE</label>
				<input style="width:100%;" name="category5_title2" id="category1_title2" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_title2', true ) ); ?>"/>	
			</div>

			<div style="width:20%; margin-right: 20px;">
				<label style="width:100%;" for="category5_date">DATE</label>
				<input style="width:100%;" name="category5_date" id="category5_date" type="date" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_date', true ) ); ?>"/>

				<label style="width:100%;" for="category5_category_key">Category Key</label>
				<input style="width:100%;" name="category5_category_key" id="category5_category_key" type="text" class="postbox"size="100%" placeholder="must correlate with event category" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_category_key', true ) ); ?>"/>
			</div>
		</div>

		<div style="width:100%; display: flex-column; margin-left: 20px; margin-top: 20px">
			<textarea name="category5_description" id="category5_description" rows="4" cols="50" size="100%" height="200">
                <?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_description', true ) ); ?>
			</textarea>
		</div>
		<input style="width:100%;" name="category5_color" id="category1_color" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_color', true ) ); ?>"/>

	</div>