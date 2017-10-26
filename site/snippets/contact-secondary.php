<?

// sidebar content
if ($page->secondary() != '') {
  $secondaryContent = $page->secondary()->kt();
} else {
  $secondaryContent = NULL;
}

// social heading text
$socialHeading = $page->socialHeading();

// define social media icons in an array
$socialAccounts = ['instagram', 'facebook', 'linkedin'];

?>

<aside class="content secondary tertiary-text epsilon">

    <!-- text content -->
    <? e($secondaryContent !== NULL, $secondaryContent) ?>


    <!-- social links -->
    <h2><?= $socialHeading ?></h2>

    <ul class="secondary-social-list u-list-reset">
      <? foreach($socialAccounts as $social) {
        snippet('social-link', ['social' => $social]);
      } ?>
    </ul>


</aside>
