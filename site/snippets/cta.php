<?

if ($page->cta() != '') {
  $cta = $page->cta()->kt();
} elseif ($page->depth() > 1 && $page->parent()->cta() != '') {
  $cta = $page->parent()->cta()->kt();
} else {
  $cta = $site->cta()->kt();
}

if (isset($class)) { $class = $class; } else { $class = NULL; };

?>


<article class="cta brand-theme u-left-center<? e($class != NULL, ' ' . $class) ?>">
  <?= $cta ?>
</article>
