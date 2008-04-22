<?php
/*
Plugin Name: grf-Dilbert
Plugin URI: http://www.greftek.net/software/grf-dilbert/
Description: A Dilbert widget implementation for Wordpress.
Version: 1.0.1
Author: GrefTek
Author URI: http://www.greftek.net/blog/

/*  Copyright 2007 GrefTek (email: me@greftek.net)

	About the Wordpress widget implementation:
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

	About the Dilbert widget:
	Dilbert Legal

	Copyright Notice, Reprint Info and Terms of Use
	COMICS.COM
	©1998 United Feature Syndicate, Inc. ("UFS") and United Media ("UM")
	All Rights Reserved

	Terms of Use

	If you are interested in reprint, syndication, or merchandising rights or 
	would like to advertise on United Media's web pages, please read our FAQ.

	PLEASE READ THESE TERMS OF USE CAREFULLY BEFORE USING THIS SITE.
	By using this site, you acknowledge your agreement to be bound by these 
	terms of use. If you do not agree to be bound by these terms of use, please 
	do not use the site.

	1. Ownership and Reproduction of UFS/UM Materials; Not Child-Directed. The 
	contents of this web site (including the property of UFS/UM and other third 
	parties, the "UFS/UM Materials") may not be copied, reproduced, republished,
	uploaded, posted, transmitted, or distributed, in whole or in part, for any 
	purpose other than individual viewing of this web site, without the express 
	prior written consent of UFS/UM or the relevant third party. Modification of 
	the UFS/UM Materials or use of the UFS/UM Materials for any purpose will 
	constitute a violation of the copyrights and other rights of UFS/UM. For 
	purposes of this Agreement, the use of any UFS/UM Materials on any other web 
	site or networked computer environment is prohibited. You are hereby granted 
	a limited, non-transferable, non-exclusive, non-sublicensable license to 
	display the UFS/UM materials for non-commercial purposes only on your own 
	computer, provided that this license is limited to the display of the UFS/UM 
	Materials in their entirety, including but not limited to visual elements 
	such as advertisements that adjoin content. Any attempts to access the 
	UFS/UM Materials in a manner that obscures or blocks such adjoining visual 
	elements is a violation of the license granted hereunder and may be a 
	violation of the Digital Millenium Copyright Act. See Pub. L. No. 105-304, 
	112 Stat. 2860 (1998). The Subscription Services and UFS/UM Materials are 
	not targeted to children under the age of 14.

	2. Linked Sites. UM, whether affiliated or not affiliated with sites linked 
	to or from this site ("Linked Sites"), is not responsible for their 
	content. The Linked Sites, including but not limited to web search-engines 
	provided by Third Parties, are for the convenience of the user only, and 
	may be accessed by the user only at the user's own risk. Transactions with 
	advertisers found on any UM Site are solely between you and such 
	advertisers. UM shall not be responsible for any loss or damage of any sort 
	relating to your dealings with such advertisers.

	3. Ownership of Submissions. All submissions to the Dilbert.com site become 
	the property of United Media and Scott Adams, and they will have the right 
	to use them free of charge, and in any manner and in any medium, forever and 
	throughout the world. This means that your submissions might appear in 
	publications including, but not limited to, a book, newsletter or on a 
	United Media web site. If you do not want your submissions to become the 
	property of United Media and Scott Adams, please do not submit to our sites.

	4. Disclaimer of Warranties. The materials on this site are provided "as is" 
	and without warranties of any kind, whether express or implied. To the 
	fullest extent permitted by applicable law, UFS/UM disclaims all warranties, 
	express or implied, including, but not limited to, implied warranties of 
	merchantability or fitness for a particular purpose. UFS/UM expressly 
	disclaims any warranty that the functions contained in the materials 
	appearing on this site will be uninterrupted or free of errors, that defects 
	will be corrected, or that this site or the server that makes this site 
	available are free of viruses or other harmful elements. UFS/UM makes no 
	warranties or representations, express or implied, regarding the use of the 
	materials appearing or services offered on this site with regard to their 
	correctness, reliability, accuracy, or otherwise. Neither UFS/UM nor its 
	affiliated or related companies or its content providers shall be 
	responsible or liable to any person, firm, or corporation for any loss, 
	damage, injury, claim, or liability of any kind or character based on or 
	resulting from any information contained on this site or services offered 
	through this site.

	5. Content of Submissions. The user shall not submit to this site any 
	materials which (a) libel, defame, invade privacy, or are obscene or 
	pornographic; (b) infringe the intellectual property rights, including 
	copyrights, of any third party; (c) violate any law or regulation; (d) 
	advocate illegal activity; (e) advertise or otherwise solicit funds or are 
	a solicitation for goods or services; or (f) are treated as confidential 
	under any contract or policy. The user agrees to indemnify UFS/UM and its 
	officers, directors, employees, and affiliates from and against any and all 
	third party claims, demands, liabilities, costs, or expenses, including 
	reasonable attorneys' fees, resulting from user's submission of any 
	materials in violation of the foregoing restrictions. You shall not upload 
	or submit any data or information that contains viruses or any other 
	computer code, corrupt files or programs designed to interrupt, destroy or 
	limit the functionality or disrupt any software, hardware, 
	telecommunications, networks, servers or other equipment.

	6. Governing Law; Invalidity of Separable Provisions; Entire Agreement. 
	This Agreement shall be construed and governed in accordance with the laws 
	of the State of New York, U.S.A., regardless of the place or places of its 
	physical execution and performance. Any actions brought by UFS/UM or user 
	based on or arising out of this Agreement shall be brought exclusively in 
	the United States District Court for the Southern District of New York or 
	in a state court located in said district. If any term or provision of this 
	Agreement is for any reason held to be invalid, such invalidity shall not 
	affect any other term or provision, and this Agreement shall be interpreted 
	as if such term or provision had never been contained in this Agreement. 
	This Agreement contains the entire understanding of UFS/UM and user with 
	respect to its subject matter.

	7. Third Party Advertising
	We use MaxOnline and other third-party advertising companies to serve ads 
	when you visit our Web site. These companies may use information (not 
	including your name, address, email address or telephone number) about your 
	visits to this and other Web sites in order to provide advertisements on 
	this site and other sites about goods and services that may be of interest 
	to you. If you would like more information about this practice and to know 
	your choices about not having this information used by these companies, 
	please click here

	http://www.maxonline.com/privacy_policy/index.php

	Third Party Cookies
	In the course of serving advertisements to this site, our third-party 
	advertiser may place or recognize a unique “cookie” on your browser.
*/

