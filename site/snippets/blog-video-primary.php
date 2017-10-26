<?

// check for optional variables passed from template
if(isset($field)) { $field = $page->$field(); } else { $field = $page->text(); }
if($page->youtubeId() != '') {
  $videoUrl = 'http://www.youtube.com/embed/' . $page->youtubeId();
} else {
  $videoUrl = 'youtube.com';
}

?>

<article class="content">

  <div class="video-container">
    <iframe class="video-iframe" width="560" height="315" src="<?= $videoUrl ?>" frameborder="0" allowfullscreen></iframe>
  </div>

  <? e($field->kt() != '', $field->kt()) ?>

</article>
