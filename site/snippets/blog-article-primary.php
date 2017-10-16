<?

// check for optional variables passed from template
if(isset($layout)) { $layout = $layout; } else { $layout = 'g-8'; }
if(isset($field)) { $field = $page->$field(); } else { $field = $page->text(); }

?>

<div class="g-col <?= $layout ?>">

  <!-- main article -->
  <article class="content">
    <?= $field->kirbytext() ?>
  </article>

  <!-- nav & colophon -->
  <? snippet('content-nav') ?>
  <? snippet('colophon') ?>

</div>
