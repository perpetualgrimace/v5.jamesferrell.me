<div class="site-intro">
  <div class="site-intro-inner">

    <!-- my face -->
    <div class="site-intro-avatar u-left-center">
      <div class="site-intro-avatar-inner">
        <? snippet('global-avatar') ?>
      </div>
    </div>

    <!-- logo -->
    <div class="site-intro-logo u-left-center">
      <author class="home-headline display giga subhead"><?= $site->title() ?></author>
    </div>

    <!-- bio -->
    <div class="site-intro-colophon epsilon">
      <?= $site->bio()->kt() ?>
    </div>

  </div>
</div>
