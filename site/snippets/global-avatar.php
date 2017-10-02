<?

$img = $site->file($site->bioImg())->url();
$img2x = $site->file($site->bioImg2x())->url();

?>

<img class="avatar-image" data-src="<?= $img ?>" data-src2x="<?= $img2x ?>" sizes="100vw" alt="😬">
<noscript>
  <img class="avatar-image" src="<?= $img ?>" srcset="<?= $img ?>, <?= $img2x?> 2x" sizes="100vw" alt="😬">
</noscript>
