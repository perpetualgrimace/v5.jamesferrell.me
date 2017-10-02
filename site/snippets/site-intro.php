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
    <div class="site-intro-avatar u-left-center">
      <div class="site-intro-avatar-inner">
        <? snippet('global-avatar') ?>
      </div>
    </div>

    <!-- name & logo -->
    <div class="site-intro-logo">

      <!-- logo icon -->
      <div class="site-intro-logo-icon">
        <? snippet('global-logo-icon') ?>
      </div>

      <!-- name -->
      <author class="site-intro-logo-name subhead"><?= $site->title() ?></author>

    </div>

    <!-- bio -->
    <div class="site-intro-bio bio-text epsilon">
      <?= $site->bio()->kt() ?>
    </div>

  </div>
</div>
