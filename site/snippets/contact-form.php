<form class="contact-form g-columns u-margin-top-lg u-padding-top-xs" id="contact-form" action="<?= $page->url()?>" method="post">


  <div class="g-columns">

    <div class="g-col g-6 u-padding-top-off">
      <label for="contact-form-name"><span><?= $page->labelName() ?></span></label>
      <input name="name" class="is-required" type="text" id="contact-form-name" data-required="true" required autofocus>
      <label class="error is-hidden" data-validation="name-empty" for="contact-form-name"><?= $page->errorName() ?></label>
    </div>

    <div class="g-col g-6 u-padding-top-off">
      <label for="contact-form-email"><span><?= $page->labelEmail() ?></span></label>
      <input name="email" class="is-required" type="email" id="contact-form-email" data-required="true" inputmode="email" required>
        <label class="error is-hidden" data-validation="email-empty" for="contact-form-email"><?= $page->errorEmail() ?></label>
        <label class="error is-hidden" data-validation="email-invalid" for="contact-form-email"><?= $page->errorEmailInvalid() ?></label>
    </div>

  </div>


  <div class="g-columns">

    <div class="g-col u-padding-top-off">
      <label for="contact-form-text"><span><?= $page->labelText() ?></span></label>
      <textarea name="text" class="is-required" id="contact-form-text" data-required="true" required></textarea>
        <label class="error is-hidden" data-validation="text-empty" for="contact-form-text"><?= $page->errorText() ?></label>
    </div>

  </div>


  <label class="uniform__potty" for="website" style="display: none;">Please leave this field blank</label>
  <input type="text" name="website" id="website" class="uniform__potty" style="display: none;">

  <div class="g-columns">
    <div class="g-col u-padding-top-xs">
      <button name="_submit" class="button epsilon u-margin-top-off" type="submit" value="<?= $form->token() ?>"<? e($form->successful(), ' disabled')?>><?= $page->submit() ?></button>
    </div>
  </div>

</form>
