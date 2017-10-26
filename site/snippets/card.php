<?

  // determine card type
  $contentType = $item->intendedTemplate();

  // get thumbnail image
  if($contentType == 'blog-video' && $item->youtubeId() != '') {
    $thumbImg = 'http://img.youtube.com/vi/' . $item->youtubeId() . '/1.jpg';
  } elseif ($item->thumbImg() != '') {
    $thumbImg = $item->image($item->thumbImg())->url();
  } else {
    $thumbImg = $site->url() . '/';
  }

  // get relative date
  if($item->published() != '') {
    $relativeDate = $item->published()->relative(1);
  } else {
    $relativeDate = NULL;
  }

  // get description
  if($item->description() != '') {
    $description = $item->description();
  } else {
    $description = $item->text()->excerpt(25, 'words');
  }

?>

<article class="<?= $contentType?>-card-container card-container g-col">

  <div class="card-inner">

    <? /* <a href="<?= $item->url() ?>" class="<?= $contentType?>-card-thumb card-thumb" tabindex="-1">
      <img class="<?= $contentType?>-card-img card-img" src="<?= $thumbImg ?>" alt="" draggable="false">
    </a> */ ?>

    <div class="<?= $contentType?>-card-caption card-caption">

      <a class="<?= $contentType?>-card-title card-title heading delta" href="<?= $item->url() ?>"><?= $item->title() ?></a>

      <p class="<?= $contentType?>-card-description card-description epsilon"><?= $description ?></p>

      <? if ($relativeDate != NULL): ?>
        <p class="<?= $contentType?>-card-meta card-meta milli u-uppercase">Written <?= $relativeDate ?></p>
      <? endif ?>
    </div>

  </div>

</article>
