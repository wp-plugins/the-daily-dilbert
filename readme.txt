=== The Daily Dilbert ===
Contributors: greftek
Donate link: http://www.greftek.net/blog/donate/
Tags: funny, comic, widget, sidebar
Requires at least: 2.1.0
Tested up to: 2.7.3
Stable tag: 1.0.2

A wordpress implementation of the Daily Dilbert widget as published by United Feature Syndicate, Inc. (http://widget.dilbert.com/)

== Description ==

This plug-in adds a Daily Dilbert Comic widget to the Sidebar Arrangement page, which can be added in the normal fashion. Just drag-n-drop the widget into the sidebar to add it to your blog. 

Click on the options button to add a custom title. 

== Installation ==

In order to get this puppy to work follow the steps described here:

1. Uncompress the downloaded archive in [WordPress install root]/wp-content/plugins.
2. Activate the plugin in your WordPress plugins control panel. The plugin should show up as 'grf-Dilbert' in the list of inactive plugins. Just click the 'Activate'-link on the right.
3. Go to the "Appearance" section, and select the "Widgets"-subsection.
4. Add the "The Daily Dilbert"-widget to the sidebar. Do this by clicking on 'Add'-link behind the item named 'The Daily Dilbert'.
5. Position the widget within the sidebar. You can simply do this by dragging the 'The Daily Dilbert'-entry on the right side of the panel and and dropping it between the other widgets where you want to have it positioned.
5. If desired, enter a custom widget title by selecting the "Configure"-button and changing the title.
6. Click on the "Save Changes"-button on the page. 
7. Edit your styles.css of your active template to tweak the presentation.

== Frequently Asked Questions ==

= Did you make the flash-thing? =

No, the flash object was made available by United Feature Syndicate. I just made the Wordpress implementation. Silly UFS forgot all about Wordpress. 

The flash object can be found on http://widget.dilbert.com/

The flash object comes with its own [Terms of Use](http://dilbert.com/comics/dilbert/info/terms_of_use.html). 
The license of UFS is included in the plug-in source.

= How do I modify the style of the widget in the sidebar? =

Like any widget in your sidebar you can modify presentation by using the ID "dilbert". Modify the style.css in your active template:

> li#dilbert { /* your css directives here, eg: "text-align: center;" */ }

= How come in step 2 'grf-dilbert' is already in the activated plugins? =

Because you were doing an upgrade and forgot to disable the plugin before you did so, you naughty boy/girl.

= This plugin is cool, can you make something similar for ...? =

If you have requests feel free to mail them to me (contact me through my blog: http://www.greftek.net/blog). 

Please do take into account that a comic needs to have some sort of feed in order to make such a plugin. It can be done without a feed (with scraping), but such a technique is high maintenance and prone to breaking. Aside from that not every artist appreciates such methods, so I don't make them. 

== Screenshots ==

There are none

== Change Log ==

1.0 
- Initial release

1.0.1 
- Tested and tweaked for Wordpress 2.5

1.0.2 
- Tested for Wordpress 2.7.x and adjusted installation instructions for new admin interface (thank you for pointing this out ;))