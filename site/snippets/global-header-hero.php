<?

if ($page->heroImg() != '') {
  $heroImg = $page->file($page->heroImg());
} else {
  $heroImg = $site->file($site->heroImg());
}

if ($heroImg != NULL):

?>


<div class="hero u-margin-top-off" style="background-image: url('<?= $heroImg->url() ?>');"></div>

<? endif ?>
