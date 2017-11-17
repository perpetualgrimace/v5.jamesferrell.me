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

  // format tags for use in sorting
  // problem solving, software ➡ problem-solving,-software
  $tagList = str_replace(' ', '-', $item->topic());
  // problem-solving,-software ➡ problem-solving software
  $tagList = str_replace(',-', ' ', $tagList);

  // link text
  $linkText = 'View article';

  // use slug as ID
  $slug = $item->slug();


?>


<article class="<?= $contentType?>-card-container card-container g-col" data-type-item data-type="<?= $tagList ?>">

  <!-- inner container -->
  <div class="card-inner">


    <!-- link -->
    <a class="<?= $contentType?>-card-link card-link" href="<?= $item->url() ?>" aria-describedby="<?= $slug ?>">
      <span class="u-screenreader"><?= $linkText ?></span>
    </a>


    <!-- caption -->
    <div class="<?= $contentType?>-card-caption card-caption">

      <!-- heading -->
      <a class="<?= $contentType?>-card-title card-title heading delta" href="<?= $item->url() ?>" tabindex="-1" id="<?= $slug ?>"><?= $item->title() ?></a>

      <!-- description -->
      <p class="<?= $contentType?>-card-description card-description epsilon"><?= $description ?></p>

      <!-- relative date -->
      <? if ($relativeDate != NULL): ?>
        <p class="<?= $contentType?>-card-meta card-meta milli u-uppercase">Posted <?= $relativeDate ?></p>
      <? endif ?>
    </div>


    <? /* <a href="<?= $item->url() ?>" class="<?= $contentType?>-card-thumb card-thumb" tabindex="-1">
      <img class="<?= $contentType?>-card-img card-img" src="<?= $thumbImg ?>" alt="" draggable="false">
    </a> */ ?>

  </div>

</article>
