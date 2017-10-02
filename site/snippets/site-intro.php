<div class="site-intro">
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
    <div class="site-intro-colophon epsilon">
      <?= $site->bio()->kt() ?>
    </div>

  </div>
</div>
