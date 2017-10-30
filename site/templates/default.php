<?

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // main
  snippet('global-main-open');

    // page title
    snippet('image-header');

    // primary content
    snippet('global-section-open', ['class' => 'primary-content']);

      // use content blocks
      if ($page->blocks() != '') {
        snippet('blocks');
      // standard text field assumed
      } else {
        snippet('global-textblock');
      }

    snippet('global-section-close');

    // secondary content
    if ($page->secondary() != '') {
      snippet('global-section-open', ['class' => 'secondary-content secondary-content-scaling image-header-offset']);
        snippet('global-secondary');
      snippet('global-section-close');
    }

    // cta
    snippet('global-section-open', ['class' => 'primary-content']);
      snippet('cta', ['class' => 'u-margin-bottom-sm']);
    snippet('global-section-close');

  snippet('global-main-close');

  // logo, colophon, social links, copyright
  snippet('tertiary-sidebar');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');
