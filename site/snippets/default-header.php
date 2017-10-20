<?

//set headline
if($page->headline() != '') {
  $headline = $page->headline();
} else {
  $headline = $page->title();
}

?>

<header class="default-header header u-fullwidth dark-theme" role="banner">

  <div class="g-container">
    <div class="g-col">
      <h1 class="default-header-headline">

        <?= $headline ?>

        <? if ($page->subhead() != ''): ?>
          <span class="header-subhead delta">
            <span class="u-screenreader">: </span>
            <?= $page->subhead() ?>
          </span>
        <? endif ?>

      </h1>

    </div>

  </div>

  <? snippet('global-header-hero') ?>

</header>
