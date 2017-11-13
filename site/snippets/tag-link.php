<?

// get tag name
$tagName = $tag;
// sanitized tag name
$tagSanitized = sanitize($tag);

// list page link — hash only
if ($page->depth() != 2) {
  $tagLink = '#' . $tagSanitized;
// detail / article page — link to parent + hash
} else {
  $tagLink = $page->parent()->url() . '#' . $tagSanitized;
}

?>

<a href="<?= $tagLink ?>" class="tag tag-link epsilon" data-type-trigger><?= $tagName ?></a>
