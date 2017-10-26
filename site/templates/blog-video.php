<?

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // main
  snippet('global-main-open');

    // page title
    snippet('image-header');

    // primary content
    snippet('global-section-open', ['class' => 'primary-content blog-content']);
      snippet('blog-video-primary');
    snippet('global-section-close');

    // secondary content
    snippet('global-section-open', ['class' => 'secondary-content image-header-offset']);
      snippet('blog-article-secondary');
    snippet('global-section-close');


    // content nav + colophon
    snippet('global-section-open', ['class' => 'primary-content blog-content']);
      snippet('content-nav');
      snippet('colophon');
    snippet('global-section-close');

  snippet('global-main-close');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');
