<?

// passed from blocks template
$listName = $block->name();

// check that the page exists
if ($pages->find('blocks/' . $listName)):

  // define page object as variable
  $listObject = $pages->find('blocks/' . $listName);

  // get list items and convert to structured content
  $listItems = $listObject->list()->toStructure();

  // Check for title by comparing title field against slug (the assumed title)
  if ($listObject->title() != $listObject->slug()) {
    // add block-title snippet, including container
    snippet('block-heading', ['block' => $listObject]);
  };

?>

  <ul class="block block-list block-definition-list u-list-reset">

    <? foreach($listItems as $listItem):
      if ($listItem->link() != '') {
        $listItemTitle = '<a class="heading" href="' . $listItem->link() . '">' . $listItem->title() . '</a>';
      } else {
        $listItemTitle = $listItem->title();
      }
    ?>
      <li><dl>
        <dt class="heading delta"><?= $listItemTitle ?></dt>
        <dd class="epsilon">
          <? if ($listItem->subhead() != ''): ?>
            <span class="block-definition-subhead milli u-uppercase">
              <?= $listItem->subhead() ?>
            </span>
          <? endif ?>
          <?= $listItem->text()->kt() ?>
        </dd>
      </dl></li>
    <? endforeach ?>

  </ul>

<? endif ?>
