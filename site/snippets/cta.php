<?

if ($page->cta() != '') {
  $cta = $page->cta()->kt();
} elseif ($page->depth() > 1 && $page->parent()->cta() != '') {
  $cta = $page->parent()->cta()->kt();
} else {
  $cta = $site->cta()->kt();
}

?>

<div class="g-columns">
  <article class="cta brand-theme u-left-center g-col">
    <?= $cta ?>
  </article>
</div>
