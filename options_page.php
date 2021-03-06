<div class="wrap">

    <h2><?php echo __( 'Basic Sharer Options' ); ?></h2>
     
    <form name="form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>" style="padding-top: 1em;">
        
		<h3><?php echo __( 'Social Networks to include' ) ?></h3>
        	
        	<div class="inline-edit-col">
       			<label for="basic_sharer_facebook" class="title">Facebook:</label>
    		    <span class="input-text-wrap">
    		    	<input type="checkbox" id="basic_sharer_facebook" name="basic_sharer_facebook" <?php if ($basic_sharer_facebook) echo 'checked' ?> />
       			</span>
       		</div>
				
        	<div class="inline-edit-col" style="padding-top: 1em;">
       			<label for="basic_sharer_twitter" class="title">Twitter:</label>
       		    <span class="input-text-wrap">
   			        <input type="checkbox" id="basic_sharer_twitter" name="basic_sharer_twitter" <?php if ($basic_sharer_twitter) echo 'checked' ?> />
       			</span>
       		</div>
			
        	<div class="inline-edit-col" style="padding-top: 1em;">
       			<label for="basic_sharer_linkedin" class="title">Linkedin:</label>
       		    <span class="input-text-wrap">
					<input type="checkbox" id="basic_sharer_linkedin" name="basic_sharer_linkedin" <?php if ($basic_sharer_linkedin) echo 'checked' ?> />
       			</span>
       		</div>

		<h3><?php echo __( 'Other options' ) ?></h3>
			
			<div class="inline-edit-col">
       			<label for="basic_sharer_share_text" class="title">Text:</label>
       		    <span class="input-text-wrap">
					<input type="text" id="basic_sharer_share_text" name="basic_sharer_share_text" value="<?php echo $basic_sharer_share_text; ?>" />
       			</span>
       		</div>
       		
		       	        
        <div class="submit">
        	<input type="hidden" name="basic_sharer_saving_data" value="true" />
        	<input class="button" type="submit" name="Submit" value="<?php _e('Actualizar') ?>" />
        </div>
        
    </form>
</div>