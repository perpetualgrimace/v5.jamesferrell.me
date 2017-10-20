<?

// content type = page headline
$contentType = $page->headline();

// get field to pluck for tagcloud
if ($page->intendedTemplate() == 'blog-list') {
  $tagField = 'topic';
} else {
  $tagField = 'tags';
}

// generate tag list
$tags = $page->children()->visible()->pluck($tagField, ',', true);
// sort tags reverse-alphabetically (good enough for me)
rsort($tags);

?>

<header class="filter-header header" role="banner">

  <div class="g-container u-padding-top-sm">
    <div class="g-col">

      <!-- headline -->
      <h1 class="filter-header-headline">
        <span class="category">All</span> <?= $contentType ?>
      </h1>


      <!-- filters -->
      <p class="filter-headline-label epsilon">Filter by:</p>

      <!-- tag list -->
      <ul class="filter-tag-list tag-list">
        <li class="tag-item">
          <span class="tag epsilon">All</span>
        </li>
        <? foreach ($tags as $tag): ?>
          <li class="tag-item">
            <? snippet('tag', ['tag' => $tag]) ?>
          </li>
        <? endforeach ?>
      </ul>

    </div>

  </div>

</header>
