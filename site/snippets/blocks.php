<? $blocks = $page->blocks()->toStructure() ?>


<article class="content g-col">

  <? foreach($blocks as $block) {
    // get the corresponding block template
    // echo $block->template() . '<br>'; // debug
    snippet($block->template(), ['block' => $block]);
  } ?>

</article>