function wp_widget_grf_dilbert($args) {
	extract($args);
	$options = get_option('widget_grf_dilbert');
	$title = $options['title'];
	if ( empty($title) )
		$title = 'The Daily Dilbert';
?>
		<?php echo $before_widget; ?>
			<?php $title ? print($before_title . $title . $after_title) : null; ?>
			<object type="application/x-shockwave-flash" data="http://widgets.dilbert.com/o/478bf96b7bf0b5a2/47cc1f642e7591f0/478cddf3fcd52701/f3fb9542" id="W478bf96b7bf0b5a247cc1f642e7591f0" height="300" width="160">
				<param value="http://widgets.dilbert.com/o/478bf96b7bf0b5a2/47cc1f642e7591f0/478cddf3fcd52701/f3fb9542" name="movie"/>
				<param value="transparent" name="wmode"><param value="all" name="allowNetworking"><param value="always" name="allowScriptAccess">
			</object>
		<?php echo $after_widget; ?>
<?php
}

function wp_widget_grf_dilbert_control() {
	$options = $newoptions = get_option('widget_grf_dilbert');
	if ( $_POST["dilbert-submit"] ) {
		$newoptions['title'] = strip_tags(stripslashes($_POST["dilbert-title"]));
	}
	if ( $options != $newoptions ) {
		$options = $newoptions;
		update_option('widget_grf_dilbert', $options);
	}
	$title = attribute_escape($options['title']);
?>
			<p><label for="dilbert-title"><?php _e('Title:'); ?> <input style="width: 200px;" id="dilbert-title" name="dilbert-title" type="text" value="<?php echo $title; ?>" /></label></p>
			<input type="hidden" id="dilbert-submit" name="dilbert-submit" value="1" />
<?php
}

function wp_widget_grf_dilbert_register() {
	$dimension = array('height' => 100, 'width' => 300);
	$class = array('classname' => 'widget_grf_dilbert');
	wp_register_sidebar_widget('dilbert', __('The Daily Dilbert'), 'wp_widget_grf_dilbert', $class);
	wp_register_widget_control('dilbert', __('The Daily Dilbert'), 'wp_widget_grf_dilbert_control', $dimension);
}

add_action('plugins_loaded','wp_widget_grf_dilbert_register');
?>