<?php

c::set('debug', true);

c::set('footnotes.global', true);
c::set('footnotes.smoothscroll', true);
c::set('footnotes.offset', 0);

c::set('thumb.cache.root', c::get('root') . '/thumbs');
c::set('thumb.cache.url',  c::get('url')  . '/thumbs');
c::set('thumb.quality', 100);
c::set('thumb.upscale', false);
c::set('thumb.datauri', false);

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', '8a02d708fcfa03f3a355a1d97291cae8');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

if($_SERVER['SERVER_NAME'] == 'localhost') {
  // local setup
} elseif($_SERVER['SERVER_NAME'] == 'beautiful-company.com/ah') {
  // test server setup
} elseif($_SERVER['SERVER_NAME'] == 'art-handler.com') {
  // production server setup
}

?>