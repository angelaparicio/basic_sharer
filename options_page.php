<div class="wrap">

   <h2><?php esc_html_e( 'Basic Sharer Options', 'basic_sharer'); ?></h2>

   <form name="form" method="post" style="padding-top: 1em;">

      <h3><?php esc_html_e( 'Social Networks to include', 'basic_sharer' ) ?></h3>

      <div class="inline-edit-col">
         <label for="basic_sharer_bluesky" class="title">Bluesky:</label>
         <span class="input-text-wrap">
            <input type="checkbox" id="basic_sharer_bluesky" name="basic_sharer_bluesky" <?php if ($basic_sharer_bluesky) echo 'checked' ?> />
         </span>
      </div>

      <div class="inline-edit-col" style="padding-top: 1em;">
         <label for="basic_sharer_facebook" class="title">Facebook:</label>
         <span class="input-text-wrap">
            <input type="checkbox" id="basic_sharer_facebook" name="basic_sharer_facebook" <?php if ($basic_sharer_facebook) echo 'checked' ?> />
         </span>
      </div>

      <div class="inline-edit-col" style="padding-top: 1em;">
         <label for="basic_sharer_linkedin" class="title">Linkedin:</label>
         <span class="input-text-wrap">
            <input type="checkbox" id="basic_sharer_linkedin" name="basic_sharer_linkedin" <?php if ($basic_sharer_linkedin) echo 'checked' ?> />
         </span>
      </div>

      <div class="inline-edit-col" style="padding-top: 1em;">
         <label for="basic_sharer_twitter" class="title">X:</label>
         <span class="input-text-wrap">
            <input type="checkbox" id="basic_sharer_twitter" name="basic_sharer_twitter" <?php if ($basic_sharer_twitter) echo 'checked' ?> />
         </span>
      </div>

      <div class="submit">
         <?php wp_nonce_field( 'basic_share_save', 'basic_share_nonce' ); ?>
         <input type="hidden" name="basic_sharer_saving_data" value="true" />
         <input class="button" type="submit" name="Submit" />
      </div>

   </form>
</div>