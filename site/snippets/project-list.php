
 <?

  // number of items to show on each page (used on project list page and to limit results on home page)
  if (isset($pagNum)) {
    $pagNum = $pagNum;
  } else {
    $pagNum = 16;
  }

  // project list with pagination (used on both home page and project list page)
  $items = $pages->find('projects')->children()->visible()->flip()->paginate($pagNum);
  $pagination = $items->pagination();

?>


<!-- home page -->
<? if ($page->isHomePage()): ?>
  <h1 class="u-padding-bottom gamma"><?= $page->projectsHeadline() ?></h1>
<? endif ?>


<!-- display project-items -->
<? if ($items->count() != 0): ?>
  <div class="project-list" data-type-list>
    <? foreach ($items as $item) {
      snippet('project-item', array('item' => $item));
    } ?>
  </div>
<? endif ?>


<!-- display pagination if necessary -->
<? if($page->isHomePage() && ($pagination->items() > $pagNum)) { ?>
  <div class="button-container">
    <a href="projects" class="button link-arrow epsilon u-margin-top">More projects</a>
  </div>
<? } elseif (isset($pagination) && ($pagination->items() > $pagNum)) {
  snippet('pagination', array('pagination' => $pagination));
} ?>
