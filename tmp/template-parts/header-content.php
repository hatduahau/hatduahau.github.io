<header class="u-clearfix u-color-var u-header u-header" id="sec-2a97">
  <div class="u-clearfix u-sheet u-sheet-1">
    <?php $logo = theme_get_logo(array(
            'default_src' => "/images/default-logo.png",
            'default_url' => "#"
        )); $url = stripos($logo['url'], 'http') === 0 ? esc_url($logo['url']) : $logo['url']; ?><a <?php if (is_customize_preview()) echo 'data-default-src="' . esc_url($logo['default_src']) . '" '; ?>href="<?php echo $url; ?>" class="u-image u-logo u-image-1 custom-logo-link" data-image-width="80" data-image-height="40">
      <img <?php if ($logo['svg']) { echo 'style="width:'.$logo['width'].'px"'; } ?>src="<?php echo esc_url($logo['src']); ?>" class="u-logo-image u-logo-image-1">
    </a>
    <?php
            ob_start();
            ?><nav class="u-align-left u-font-size-14 u-menu u-menu-one-level u-nav-spacing-25 u-offcanvas u-menu-1" data-responsive-from="MD" role="navigation">
      <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
        <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-hamburger-link u-nav-link u-hamburger-link-1" href="#" tabindex="-1" aria-label="Open menu" aria-controls="23bf">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xlink:href="#svg-7b92"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
        </a>
      </div>
      <div class="u-custom-menu u-nav-container">
        {menu}
      </div>
      <div class="u-custom-menu u-nav-container-collapse" id="23bf" role="region" aria-label="Menu panel">
        <div class="u-align-center u-black u-container-align-center u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-inner-container-layout u-sidenav-overflow">
            <div class="u-menu-close" tabindex="-1" aria-label="Close menu"></div>
            {responsive_menu}
          </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
      <style class="menu-style">@media (max-width: 939px) {
                    [data-responsive-from="MD"] .u-nav-container {
                        display: none;
                    }
                    [data-responsive-from="MD"] .menu-collapse {
                        display: block;
                    }
                }</style>
    </nav><?php
            $menu_template = ob_get_clean();
            $menuPath = '/template-parts/menu/primary-navigation-1/';
            $processorPath = get_theme_file_path('/template-parts/menu/popups-render.php');
            if (file_exists($processorPath)) {
                include $processorPath;
            }
            echo Theme_NavMenu::getMenuHtml(array(
                'container_class' => 'u-align-left u-font-size-14 u-menu u-menu-one-level u-nav-spacing-25 u-offcanvas u-menu-1',
                'menu' => array(
                    'is_mega_menu' => false,
                    'menu_class' => 'u-nav u-spacing-30 u-unstyled u-nav-1',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-border-2 u-border-active-custom-color-1 u-border-hover-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-button-style u-nav-link u-text-active-custom-color-1 u-text-hover-custom-color-1 u-text-white',
                    'link_style' => 'padding: 10px 0px;',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-aa3a-30',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link u-white',
                    'submenu_link_style' => '',
                ),
                'responsive_menu' => array(
                    'is_mega_menu' => false,
                    'menu_class' => 'u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-button-style u-nav-link',
                    'link_style' => '',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-aa3a-32',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link',
                    'submenu_link_style' => '',
                ),
                'theme_location' => 'primary-navigation-1',
                'template' => $menu_template,
                'mega_menu' => isset($megaMenu) ? $megaMenu : '{}',
            )); ?>
    <div class="u-custom-color-2 u-shape u-shape-circle u-shape-1"></div>
  </div>
</header>