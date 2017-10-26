<?

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // main
  snippet('global-main-open');
    // primary content
    snippet('global-section-open', ['class' => 'primary-content single-column']);

      // title + filter
      snippet('filter-header');
      // list content
      snippet('project-list');
      // cta
      snippet('cta', ['class' => 'u-margin-top-lg u-margin-bottom-sm']);

    snippet('global-section-close');
  snippet('global-main-close');

  // logo, colophon, social links, copyright
  snippet('tertiary-sidebar');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');
