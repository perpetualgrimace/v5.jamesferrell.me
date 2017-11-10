<?

// get tag name
$tagName = $tag;
// sanitized tag name
$tagSanitized = sanitize($tag);

?>

<a href="#<?= $tagSanitized ?>" class="tag tag-link epsilon" data-type-trigger><?= $tagName ?></a>
