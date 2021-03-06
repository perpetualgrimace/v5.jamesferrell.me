<?

// category
$category = str_replace(',', ', ', $page->topic());
$category = preg_replace('/\s\s+/', ' ', $category);

// relative date
$relativeDate = $page->published()->relative(1);

// time to read
// since the plugin doesn't work with blocks, check for manual estimate via readingTime field
if ($page->readingTime() != '') {
  $readingTime = $page->readingTime();
// use the plugin
} else {
  $readingTime = readingtime($page->text(), [
    'format' => '{minutesCount} {minutesLabel}'
  ]);
}

// twitter share link
$twitterHandle = $pages->find('contact')->twitter();
$twitterTitle = excerpt($page->title(), 60);
$twitterShareLink = 'https://twitter.com/share?url=' . $page->url() . '&text=' . $twitterTitle . '&via=' . $twitterHandle . '&hashtags=' . $category;

?>


<aside class="blog-secondary">
  <ul class="secondary-meta-list epsilon">

    <!-- category -->
    <li class="secondary-item">
      <strong class="secondary-label">Category:</strong>
      <? snippet('tag-link', ['tag' => $category]) ?>
    </li>

    <!-- date published -->
    <li class="secondary-item">
      <strong class="secondary-label">Posted:</strong>
      <?= $relativeDate ?>
    </li>

    <!-- time to read -->
    <li class="secondary-item">
      <strong class="secondary-label">Estimated time to read:</strong><br>
      <?= $readingTime ?>
    </li>

    <!-- twitter share link -->
    <li class="secondary-item">
      <a class="secondary-link u-margin-top-off-children" target="_blank" href="<?= $twitterShareLink ?>">
        <? snippet('share-icon-twitter.svg') ?> <span class="secondary-link-text">Tweet this article</span></a>
    </li>

  </ul>
</aside>
