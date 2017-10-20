
 <?

  // number of items to show on each page (used on project list page and to limit results on home page)
  if (isset($pagNum)) {
    $pagNum = $pagNum;
  } else {
    $pagNum = 15;
  }

  // project list with pagination (used on both home page and project list page)
  $items = $pages->find('projects')->children()->visible()->flip()->paginate($pagNum);
  $pagination = $items->pagination();

?>


<div class="g-columns">
  <div class="g-col">

    <!-- home page -->
    <? if ($page->isHomePage()): ?>
      <h2 class="u-padding-bottom"><?= $page->projectsHeadline() ?></h2>
    <? endif ?>


    <!-- display project-items -->
    <? if ($items->count() != 0): ?>
      <div class="g-columns project-list">
        <? foreach ($items as $item) {
          snippet('project-item', array('item' => $item));
        } ?>
      </div>
    <? endif ?>


    <!-- display pagination if necessary -->
    <? if($page->isHomePage() && ($pagination->items() > $pagNum)) { ?>
      <a href="projects" class="button link-arrow epsilon">More projects</a>
    <? } elseif (isset($pagination) && ($pagination->items() > $pagNum)) {
      snippet('pagination', array('pagination' => $pagination));
    } ?>

  </div>
</div>
