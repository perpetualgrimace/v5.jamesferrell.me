<?

// replace with real image path logic:

// $img = $item->img()->url();
// $img2x = $item->img2x()->url();

?>

<img class="project-image" data-src="<?= $img ?>" data-src2x="<?= $img2x ?>" sizes="100vw" alt="">
<noscript>
  <img class="project-image" src="<?= $img ?>" srcset="<?= $img ?>, <?= $img2x?> 2x" sizes="100vw" alt="">
</noscript>
