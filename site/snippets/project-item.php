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

  // format tags for use in sorting
  // web design, web development, branding ➡ web-design,-web-development,-branding
  $tagList = str_replace(' ', '-', $item->tags());
  // web-design,-web-development,-branding ➡ web-design web-development branding
  $tagList = str_replace(',-', ' ', $tagList);

  // link text
  if ($contentType == 'web') {
    $linkText = 'View live site';
  } elseif ($contentType == 'album') {
    $linkText = 'Listen on bandcamp';
  } elseif ($contentType == 'controller') {
    $linkText = 'View project on Dribbble';
  } else {
    $linkText = 'Missing ' . $contentType . ' snippet!';
  }

  // determine heading tag (for accessiblity!)
  // $headingTag = 'h2';

  // use slug as ID
  $slug = $item->slug();

  // coming soon?
  if ($item->comingSoon() == "true") {
    $comingSoon = "is-coming-soon";
  } else {
    $comingSoon = "";
  }

?>


<article class="<?= $contentType?>-project-item project-item dark-theme <?= $comingSoon ?>" style="background-color: <?= $projectColor ?>" data-type-item data-type="<?= $tagList ?>">


  <!-- link -->
  <? if ($item->externalLink() != ""): ?>
    <a href="<?= $item->externalLink() ?>" class="project-item-link" aria-describedby="<?= $slug ?>">
      <span class="u-screenreader"><?= $linkText ?></span>
    </a>
  <!-- no link -->
  <? else: ?>
    <span class="project-item-link"></span>
  <? endif ?>


  <!-- coming soon -->
  <? if ($comingSoon != ""): ?>
    <p class="project-item-banner epsilon">Coming soon</p>
  <? endif ?>


  <!-- inner container -->
  <div class="project-item-inner">


    <!-- caption -->
    <div class="project-item-caption">

      <!-- heading -->
      <h2 class="<?= $contentType?>-project-item-title project-item-title heading beta" href="<?= $item->externalLink() ?>" tabindex="-1" id="<?= $slug ?>"><?= $item->title() ?></h2>

      <!-- tags -->
      <ul class="project-tag-list tag-list">
        <? foreach ($tags as $tag): ?>
          <li class="tag-item">
            <? snippet('tag', ['tag' => $tag]); ?>
          </li>
        <? endforeach ?>
      </ul>

    </div> <!-- .project-item-caption -->


    <!-- image -->
    <?
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

  </div><!-- .project-item-inner -->
</article><!-- .project-item -->
