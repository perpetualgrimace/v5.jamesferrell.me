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

  <!-- headline -->
  <h1 class="filter-header-headline gamma">
    <span class="filter-header-category" data-filter-header-category>All</span> <?= $contentType ?>
  </h1>


  <!-- filters -->
  <p class="filter-headline-label epsilon">Filter by:</p>

  <!-- tag list -->
  <ul class="filter-tag-list tag-list">
    <li class="tag-item">
      <a href="#all" class="tag tag-link epsilon is-selected" data-type-trigger>All</a>
    </li>
    <? foreach ($tags as $tag): ?>
      <li class="tag-item">
        <? snippet('tag-link', ['tag' => $tag]) ?>
      </li>
    <? endforeach ?>
  </ul>

</header>
