<?

$img = $site->url() . '/assets/img/icons/jf-icon.png';
$img2x = $site->url() . '/assets/img/icons/jf-icon@2x.png';

?>

<img class="logo-icon-img" data-src="<?= $img ?>" data-src2x="<?= $img2x ?>" sizes="100vw" alt="">
<noscript>
  <img class="logo-icon-img" src="<?= $img ?>" srcset="<?= $img ?>, <?= $img2x?> 2x" sizes="100vw" alt="">
</noscript>
