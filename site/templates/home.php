<?

// define content types
$articles = $pages->find('blog')->children()->visible()->filterBy('template', 'blog-article');

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // main
  snippet('global-main-open');

    // project list
    snippet('global-section-open', ['class' => 'primary-content']);
      snippet('project-list', ['pagNum' => 6]);
    snippet('global-section-close');

    // article list
    snippet('global-section-open', ['class' => 'secondary-content']);
      snippet('blog-list', ['pagNum' => 3]);
    snippet('global-section-close');

  snippet('global-main-close');

  // logo, colophon, social links, copyright
  snippet('tertiary-sidebar');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');
