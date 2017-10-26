<?

//set headline
if($page->headline() != '') {
  $headline = $page->headline();
} else {
  $headline = $page->title();
}

?>

<header class="image-header header dark-theme" role="banner">

  <h1 class="image-header-headline">

    <?= $headline ?>

    <? if ($page->subhead() != ''): ?>
      <span class="header-subhead delta">
        <span class="u-screenreader">: </span>
        <?= $page->subhead() ?>
      </span>
    <? endif ?>

  </h1>

  <? snippet('global-header-hero') ?>

</header>
