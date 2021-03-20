<div style="background-color: grey; padding: 20px;">			
            <div style="width:100%; display: flex-column">
            <p style="width:100%;" for="quote_roma">Standard Quote (visible on load)</p>
			<textarea name="quote_roma" id="quote_roma" rows="4" cols="50" height="200">
                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'quote_roma', true ) ); ?>
			</textarea>
		    </div>


            <div style="width:100%; display: flex-column">
            <p style="width:100%;" for="quote_english">Translated Quote (visible on hover)</p>
            <textarea name="quote_english" id="quote_english" rows="4" cols="50" height="200">
                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'quote_english', true ) ); ?>
			</textarea>
		    </div>


            <div style="width:100%; display: flex-column">
            <p style="width:100%;" for="quote_author">Author (optional)</p>
			<textarea name="quote_author" id="quote_author" rows="4" cols="50" height="200">
                    <?php echo esc_attr( get_post_meta( get_the_ID(), 'quote_author', true ) ); ?>
			</textarea>
		    </div>

</div>

