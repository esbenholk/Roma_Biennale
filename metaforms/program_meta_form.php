	<div style="display: flex-column; justify-content: space-between; background-color: <?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_color', true ) ); ?>">
			<div style="display: flex">
			<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
					<label style="width:100%;" for="category1_date">DATE</label>
					<input style="width:100%;" name="category1_date" id="category1_date" type="date" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_date', true ) ); ?>"/>

					<label style="width:100%;" for="category1_title">TITLE</label>
					<input style="width:100%;" name="category1_title" id="category1_title" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_title', true ) ); ?>"/>

					<label style="width:100%;" for="category1_category_key">Category Key</label>
					<input style="width:100%;" name="category1_category_key" id="category1_category_key" type="text" class="postbox"size="100%" placeholder="must correlate with event category" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_category_key', true ) ); ?>"/>
				</div>

				<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
					<label style="width:100%;" for="category1_color">Main Color</label>
					<input style="width:100%;" name="category1_color" id="category1_color" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_color', true ) ); ?>"/>
					<label style="width:100%;" for="category1_color">Text Color</label>
					<input style="width:100%;" name="category1_color2" id="category1_color2" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_color2', true ) ); ?>"/>
			</div>
			</div>

			<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;" for="category1_description">Description</label>
				<textarea name="category1_description" id="category1_description" rows="4" cols="50" size="100%" height="200" textalign="left">
					<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_description', true ) ); ?>			
				</textarea>
			</div>

			<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;"> Input number in hierarchy: number 1 goes to the top of all sites ei: program, frontpage and gallery</label>
				<input type="number" id="category1_hierarchy" name="category1_hierarchy" min="1" max="5" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category1_hierarchy', true ) ); ?>">
			</div>
	</div>

	<div style="display: flex-column; justify-content: space-between; background-color: <?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_color', true ) ); ?>">
			<div style="display: flex">
				<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
					<label style="width:100%;" for="category2_date">DATE</label>
					<input style="width:100%;" name="category2_date" id="category2_date" type="date" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_date', true ) ); ?>"/>

					<label style="width:100%;" for="category2_title">TITLE</label>
					<input style="width:100%;" name="category2_title" id="category2_title" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_title', true ) ); ?>"/>

					<label style="width:100%;" for="category2_category_key">Category Key</label>
					<input style="width:100%;" name="category2_category_key" id="category2_category_key" type="text" class="postbox"size="100%" placeholder="must correlate with event category" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_category_key', true ) ); ?>"/>
				</div>

				<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
					<label style="width:100%;" for="category2_color">Main Color</label>
					<input style="width:100%;" name="category2_color" id="category2_color" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_color', true ) ); ?>"/>
					<label style="width:100%;" for="category2_color">Text Color</label>
					<input style="width:100%;" name="category2_color2" id="category2_color2" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_color2', true ) ); ?>"/>
			</div>
			</div>

			<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;" for="category2_description">Description</label>
				<textarea name="category2_description" id="category2_description" rows="4" cols="50" size="100%" height="200" textalign="left">
					<?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_description', true ) ); ?>			
				</textarea>
			</div>
			<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;"> Input number in hierarchy: number 1 goes to the top of all sites ei: program, frontpage and gallery</label>
				<input type="number" id="category2_hierarchy" name="category2_hierarchy" min="1" max="5" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category2_hierarchy', true ) ); ?>">
			</div>
	</div>

	<div style="display: flex-column; justify-content: space-between; background-color: <?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_color', true ) ); ?>">
			<div style="display: flex">
				<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
					<label style="width:100%;" for="category3_date">DATE</label>
					<input style="width:100%;" name="category3_date" id="category3_date" type="date" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_date', true ) ); ?>"/>

					<label style="width:100%;" for="category3_title">TITLE</label>
					<input style="width:100%;" name="category3_title" id="category3_title" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_title', true ) ); ?>"/>

					<label style="width:100%;" for="category3_category_key">Category Key</label>
					<input style="width:100%;" name="category3_category_key" id="category3_category_key" type="text" class="postbox"size="100%" placeholder="must correlate with event category" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_category_key', true ) ); ?>"/>
				</div>

				<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
					<label style="width:100%;" for="category3_color">Main Color</label>
					<input style="width:100%;" name="category3_color" id="category3_color" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_color', true ) ); ?>"/>
					<label style="width:100%;" for="category3_color">Text Color</label>
					<input style="width:100%;" name="category3_color2" id="category3_color2" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_color2', true ) ); ?>"/>
			</div>
			</div>

			<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;" for="category3_description">Description</label>
				<textarea name="category3_description" id="category3_description" rows="4" cols="50" size="100%" height="200" textalign="left">
					<?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_description', true ) ); ?>			
				</textarea>
			</div>

			<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;"> Input number in hierarchy: number 1 goes to the top of all sites ei: program, frontpage and gallery</label>
				<input type="number" id="category3_hierarchy" name="category3_hierarchy" min="1" max="5" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category3_hierarchy', true ) ); ?>">
			</div>
	</div>

	<div style="display: flex-column; justify-content: space-between; background-color: <?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_color', true ) ); ?>">
			<div style="display: flex">
				<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
					<label style="width:100%;" for="category4_date">DATE</label>
					<input style="width:100%;" name="category4_date" id="category4_date" type="date" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_date', true ) ); ?>"/>

					<label style="width:100%;" for="category4_title">TITLE</label>
					<input style="width:100%;" name="category4_title" id="category4_title" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_title', true ) ); ?>"/>

					<label style="width:100%;" for="category4_category_key">Category Key</label>
					<input style="width:100%;" name="category4_category_key" id="category4_category_key" type="text" class="postbox"size="100%" placeholder="must correlate with event category" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_category_key', true ) ); ?>"/>
				</div>

				<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
					<label style="width:100%;" for="category4_color">Main Color</label>
					<input style="width:100%;" name="category4_color" id="category4_color" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_color', true ) ); ?>"/>
					<label style="width:100%;" for="category4_color">Text Color</label>
					<input style="width:100%;" name="category4_color2" id="category4_color2" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_color2', true ) ); ?>"/>
			</div>
			</div>

			<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;" for="category4_description">Description</label>
				<textarea name="category4_description" id="category4_description" rows="4" cols="50" size="100%" height="200" textalign="left">
					<?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_description', true ) ); ?>			
				</textarea>
			</div>

			<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;"> Input number in hierarchy: number 1 goes to the top of all sites ei: program, frontpage and gallery</label>
				<input type="number" id="category4_hierarchy" name="category4_hierarchy" min="1" max="5" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category4_hierarchy', true ) ); ?>">
			</div>
	</div>

	<div style="display: flex-column; justify-content: space-between; background-color: <?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_color', true ) ); ?>">
			<div style="display: flex">
				<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
					<label style="width:100%;" for="category5_date">DATE</label>
					<input style="width:100%;" name="category5_date" id="category5_date" type="date" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_date', true ) ); ?>"/>

					<label style="width:100%;" for="category5_title">TITLE</label>
					<input style="width:100%;" name="category5_title" id="category5_title" type="text" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_title', true ) ); ?>"/>

					<label style="width:100%;" for="category5_category_key">Category Key</label>
					<input style="width:100%;" name="category5_category_key" id="category5_category_key" type="text" class="postbox"size="100%" placeholder="must correlate with event category" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_category_key', true ) ); ?>"/>
				</div>

				<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
					<label style="width:100%;" for="category5_color">Main Color</label>
					<input style="width:100%;" name="category5_color" id="category5_color" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_color', true ) ); ?>"/>
					<label style="width:100%;" for="category5_color">Text Color</label>
					<input style="width:100%;" name="category5_color2" id="category5_color2" type="color" class="postbox"size="100%" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_color2', true ) ); ?>"/>
			</div>
			</div>

			<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;" for="category5_description">Description</label>
				<textarea name="category5_description" id="category5_description" rows="4" cols="50" size="100%" height="200" textalign="left">
					<?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_description', true ) ); ?>			
				</textarea>
			</div>

			<div style="width:45%; display: flex-column; margin-left: 20px; margin-right: 20px;">
				<label style="width:100%;"> Input number in hierarchy: number 1 goes to the top of all sites ei: program, frontpage and gallery</label>
				<input type="number" id="category5_hierarchy" name="category5_hierarchy" min="1" max="5" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'category5_hierarchy', true ) ); ?>">
			</div>
	</div>