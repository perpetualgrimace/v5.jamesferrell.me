<?

// list page
$articleList = $pages->find('blog');
// first article
$oldestArticle = $page->siblings()->visible()->first();
// latest article
$newestArticle = $page->siblings()->visible()->last();

// older
if ($page->hasPrevVisible()) {
  $firstArticle = $page->prevVisible();
  $firstLabel = 'Older';
} else {
  $firstArticle = $newestArticle;
  $firstLabel = 'Newest';
}

// newer
if ($page->hasNextVisible()) {
  $secondArticle = $page->nextVisible();
  $secondLabel = 'Newer';
} else {
  $secondArticle = $oldestArticle;
  $secondLabel = 'Oldest';
}

?>

<nav class="content-nav">
  <ul class="content-nav-list u-center u-margin-top-off-children">

    <!-- first -->
    <li class="content-nav-item content-nav-item-first">
      <a href="<?= $firstArticle->url() ?>" class="content-nav-link u-margin-top-off-children">
        <span class="content-nav-inner"><!-- required for centering -->
          <span class="content-nav-label u-uppercase epsilon"><?= $firstLabel ?></span>
          <span class="u-screenreader"> article: </span>
          <span class="content-nav-title heading">
            <?= $firstArticle->title() ?>
          </span>
        </span>
      </a>
    </li>

    <!-- list -->
    <li class="content-nav-item content-nav-item-middle">
      <a href="<?= $articleList ?>" class="content-nav-link">
        <span class="content-nav-inner"><!-- required for centering -->
          <? snippet('grid-icon.svg') ?>
          <span class="u-screenreader">All articles</span>
        </span>
      </a>
    </li>

    <!-- second -->
    <li class="content-nav-item content-nav-item-second">
      <a href="<?= $secondArticle->url() ?>" class="content-nav-link u-margin-top-off-children">
        <span class="content-nav-inner"><!-- required for centering -->
          <span class="content-nav-label u-uppercase epsilon"><?= $secondLabel ?></span>
          <span class="u-screenreader"> article: </span>
          <span class="content-nav-title heading">
            <?= $secondArticle->title() ?>
          </span>
        </span>
      </a>
    </li>

  </ul>
</nav>
