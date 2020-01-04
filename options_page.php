<div class="wrap">

    <?php echo "<h2>" . __( 'Basic Sharer Options' ) . "</h2>"; ?>
     
    <form name="form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>" style="padding-top: 1em;">
        
        <div class="inline-edit-col" style="padding-top: 1em;">
       		<span class="title">Facebook</span><br/>
    	    <span class="input-text-wrap">
    	    	<input type="checkbox" name="basic_sharer_facebook" <?php if ($basic_sharer_facebook) echo 'checked' ?> />
       		</span>
       	</div>
			
        <div class="inline-edit-col" style="padding-top: 1em;">
       		<span class="title">Twitter</span><br/>
       	    <span class="input-text-wrap">
   		        <input type="checkbox" name="basic_sharer_twitter" <?php if ($basic_sharer_twitter) echo 'checked' ?> />
       		</span>
       	</div>

        <div class="inline-edit-col" style="padding-top: 1em;">
       		<span class="title">Linkedin</span><br/>
       	    <span class="input-text-wrap">
				<input type="checkbox" name="basic_sharer_linkedin" <?php if ($basic_sharer_linkedin) echo 'checked' ?> />
       		</span>
       	</div>
       	        
        <div class="submit">
        	<input type="hidden" name="basic_sharer_saving_data" value="true" />
        	<input class="button" type="submit" name="Submit" value="<?php _e('Actualizar') ?>" />
        </div>
        
    </form>
</div>