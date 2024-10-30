<?php  
/**
 * @package HR Scroll Top
 * 
 * Scroll Top Icons Load From Here
 */

 // ABSPATH Defined
if ( ! defined( 'ABSPATH' ) ) {
   exit;
}

global $hrst_plugin_url;

?>

<!-- Scroll To Top -->
    <div class="hrscroll-top">
        <?php if(get_option('hrsticoninsert') == 'hrsticon1') : ?> 
        <a href="#" title="Go Up"><img src="<?php echo esc_url($hrst_plugin_url . 'img/top.png') ?>" alt="scroll-top"></a>
        <?php endif; ?>
        <?php if(get_option('hrsticoninsert') == 'hrsticon2') : ?> 
        <a href="#" title="Go Up"><img class="hrstimg1" src="<?php echo esc_url($hrst_plugin_url . 'img/top1.png') ?>" alt="scroll-top"></a>
        <?php endif; ?>
        <?php if(get_option('hrsticoninsert') == 'hrsticon3') : ?> 
        <a href="#" title="Go Up"><img class="hrstimg2" src="<?php echo esc_url($hrst_plugin_url . 'img/top2.png') ?>" alt="scroll-top"></a>
        <?php endif; ?>
        <?php if(get_option('hrsticoninsert') == 'hrsticon4') : ?> 
        <a href="#" title="Go Up"><img class="hrstimg3" src="<?php echo esc_url($hrst_plugin_url . 'img/top3.png') ?>" alt="scroll-top"></a>
        <?php endif; ?>
        <?php if(get_option('hrsticoninsert') == 'hrsticon5') : ?> 
        <a href="#" title="Go Up"><img class="hrstimg4" src="<?php echo esc_url($hrst_plugin_url . 'img/top4.png') ?>" alt="scroll-top"></a>
        <?php endif; ?>
        <?php if(get_option('hrsticoninsert') == 'hrsticon6') : ?> 
        <a href="#" title="Go Up"><img class="hrstimg5" src="<?php echo esc_url($hrst_plugin_url . 'img/top5.png') ?>" alt="scroll-top"></a>
        <?php endif; ?> 
    </div>
