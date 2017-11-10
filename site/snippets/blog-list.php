 <?

  // number of items to show on each page (articles list page)
  if (isset($pagNum)) {
    $pagNum = $pagNum;
  } else {
    $pagNum = 12;
  }

  // articles list page with pagination
  if(isset($query) && ($query != '')) {
    $items = $results;
  } else {
    $items = $pages->find('blog')->children()->visible()->flip()->paginate($pagNum);
  }

  $pagination = $items->pagination();

?>

<div class="g-columns content">

  <!-- check for a search query and display result count in a heading -->
  <? if (isset($query)) {
     if ($results->count() > 0): ?>
      <h2>Your search for &lsquo;<?= $query ?>&rsquo; returned <?= $results->count() ?> article<? if($results->count() > 1): echo 's'; endif ?>:</h2>

    <? elseif ($results->count() == 0): ?>
      <h2>Your search for '<?= $query ?>' returned 0 results.</h2>

      <p>Try a different search or <a href="<?= $page->url() ?>">browse all articles</a>.</p>

    <? endif;
  } ?>

  <!-- home page -->
  <? if ($page->isHomePage()): ?>
    <h2 class="u-padding-bottom"><?= $page->blogHeadline() ?></h2>
  <? endif ?>


  <!-- display blog cards -->
  <? if ($items->count() != 0): ?>
    <div class="g-columns g-compact card-list <?= $page->slug() . '-card-list' ?>"  data-type-list>
      <? foreach ($items as $item) {
        snippet('card', array('item' => $item));
      } ?>
    </div>
  <? endif ?>


  <!-- display pagination if necessary -->
  <? if($page->isHomePage() && ($pagination->items() > $pagNum)) { ?>
    <div class="button-container">
      <a href="blog" class="button link-arrow epsilon u-margin-top-sm">More articles</a>
    </div>
  <? } elseif (isset($pagination) && ($pagination->items() > $pagNum)) {
    snippet('pagination', array('pagination' => $pagination));
  } ?>

</div>
