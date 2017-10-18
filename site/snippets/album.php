<?
// get image URLs
if ($item->albumImg() != '' && $item->albumImg2x() != '') {
  $img = $item->file($item->albumImg())->url();
  $img2x = $item->file($item->albumImg2x())->url();
  // error handling
  $allImages = TRUE;
} else {
  $allImages = FALSE;
}
?>

<div class="album-container">
  <? if ($allImages == TRUE): ?>
    <img class="project-image" data-src="<?= $img ?>" data-src2x="<?= $img2x ?>" sizes="320px" alt="">
    <noscript>
      <img class="project-image" src="<?= $img ?>" srcset="<?= $img ?>, <?= $img2x?> 2x" sizes="320px" alt="">
    </noscript>
  <? else: ?>
    <h3>Check image filenames</h3>
  <? endif ?>
</div>
