 <?

  // check for optional variables passed from template
  if(isset($layout)): $layout = $layout; else: $layout = 'g-12'; endif;
  if(isset($cardLayout)): $cardLayout = $cardLayout; else: $cardLayout = ''; endif;

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
    $items = $pages->find('blog')->children()->visible()->sortBy('date')->flip()->paginate($pagNum);
  }

  $pagination = $items->pagination();

?>

<div class="<?= $layout ?>">
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
      <div class="g-columns g-compact">
        <? foreach ($items as $item) {
          snippet('card', array('item' => $item, 'cardLayout' => $cardLayout));
        } ?>
      </div>
    <? endif ?>


    <!-- display pagination if necessary -->
    <? if($page->isHomePage() && ($pagination->items() > $pagNum)) { ?>
      <a href="blog" class="button link-arrow epsilon">More articles</a>
    <? } elseif (isset($pagination) && ($pagination->items() > $pagNum)) {
      snippet('pagination', array('pagination' => $pagination));
    } ?>

  </div>
</div>
