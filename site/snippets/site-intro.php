<div class="site-intro brand-theme">
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
