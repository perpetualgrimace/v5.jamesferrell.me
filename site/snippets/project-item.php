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
  if($page->isHomePage()) {
    $headingTag = 'h3';
  } else {
    $headingTag = 'h2';
  }

?>


<article class="<?= $contentType?>-project-item project-item dark-theme " style="background-color: <?= $projectColor ?>">


  <!-- link -->
  <a href="<?= $item->externalLink() ?>" class="project-item-link">
    <span class="u-screenreader"><?= $linkText ?></span>
  </a>


  <!-- inner container -->
  <div class="project-item-inner">


    <!-- caption -->
    <div class="project-item-caption">

      <!-- heading -->
      <<?= $headingTag ?> class="<?= $contentType?>-project-item-title project-item-title heading beta" href="<?= $item->externalLink() ?>"><?= $item->title() ?></<?= $headingTag ?>>

      <!-- tags -->
      <ul class="project-tag-list tag-list">
        <? foreach ($tags as $tag): ?>
          <li class="tag-item u-margin-top-sm">
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
