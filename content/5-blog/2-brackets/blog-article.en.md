Title: Web tool review: Brackets

----

Published: 2015-07-11

----

Description: Brackets is an appealing code editor for those just getting started. But can it handle a modern dev environment?

----

Tags: design,development,brackets,adobe,code,front end,frontend,front-end,dev,tools,alternative,live preview,brackets extract,html,css,webtools

----

topic: software

----

Hashtag: webtools

----

Text:

*This was originally meant to be a series. But at this point I'm probably just going to keep a list of the tools I use on my (link: uses text: uses page).*

***

(link: http://brackets.io text: Brackets) is an open-source code editor made by Adobe specifically for front end developers. I started using it somewhere in 2012. As a front-end rookie with a background in design, it was very appealing.

## Live Preview is awesome

Its biggest selling point is its Live Preview feature, which opens up a new Chrome window and updates the page as you edit css in real time. It also highlights the element that you are currently editing in the browser, which makes it easy to see exactly what you're affecting when writing css. These two features combined felt like magic in 2012.

## Live Preview is not awesome

Unfortunately, Live Preview is a double-edged sword. Brackets uses a separate Chrome browser window for this, which gets confusing. Even worse, opening up dev tools instantly breaks the live preview functionality. Worst of all, Live Preview only works if you're writing static CSS, so CSS preprocessors and postprocessors are out the window. That's a massive deal breaker.

## Extensions are extensive

Brackets is highly customizable, and there are plenty of extensions which improve the experience. (link: https://github.com/MiguelCastillo/Brackets-wsSanitizer text: White Space Sanitizer) is a particularly nice one.

## Brackets Extract is a thing

In a recent update, you can use Brackets Extract to open up a Photoshop document and easily poke around and get properties from individual layers. This seems like it could be useful, but Photoshop is a clunky tool when it comes to design.

## Moving beyond html, css and js

Since Brackets was designed for front-end developers, you won't find any support for PHP.

Lately I've been building as many sites with (link: html://getkirby.com text: Kirby CMS) as possible, which uses PHP. Since Brackets was designed for front-end developers, working with back-end code is a chore. There isn't any syntax highlighting or theme colors for PHP, and trying to open Live Preview with a PHP file causes an error message, even if you're running a local server. Another strike.

## Is it there a place for it today?

While Brackets was my main code editor for a couple of years, it simply doesn't fit into the modern development workflow. And that's a bummer.

You can still use it as a code editor and set up the functionality of Live Preview through other means, but what's the point? When I realized the main selling point of Brackets had become a hinderance, the only logical course of action was to move on.

***

**2017 Update**: I have been informed that (link: https://twitter.com/AhoyLemon/status/905489610347868162 text: brackets has good syntax highlighting for PHP and SCSS files) by someone who still uses Brackets. So that's good.
