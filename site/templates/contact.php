<?

snippet('global-head');
snippet('global-body-open');
  snippet('global-nav');

  // main
  snippet('global-main-open');
    // primary content
    snippet('global-section-open', ['class' => 'primary-content contact-primary-content']);

      // title
      snippet('basic-header');
      // contact form
      snippet('contact');

    snippet('global-section-close');

    // secondary content
    snippet('global-section-open', ['class' => 'secondary-content contact-secondary-content']);
      snippet('contact-secondary');
    snippet('global-section-close');

  snippet('global-main-close');

  // logo, colophon, social links, copyright
  snippet('tertiary-sidebar');

  // footer
  snippet('global-footer');
  snippet('global-footer-scripts');
snippet('global-body-close');
