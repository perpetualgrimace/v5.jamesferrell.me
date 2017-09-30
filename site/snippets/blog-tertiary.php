<ul class="meta inline">
  <li><strong>Category:</strong>
    <?
      $category = str_replace(',', ', ', $page->topic());
      $category = preg_replace('/\s\s+/', ' ', $category);
      echo $category;
    ?></li>
  <li><strong>Posted:</strong>
    <?= $page->published()->relative(1) ?>
  </li>
  <li><strong>Length:</strong>
    <?= $page->text()->readingtime() ?>
  </li>
</ul>
