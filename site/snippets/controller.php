<?

// get image URLs
if ($item->controllerImg() != '' && $item->controllerImg2x() != '') {
  $img = $item->file($item->controllerImg())->url();
  $img2x = $item->file($item->controllerImg2x())->url();
  // error handling
  $allImages = TRUE;
} else {
  $allImages = FALSE;
}

?>

<div class="controller-container">
  <? if ($allImages == TRUE): ?>
    <img class="project-image" data-src="<?= $img ?>" data-src2x="<?= $img2x ?>" sizes="320px" alt="">
    <noscript>
      <img class="project-image" src="<?= $img ?>" srcset="<?= $img ?>, <?= $img2x?> 2x" sizes="320px" alt="">
    </noscript>
  <? else: ?>
    <h3>Check image filenames</h3>
  <? endif ?>
</div>
