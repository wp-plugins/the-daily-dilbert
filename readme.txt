=== The Daily Dilbert ===
Contributors: greftek
Donate link: http://www.greftek.net/blog/donate/
Tags: funny, comic, widget, sidebar
Requires at least: 2.1.0
Tested up to: 2.3.3
Stable tag: 1.0

A wordpress implementation of the Daily Dilbert widget as published by United Feature Syndicate, Inc. (http://widget.dilbert.com/)

== Description ==

This plug-in adds a Daily Dilbert Comic widget to the Sidebar Arrangement page, which can be added in the normal fashion. Just drag-n-drop the widget into the sidebar to add it to your blog. 

Click on the options button to add a custom title. 

== Installation ==

In order to get this puppy to work follow the steps described here:

1. Uncompress the downloaded archive in [WordPress install root]/wp-content/plugins.
2. Activate the plugin in your WordPress plugins control panel.
3. Go to the "Presentation" section, and choose "Widgets".
4. Drag and drop the "The Daily Dilbert"-widget into the desired position in your sidebar.
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

== Screenshots ==

There are none