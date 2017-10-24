<?

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // page title
  snippet('global-main-open');
    snippet('default-header');

    // main content
    snippet('global-section-open');
      // use content blocks
      if ($page->blocks() != '') {
        snippet('blocks');
      // standard text field assumed
      } else {
        snippet('global-textblock');
      }

    snippet('global-section-close');

    snippet('cta');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');
