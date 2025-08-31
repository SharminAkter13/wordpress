<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package BB Ecommerce Store
 */
?>
<footer role="contentinfo">
  <?php if (get_theme_mod('bb_ecommerce_store_show_hide_footer', true)){ ?>
    <?php //Set widget areas classes based on user choice
      $bb_ecommerce_store_widget_areas = get_theme_mod('bb_ecommerce_store_footer_widget_areas', '4');
      if ($bb_ecommerce_store_widget_areas == '3') {
        $bb_ecommerce_store_cols = 'col-lg-4 col-md-4';
      } elseif ($bb_ecommerce_store_widget_areas == '4') {
        $bb_ecommerce_store_cols = 'col-lg-3 col-md-3';
      } elseif ($bb_ecommerce_store_widget_areas == '2') {
        $bb_ecommerce_store_cols = 'col-lg-6 col-md-6';
      } else {
        $bb_ecommerce_store_cols = 'col-lg-12 col-md-12';
      }
    ?>
    <div id="footer" class="copyright-wrapper">
      <div class="container">
        <div class="row">
          <!-- Footer Column 1 -->
          <div class="sidebar-column <?php echo esc_attr($bb_ecommerce_store_cols); ?>">
            <?php if (is_active_sidebar('footer-1')) : ?>
              <?php dynamic_sidebar('footer-1'); ?>
            <?php else : ?>
              <aside id="calendar" role="complementary" aria-label="firstsidebar" class="widget">
                <h3 class="widget-title"><?php esc_html_e('Calendar', 'bb-ecommerce-store'); ?></h3>
                <?php get_calendar(); ?>
              </aside>
            <?php endif; ?>
          </div>

          <!-- Footer Column 2 -->
          <div class="sidebar-column <?php echo esc_attr($bb_ecommerce_store_cols); ?>">
            <?php if (is_active_sidebar('footer-2')) : ?>
              <?php dynamic_sidebar('footer-2'); ?>
            <?php else : ?>
              <aside id="categories" role="complementary" aria-label="secondsidebar" class="widget">
                <h3 class="widget-title"><?php esc_html_e('Categories', 'bb-ecommerce-store'); ?></h3>
                <ul>
                  <?php wp_list_categories(array('title_li' => '')); ?>
                </ul>
              </aside>
            <?php endif; ?>
          </div>

          <!-- Footer Column 3 -->
          <div class="sidebar-column <?php echo esc_attr($bb_ecommerce_store_cols); ?>">
            <?php if (is_active_sidebar('footer-3')) : ?>
              <?php dynamic_sidebar('footer-3'); ?>
            <?php else : ?>
              <aside id="search" role="complementary" aria-label="thirdsidebar" class="widget">
                <h3 class="widget-title"><?php esc_html_e('Search', 'bb-ecommerce-store'); ?></h3>
                <?php get_search_form(); ?>
              </aside>
            <?php endif; ?>
          </div>

          <!-- Footer Column 4 -->
          <div class="sidebar-column <?php echo esc_attr($bb_ecommerce_store_cols); ?>">
            <?php if (is_active_sidebar('footer-4')) : ?>
              <?php dynamic_sidebar('footer-4'); ?>
            <?php else : ?>
              <aside id="meta" role="complementary" aria-label="fourthsidebar" class="widget">
                <h3 class="widget-title"><?php esc_html_e('Meta', 'bb-ecommerce-store'); ?></h3>
                <ul>
                  <?php wp_register(); ?>
                  <li><?php wp_loginout(); ?></li>
                </ul>
              </aside>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php }?>
  <?php if (get_theme_mod('bb_ecommerce_store_show_hide_copyright', true)) {?>
    <div class="inner">
      <div class="copyright">
        <p><?php bb_ecommerce_store_credit(); ?><?php echo esc_html(get_theme_mod('bb_ecommerce_store_footer_copy',__(' By Themeshopy','bb-ecommerce-store'))); ?></p>
      </div>
      <div class="clear"></div>
    </div>
  <?php }?>
  <?php if (get_theme_mod('bb_ecommerce_store_show_hide_footer_social_icon', false)) {?>
    <div class="footer-social-icon">
      <div class="container">
        <?php for ( $bb_ecommerce_store_j = 1; $bb_ecommerce_store_j <= 5; $bb_ecommerce_store_j++ ) { ?>
          <?php if( get_theme_mod( 'bb_ecommerce_store_social_icon_url' .$bb_ecommerce_store_j) != '') { ?>
            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'bb_ecommerce_store_social_icon_url' .$bb_ecommerce_store_j) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('bb_ecommerce_store_select_social_icon' .$bb_ecommerce_store_j)); ?>" aria-hidden="true"></i></a>
          <?php } ?>
        <?php } ?>
      </div>
    </div>
  <?php }?>
</footer>
<?php if( get_theme_mod( 'bb_ecommerce_store_enable_disable_scroll',true) != '' || get_theme_mod( 'bb_ecommerce_store_responsive_scroll',true) != '') { ?>
  <?php $bb_ecommerce_store_theme_lay = get_theme_mod( 'bb_ecommerce_store_scroll_setting','Right');
    if($bb_ecommerce_store_theme_lay == 'Left'){ ?>
      <button id="scroll-top" class="left-align" title="<?php esc_attr_e('Scroll to Top','bb-ecommerce-store'); ?>"><i class="<?php echo esc_attr(get_theme_mod('bb_ecommerce_store_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'bb-ecommerce-store'); ?></span></button>
    <?php }else if($bb_ecommerce_store_theme_lay == 'Center'){ ?>
      <button id="scroll-top" class="center-align" title="<?php esc_attr_e('Scroll to Top','bb-ecommerce-store'); ?>"><i class="<?php echo esc_attr(get_theme_mod('bb_ecommerce_store_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'bb-ecommerce-store'); ?></span></button>
    <?php }else{ ?>
      <button id="scroll-top" title="<?php esc_attr_e('Scroll to Top','bb-ecommerce-store'); ?>"><i class="<?php echo esc_attr(get_theme_mod('bb_ecommerce_store_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'bb-ecommerce-store'); ?></span></button>
  <?php }?>
<?php }?>

<?php wp_footer(); ?>
</body>
</html>