<?

// define vars for convenience
$socialLinkClass = 'social-link-' . $social;
$socialLinkUrl = 'http://' . $social . '.com/' . $pages->find('contact')->$social();
$socialSvg = 'social-icon-' . $social . '.svg';

?>

<li class="social-item">
  <!-- link -->
  <a class="social-link <?= $socialLinkClass ?> u-uppercase epsilon" href="<?= $socialLinkUrl ?>">

    <!-- logo icon -->
    <span class="social-icon">
      <? snippet($socialSvg) ?>
    </span>

    <!-- label -->
    <span class="social-text">
      <?= $social ?>
    </span>

  </a>
</li>
