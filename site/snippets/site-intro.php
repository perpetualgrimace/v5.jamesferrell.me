<?

// array of pages that should show the expanded bio by default
$bioPages = ['home', 'about', 'resume'];

// check the current page slug against the array
if(in_array($page->slug(), $bioPages)) {
  $bioCollapsed = FALSE;
} else {
  $bioCollapsed = TRUE;
}

?>

<div class="site-intro brand-theme<? e($bioCollapsed == TRUE, ' is-collapsed') ?>">
  <div class="site-intro-inner">

    <!-- my face -->
    <div class="site-intro-avatar">
      <div class="site-intro-avatar-inner">
        <? snippet('global-avatar') ?>
      </div>
    </div>

    <!-- logo and name -->
    <? snippet('global-logo') ?>

    <!-- bio -->
    <div class="site-intro-bio tertiary-text epsilon">
      <?= $site->bio()->kt() ?>
    </div>

  </div>
</div>
