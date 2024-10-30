<?php  
/**
 *  @package HR Scroll Top
 * 
 *  HR Scroll Top Plugin Option
 */

 if(!defined('ABSPATH')){
   exit();
 }


//  Admin Menu
 add_action('admin_menu', 'hrst_admin_option');
 function hrst_admin_option(){
    global $hrst_plugin_url;
    add_menu_page( 'HR Scroll Top Options', esc_html('HR Scroll Top', 'hr-scroll-top'), 'manage_options', 'hrst-scroll-top', 'hrst_plugin_option', $hrst_plugin_url . 'img/admin-top.png', 65 );

 };

 function hrst_plugin_option(){  ?>
   
   <div class="hrst-option">
      <!-- HR Scroll Top Option Form -->
      <div class="hrst-option-form">
         <h2 class="hrst-admin-title"> 
            <?php esc_html_e('HR Scroll Top Option', 'hr-scroll-top'); ?>
         </h2>
         <?php global $hrst_plugin_url; //global plugin directory variable ?>
         <form action="options.php" method="POST">
         <?php wp_nonce_field('update-options');  // wp security ?> 
            <!-- Icon Images -->
            <label for="hrsticons"><?php esc_html_e('Which Icon you want to show?', 'hr-scroll-top') ?></label>
            <small class="img-small"><?php esc_html_e('Click on your chosen icon & Save (Default Not Set)', 'hr-scroll-top'); ?></small>
            <label for="hrsticon1" class="hrsticon">
               <img src="<?php print esc_url($hrst_plugin_url . 'img/top.png'); ?>" alt="HR Scroll To Top Icon">
               <input type="radio" name="hrsticoninsert" id="hrsticon1" style="display: none;" value="hrsticon1" <?php if( get_option('hrsticoninsert') == 'hrsticon1' ){ echo esc_attr('checked="checked"'); } ?> >
            </label>
            <label for="hrsticon2" class="hrsticon">
               <img src="<?php echo esc_url($hrst_plugin_url .'img/top1.png'); ?>" alt="HR Scroll To Top Icon">
               <input type="radio" name="hrsticoninsert" id="hrsticon2" style="display: none;" value="hrsticon2" <?php if( get_option('hrsticoninsert') == 'hrsticon2' ){ echo esc_attr('checked="checked"'); } ?> >
            </label>
            <label for="hrsticon3" class="hrsticon">
               <img src="<?php echo $hrst_plugin_url . 'img/top2.png'; ?>" alt="HR Scroll To Top Icon">
               <input type="radio" name="hrsticoninsert" id="hrsticon3" style="display: none;" value="hrsticon3" <?php if( get_option('hrsticoninsert') == 'hrsticon3' ){ echo esc_attr('checked="checked"'); } ?> >
            </label>
            <label for="hrsticon4" class="hrsticon">
               <img src="<?php echo $hrst_plugin_url . 'img/top3.png'; ?>" alt="HR Scroll To Top Icon">
               <input type="radio" name="hrsticoninsert" id="hrsticon4" style="display: none;" value="hrsticon4" <?php if( get_option('hrsticoninsert') == 'hrsticon4' ){ echo esc_attr('checked="checked"'); } ?> >
            </label>
            <label for="hrsticon5" class="hrsticon">
               <img src="<?php echo $hrst_plugin_url . 'img/top4.png'; ?>" alt="HR Scroll To Top Icon">
               <input type="radio" name="hrsticoninsert" id="hrsticon5" style="display: none;" value="hrsticon5" <?php if( get_option('hrsticoninsert') == 'hrsticon5' ){ echo esc_attr('checked="checked"'); } ?> >
            </label>
            <label for="hrsticon6" class="hrsticon">
               <img src="<?php echo $hrst_plugin_url . 'img/top5.png'; ?>" alt="HR Scroll To Top Icon">
               <input type="radio" name="hrsticoninsert" id="hrsticon6" style="display: none;" value="hrsticon6" <?php if( get_option('hrsticoninsert') == 'hrsticon6' ){ echo esc_attr('checked="checked"'); } ?> >
            </label>

            <!-- BG Color -->
            <label for="hrstbgcolor"><?php esc_html_e('Icon Background Color', 'hr-scroll-top'); ?></label>
            <small><?php esc_html_e('Default: #000000', 'hr-scroll-top'); ?></small>
            <input type="color" name="hrstbgcolor" id="hrstbgcolor" value="<?php print esc_attr(get_option('hrstbgcolor')); ?>">

            <!-- Hover Color -->
            <label for="hrsthover"><?php esc_html_e('Icon Hover Color', 'hr-scroll-top'); ?></label>
            <small><?php esc_html_e('Default: #000000', 'hr-scroll-top'); ?></small>
            <input type="color" name="hrsthover" id="hrsthover" value="<?php print esc_attr(get_option('hrsthover')); ?>">

            <!-- Icon Left -->
            <p style="margin-bottom: 0"><?php esc_html_e('Where you want to show icon?', 'hr-scroll-top'); ?></p>
            <small><?php esc_html_e('Default has Right side', 'hr-scroll-top'); ?></small>
            <p class="icon-left">
               <input type="radio" name="hrsticon-left-right" id="hrsticon-left-right" value="true" <?php if( get_option('hrsticon-left-right') == 'true' ){ echo esc_attr('checked="checked"'); } ?> >
               <label for="hrsticon-left-right" class="icon-left"><?php esc_html_e('Icon Left', 'hr-scroll-top'); ?></label>
            </p>
            <!-- Icon Right -->
            <p class="icon-right">
               <input type="radio" name="hrsticon-left-right" id="hrsticon-left-right1" value="false" <?php if( get_option('hrsticon-left-right') == 'false' ){ echo esc_attr('checked="checked"'); } ?> >
               <label for="hrsticon-left-right1" class="icon-right"><?php esc_html_e('Icon Right', 'hr-scroll-top'); ?></label>
            </p>

            <!-- Icon Round/Corner -->
            <label for="hrsticon-roundcorner"><?php esc_html_e('Icon Round or Corner', 'hr-scroll-top'); ?></label>
            <small><?php esc_html_e('Default has Corner', 'hr-scroll-top'); ?></small>
            <select name="hrsticon-roundcorner" id="hrsticon-roundcorner">
               <option value="false" <?php if(get_option('hrsticon-roundcorner') == 'false') {
                 echo esc_attr('selected="selected"'); } ?> > <?php esc_html_e('Corner', 'hr-scroll-top') ?> </option>
               <option value="true" <?php if(get_option('hrsticon-roundcorner') == 'true') { echo esc_attr('selected="selected"'); } ?> > <?php esc_html_e('Round', 'hr-scroll-top') ?> </option>
            </select>

            <!-- Scroll Speed -->
            <label for="hrstspeed"><?php esc_html_e('Scroll Speed', 'hr-scroll-top'); ?></label>
            <small><?php esc_html_e('Range is 100 to 1200 (more value takes more time to scroll). Default 650', 'hr-scroll-top'); ?></small>
            <input type="range" name="hrstspeed" id="hrstspeed" min="100" max="1200" value="<?php print esc_attr(get_option('hrstspeed')); ?>" >

            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="hrsticoninsert, hrstbgcolor, hrsthover, hrsticon-left-right, hrsticon-roundcorner, hrstspeed">
            <input type="submit" value="<?php echo esc_attr('Save Changes', 'hr-scroll-top'); ?>">
         </form>
      </div>
      <!-- Author Details -->
      <div class="hrst-author">
         <h2 class="hrst-author-title"> 
            <?php esc_html_e('Author', 'hr-scroll-top'); ?>
         </h2>
         <div class="author-img">
            <img src="<?php echo $hrst_plugin_url . 'img/habibcoder.jpg' ?>" alt="HabibCoder">
         </div>
         <h4 class="author-name"> HabibCoder </h4>
         <div class="author-description">
            <p>I'm <a href="<?php echo esc_url('http://habibcoder.com'); ?>" target="_blank">Habibur Rahman</a> and a Professional Web Developer and Web Designer. For the last some years, I'm working in this field with national and international clients. I have done many more projects with client satisfaction. <br>
            This is an open-source WordPress Plugin. If you want to support me, You can <b>click on the Buy Me a Coffe Button</b>. <br> Thank You !. </p>
         </div>
         <div class="donate-btn">
            <a href="<?php echo esc_url('https://www.buymeacoffee.com/habibcoder1'); ?>" target="_blank">
               <h4><span>🍦</span>Buy Me A Coffee</h4>
            </a>
         </div>
         <h3 class="hrst-social-title"> 
            <?php esc_html_e('Follow Me', 'hr-scroll-top'); ?>
         </h3>
         <div class="social-icons">
            <a class="facebook" title="Facebook" href="<?php echo esc_url('http://facebook.com/habibcoder1'); ?>" target="_blank"><img src="<?php echo esc_url($hrst_plugin_url . 'img/facebook.png'); ?>" alt="facebook"></a>
            <a class="linkedin" title="LinkedIn" href="<?php echo esc_url('http://linkedin.com/in/habibcoder'); ?>" target="_blank"><img src="<?php echo esc_url($hrst_plugin_url . 'img/linkedin.png'); ?>" alt="LinkedIn"></a>
            <a class="instagram" title="Instagram" href="<?php echo esc_url('http://instagram.com/habibcoder'); ?>" target="_blank"><img src="<?php echo esc_url($hrst_plugin_url . 'img/instagram.png'); ?>" alt="instagram"></a>
            <a class="website" title="Website" href="<?php echo esc_url('http://habibcoder.com') ?>" target="_blank"><img src="<?php echo esc_url($hrst_plugin_url . 'img/website.png'); ?>" alt="HabibCoder"></a>
         </div>
         <div class="thank-you">
            <span>♥</span>
            <h5>Thank You</h5>
            <span>♥</span>
         </div>
      </div>
      <!-- Script for selected image color -->
      <script>
         jQuery(document).ready(function () {
            let checked = jQuery('.hrst-option input:radio[checked="checked"]').parent('label');
            let checkimg = checked.find('img');
            checkimg.css('background-color', '#ccc');
         }); 
      </script>
      
   </div>

<?php
 }

