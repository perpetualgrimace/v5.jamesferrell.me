<?

// define content types
$articles = $pages->find('blog')->children()->visible()->filterBy('template', 'blog-article');

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  snippet('site-intro');
  snippet('global-tertiary');
  // snippet('colophon');


  // page title
  snippet('global-main-open');

    // intro content
    snippet('global-section-open');
      snippet('global-textblock', ['layout' => '']);
    snippet('global-section-close');

    // blog content
    snippet('global-section-open', ['class' => 'g-col']);
      snippet('project-list', ['pagNum' => 6]);
    snippet('global-section-close');

    // blog content
    snippet('global-section-open', ['class' => 'g-col']);
      snippet('blog-list', ['pagNum' => 6, 'layout' => '']);
    snippet('global-section-close');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');
