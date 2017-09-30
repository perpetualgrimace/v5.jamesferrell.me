<?

// license
c::set('license', 'K2-PERSONAL-5abc44f1b1d651260220152fb51e1284');

// cachebuster (https://github.com/getkirby-plugins/cachebuster-plugin)
c::set('cachebuster', true);

// cache
c::set('cache', true);
c::set('cache.ignore', array(
  'contact',
  'search',
  'sitemap',
  'feed'
));

// .md extension support
c::set('content.file.extension', 'md');

// smart quotes
c::set('smartypants', true);

// thumbnails
c::set('thumbs.driver', 'im');

// languages
c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'default' => true,
    'url'     => '/'
  )
));

// routing
c::set('routes', array(

  // rss » feed
  array(
    'pattern' => 'rss',
    'action'  => function() {
      go('feed');
    }
  ),

  // admin » panel
  array(
    'pattern' => 'admin',
    'action'  => function() {
      go('panel');
    }
  )
));
