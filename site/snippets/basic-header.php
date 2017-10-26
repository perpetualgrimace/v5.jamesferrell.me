<?

//set headline
if($page->headline() != '') {
  $headline = $page->headline();
} else {
  $headline = $page->title();
}

?>

<header class="basic-header header" role="banner">

  <!-- headline -->
  <h1 class="basic-header-headline gamma">

    <?= $headline ?>

    <? if ($page->subhead() != ''): ?>
      <span class="header-subhead delta">
        <span class="u-screenreader">: </span>
        <?= $page->subhead() ?>
      </span>
    <? endif ?>

  </h1>

</header>
