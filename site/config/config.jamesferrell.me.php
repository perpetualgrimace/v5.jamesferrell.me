<?

// cache
c::set('cache', true);
c::set('cachebuster', true);
c::set('cache.ignore', array(
  'contact',
  'search',
  'sitemap',
  'feed'
));
