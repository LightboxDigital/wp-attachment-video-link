[![Build Status](https://travis-ci.org/LightboxDigital/wp-attachment-video-link.svg?branch=master)](https://travis-ci.org/LightboxDigital/wp-attachment-video-link)

# WordPress Attachment Video Link

License: MIT
License URI: https://opensource.org/licenses/MIT

Really simple script to add a video text field to the attachment editor and then provide
a straightforward way of receiving said URL.

Whilst this is developed as a plugin, it can just as easily be used through composer. The dual
development approach meant that ongoing dev was more straight forward in terms of unit tests etc.

## Thanks & Credits

[Tom McFarlin](https://twitter.com/tommcfarlin)
and [Devin Vinson](https://twitter.com/devinvinson) for
their work on [WordPress Plugin Boilerplate Generator](http://wppb.me/).

## Installation

Install to your theme using composer: `composer require lightboxdigital/wp-attachment-video-link`.

Alternatively install as a plugin:
1. Upload `wp-attachment-video-link` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

## Changelog

#### 1.0.1
* Fix where composer wouldn't actually autoload the necessary file

#### 1.0
* Completely refactored on top of WPDB.
* Added unit tests.
* Added PHPCS ruleset.
