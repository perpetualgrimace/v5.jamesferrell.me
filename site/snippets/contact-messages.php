<? if($form->successful()): ?>
  <div class="is-successful content u-padding-top" data-confirmation="success">
    <?= kirbytext($page->success()) ?>
  </div>
<? else: ?>
  <div class="is-fail content u-padding-top" data-confirmation="fail">
    <?= kirbytext($page->fail()) ?>
  </div>
<? endif ?>
