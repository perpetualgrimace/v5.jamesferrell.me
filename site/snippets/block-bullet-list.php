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
  if($listObject->title() != $listObject->slug()) {
    // add block-title snippet, including container
    snippet('block-heading', ['block' => $listObject]);
  };

?>

  <div class="block block-list block-bullet-list epsilon">

    <? foreach($listItems as $listItem): ?>
    <div class="block-bullet-list-group">

      <!-- heading -->
      <h3 class="block-bullet-list-heading"><?= $listItem->title() ?></h3>

      <!-- list -->
      <?= $listItem->items()->kt() ?>

    </div>
    <? endforeach ?>

  </div>

<? endif ?>
