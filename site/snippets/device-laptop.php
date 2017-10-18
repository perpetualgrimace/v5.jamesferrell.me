<?

// get image URLs
if ($item->laptopImg() != '' && $item->laptopImg2x() != '') {
  $img = $item->file($item->laptopImg())->url();
  $img2x = $item->file($item->laptopImg2x())->url();
  // error handling
  $allImages = TRUE;
} else {
  $allImages = FALSE;
}

?>

<div class="device-container laptop-container">
  <div class="device-shell laptop-shell"></div>

  <div class="device-screen laptop-screen">
    <? if ($allImages == TRUE): ?>
      <img class="project-image" data-src="<?= $img ?>" data-src2x="<?= $img2x ?>" sizes="524px" alt="">
      <noscript>
        <img class="project-image" src="<?= $img ?>" srcset="<?= $img ?>, <?= $img2x?> 2x" sizes="524px" alt="">
      </noscript>
    <? else: ?>
      <h3>Check image filenames</h3>
    <? endif ?>
  </div>

  <div class="laptop-bottom"></div>
  <div class="laptop-bottom-bevel"></div>
</div>
