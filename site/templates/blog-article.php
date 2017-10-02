<?

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // page title
  snippet('global-main-open');
    snippet('blog-header');

    // main content
    snippet('global-section-open');
      snippet('blog-article-primary', array('layout' => 'g-9'));
      snippet('blog-article-secondary', array('layout' => 'g-3'));
    snippet('global-section-close');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');
