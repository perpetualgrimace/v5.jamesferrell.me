<?

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // page title
  snippet('global-main-open');
    snippet('default-header');

    // main content
    snippet('global-section-open');
      snippet('blog-video-primary');
      snippet('blog-article-secondary');
    snippet('global-section-close');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');
