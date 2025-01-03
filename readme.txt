=== Surbma | Font Awesome ===
Contributors: Surbma, CherryPickStudios
Donate link: https://surbma.com/donate/
Tags: font awesome, fontawesome, icon font, icons
Requires at least: 5.1
Tested up to: 6.7
Stable tag: 3.1
Requires PHP: 7.4
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Font Awesome - The iconic font and CSS toolkit

== Description ==

With this plugin you can use the iconic font and CSS toolkit, the Font Awesome icons. It is loading the css and the font files from the MaxCDN network, which means super fast loading, wherever your visitors are on this planet.

You get also a very useful shortcode to use icons on your site:
`[fa class="fa-camera-retro"]`

As you can see, you only need to add the icon name, that's it. Isn't it awesome? If you use the `<i class="fa fa-camera-retro"></i>` code, the WordPress editor will remove it, because it is an empty code, which "should be removed". So with this shortcode, you can use the Font Awesome icons wherever you want.

Font Awesome official site and all the icons: <a href="http://fortawesome.github.io/Font-Awesome/" target="_blank">Font Awesome website »</a>

== Installation ==

1. Upload `surbma-font-awesome` folder to the `/wp-content/plugins/` directory
2. Activate the Surbma | Font Awesome plugin through the 'Plugins' menu in WordPress
3. That's it. :)

== Frequently Asked Questions ==

= Where can I find all the icons? =

Here you can see them: <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">The complete set of icons in Font Awesome »</a>

= What does Surbma mean? =

It is the reverse version of my last name. ;)

== Changelog ==

= 3.1 =

Release date: 2024-12-30

NEW

- Font Awesome files are loaded from local source, instead of CDNJS.

ENHANCEMENTS

- Code optimizations.

FIXES

- Security fixes: shortcode output has escaping now. The Cross-Site Scripting vulnerability was reported by Patchstack.

= 3.0 =

Release date: 2020-02-10

- TWEAK - Tested with WordPress 5.3 version.
- TWEAK - Updated to use a new way to deploy it to wp.org repo.

= 2.6.0 =

- Tested up to WordPress 4.8 version.
- Updated to Font Awesome 4.7.0 version.

= 2.5.0 =

- Tested up to WordPress 4.5 version.
- Updated to Font Awesome 4.6.3 version.

= 2.4.0 =

- Tested up to WordPress 4.3 version.
- Updated to Font Awesome 4.4.0 version.

= 2.3.1 =

- Fix localization.
- Prevent direct access to the plugin.

= 2.3.0 =

- Added capability for Multisite users to use the html code in menu items.

= 2.2.0 =

- Updated to Font Awesome 4.3.
- Dequeue Font Awesome file if it has already enqueued by another plugin or theme.

= 2.1.1 =

- Fixed stable tag.

= 2.1.0 =

- Added hungarian translation.

= 2.0.0 =

- First commit to the official WordPress repo.
