<div class="colophon brand-theme">
  <div class="colophon-inner">

    <!-- my face -->
    <div class="colophon-avatar">
      <div class="colophon-avatar-inner">
        <? snippet('global-avatar') ?>
      </div>
    </div>

    <!-- name & bio -->
    <div class="colophon-caption">

      <!-- name -->
      <author class="colophon-caption-name subhead"><?= $site->title() ?></author>

      <!-- bio -->
      <div class="colophon-caption-bio tertiary-text epsilon">
        <?= $site->bio()->kt() ?>
      </div>

    </div>

  </div>
</div>
