<div class="wrap">

   <h2><?php esc_html_e( 'Basic Sharer Options', 'basic-sharer'); ?></h2>

   <form name="form" method="post" style="padding-top: 1em;">

      <h3><?php esc_html_e( 'Social Networks to include', 'basic-sharer' ) ?></h3>

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

      <div class="submit">
         <input type="hidden" name="basic_sharer_saving_data" value="true" />
         <input class="button" type="submit" name="Submit" />
      </div>

   </form>
</div>