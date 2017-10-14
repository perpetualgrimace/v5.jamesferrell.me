<?

// convert footerLinks list in site.md to yaml list
$footerLinks = $site->footerLinks()->yaml();

// create new pages item
$items = new Pages();
  // get all the visible pages
  $items->add($pages->visible());

  // add additional links to the collection
  foreach ($footerLinks as $footerLink) {
    $items->add($pages->find($footerLink));
  }

?>

<footer class="footer dark-theme" role="contentinfo">
  <div class="g-container">

    <!-- navigation -->
    <div class="footer-nav g-columns milli">
      <ul class="footer-nav-list g-col">
        <? foreach($items as $item): ?>

          <li class="footer-nav-item">
            <a class="footer-link footer-nav-link<? e($item->isOpen(), ' is-active-pg') ?>" <? e( ($item->slug() == $page->slug()), 'aria-describedby="current"' ) ?> href="<? e( $item->isOpen() && ( $page->slug() == $item->slug() ), '#main', $item->url() ) ?>">
            <? if($item->isHomePage()) { echo 'Home'; } else { echo $item->title(); }
               if($item->uri() == 'about'): ?> <span class="u-screenreader"> <?= $site->title() ?></span>
            <? endif; ?>
            </a>
          </li>

          <? endforeach ?>
      </ul>
    </div>

  </div>
</footer>
