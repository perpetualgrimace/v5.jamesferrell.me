<?

  // determine project-item type
  $contentType = $item->thumbnailLayout();

  // get thumbnail image
  if ($item->thumbImg() != '') {
    $thumbImg = $item->image($item->thumbImg())->url();
  } else {
    $thumbImg = $site->url() . '/';
  }

  // get background color
  if ($item->color() != '') {
    $projectColor = $item->color();
  } else {
    $projectColor = 'pink';
  }

  // get tags
  if ($item->tags() != '') {
    $tags = $item->tags()->split();
  } else {
    $tags = ['untagged'];
  }

?>

<article class="<?= $contentType?>-project-item project-item">

  <div class="project-item-inner">

    <? /* <a href="<?= $item->url() ?>" class="<?= $contentType?>-project-item-thumb project-item-thumb" tabindex="-1">
      <img class="<?= $contentType?>-project-item-img project-item-img" src="<?= $thumbImg ?>" alt="" draggable="false">
    </a> */ ?>

    <div class="<?= $contentType?>-project-item-caption project-item-caption" style="background-color: <?= $projectColor ?>">

      <a class="<?= $contentType?>-project-item-title project-item-title heading delta" href="<?= $item->externalLink() ?>"><?= $item->title() ?></a>

      <?

      // add tags
      foreach ($tags as $tag) {
        snippet('tag', ['tag' => $tag]);
      }

      // check content type and add the corresponding image
      if ($contentType == 'web') {
        snippet('device-mobile', ['item' => $item]);
        snippet('device-laptop', ['item' => $item]);
      } elseif ($contentType == 'album') {
        snippet('album', ['item' => $item]);
      } elseif ($contentType == 'controller') {
        snippet('controller', ['item' => $item]);
      } else {
        echo '<p class="dark-theme">Missing ' . $contentType . ' snippet!</p>';
      }

      ?>

    </div>

  </div>

</article>
