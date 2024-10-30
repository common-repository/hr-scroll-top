<?php  
/**
 * @package HR Scroll Top
 * 
 * HR Scroll Top Plugin Dynamic CSS & JS 
 */

 if(!defined('ABSPATH')){
    exit();
 }

?>

<!-- HR Scroll Top Dynamic Style -->
<style>
    .hrscroll-top a img{
        background: <?php print get_option('hrstbgcolor'); ?> !important;
    }
    .hrscroll-top a img:hover{
        background: <?php print get_option('hrsthover'); ?> !important;
    }
    <?php if( get_option('hrsticon-roundcorner') == 'true') : ?> 
    .hrscroll-top a img{
        border-radius: 50% !important;
    }
    <?php endif; ?>
    <?php if( get_option('hrsticon-left-right') == 'true') : ?> 
    .hrscroll-top a{ 
        left: 10px !important; 
        right: auto !important;  
    } 
    <?php endif; ?> 
</style>
<!-- HR Scroll Top Dynamic Script -->
<script>
    jQuery(document).ready(function () {
        jQuery('.hrscroll-top a img').on('click', function(){
            jQuery('body, html').animate({scrollTop: 0}, <?php print get_option('hrstspeed'); ?> );
            return false;
        });
    });
</script>