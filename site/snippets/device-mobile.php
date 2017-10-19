<?

// get image URLs
if ($item->mobileImg() != '' && $item->mobileImg2x() != '') {
  $img = $item->file($item->mobileImg())->url();
  $img2x = $item->file($item->mobileImg2x())->url();
  // error handling
  $allImages = TRUE;
} else {
  $allImages = FALSE;
}

?>

<div class="device-container mobile-container">
  <div class="device-shell mobile-shell"></div>
  <div class="device-screen mobile-screen">
    <? if ($allImages == TRUE): ?>
      <img class="project-image" data-src="<?= $img ?>" data-src2x="<?= $img2x ?>" sizes="144px" alt="">
      <noscript>
        <img class="project-image" src="<?= $img ?>" srcset="<?= $img ?>, <?= $img2x?> 2x" sizes="144px" alt="">
      </noscript>
    <? else: ?>
      <h3>Check image filenames</h3>
    <? endif ?>
  </div>
</div>
