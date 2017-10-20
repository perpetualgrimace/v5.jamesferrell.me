<?

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // page title
  snippet('global-main-open');
    // filter content
    snippet('filter-header');

    // main content
    snippet('global-section-open');
      snippet('project-list');
    snippet('global-section-close');

    snippet('cta');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');
