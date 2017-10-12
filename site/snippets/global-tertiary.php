<?

// define social media icons in an array
$socialAccounts = ['twitter', 'dribbble', 'codepen', 'github'];

?>


<div class="tertiary brand-black-theme">
  <div class="tertiary-inner">

    <ul class="tertiary-social-list">
      <?
      foreach($socialAccounts as $social) {
        snippet('social-link', ['social' => $social]);
      }
      ?>
    </ul>

    <div class="tertiary-copyright tertiary-text epsilon">
      <?= kirbytext($site->copyright()) ?>
      <?= kirbytext($site->colophon()) ?>
    </div>

  </div>
</div>
