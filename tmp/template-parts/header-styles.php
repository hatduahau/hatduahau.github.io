<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
  --color-var: #6dac93;
}
.u-header .u-sheet-1 {
  min-height: 78px;
}
.u-header .u-image-1 {
  width: 64px;
  height: 32px;
  margin: 20px auto 0 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-menu-1 {
  margin: -32px 0 0 auto;
}
.u-header .u-hamburger-link-1 {
  font-size: calc(1em + 2px);
  padding: 1px 0;
}
.u-header .u-nav-1 {
  font-weight: 700;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: normal;
}
.u-block-aa3a-30 {
  font-size: 1rem;
}
.u-header .u-nav-2 {
  font-size: 1rem;
}
.u-block-aa3a-32 {
  font-size: 1rem;
}
.u-header .u-shape-1 {
  width: 97px;
  height: 97px;
  margin: -87px auto 10px 173px;
}
@media (max-width: 1199px) {
  .u-header .u-menu-1 {
    margin-right: 0;
  }
  .u-header .u-shape-1 {
    margin-top: -87px;
    margin-left: 173px;
  }
}</style>
