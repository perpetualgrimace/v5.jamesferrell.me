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

<div class="device-container phone-container">
  <div class="device-shell phone-shell"></div>
  <div class="device-screen phone-screen">
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
