<?

// get tag name
$tagName = $tag;
// sanitized tag name
$tagSanitized = sanitize($tag);

?>

<span class="tag epsilon" data-type="<?= $tagSanitized ?>"><?= $tagName ?></span>
