<?php
//Theme Information Data
function aletheme_information_page(){ ?>
    <div class="wrap" id="aletheme-edit-slider-page">
        <h2><?php echo _e('Theme Information','aletheme'); ?></h2>
        <div id="optionsframework-metabox" class="metabox-holder">
            <div id="optionsframework" class="postbox">
                <h3><?php _e('General Information','aletheme'); ?></h3>
                <div class="page">
                    <ul>
                        <li><?php _e('WordPress Version','aletheme'); ?>: <b><?php echo get_bloginfo('version'); ?></b></li>
                        <li><?php _e('URL','aletheme'); ?>: <b><a href="<?php echo site_url(); ?>" target="_blank"><?php echo site_url(); ?></a></b></li>
                        <li><?php _e('Theme Version','aletheme'); ?>: <b><?php $ale_theme = wp_get_theme(); echo $ale_theme->get( 'Version' ); ?></b></li>
                        <li><?php _e('PHP Version','aletheme'); ?>: <b><?php echo phpversion(); ?></b></li>
                        <li><?php _e('MySQL server version','aletheme'); ?>: <b><?php echo  mysql_get_server_info(); ?></b></li>
                        <li><?php _e('Theme created date','aletheme'); ?>: <b>27 February, 2013</b></li>
                        <li><?php _e('Theme last update date','aletheme'); ?>: <b>29 October, 2014</b></li>
                        <li><?php _e('Support Forum','aletheme'); ?>: <a href="http://alethemes.com/docs/forums" target="_blank"><b>http://alethemes.com/docs/forums</b></a></li>
                        <li><?php _e('Online Documentation','aletheme'); ?>: <a href="http://alethemes.com/docs" target="_blank"><b>http://alethemes.com/docs</b></a></li>
                    </ul>
                </div>
                <h3><?php _e('Installed Plugins','aletheme'); ?></h3>
                <div class="page">
                    <ul>
                        <?php foreach(get_option( 'active_plugins' ) as $plugin) { echo '<li>'.$plugin.'</li>'; } ?>
                    </ul>
                </div>
                <h3><?php _e('Changelog','aletheme'); ?></h3>
                <div class="page">
                    <b><i>Version 2.6 - 10.11.2014</i></b><br />
                    <p class="greycolor">
                        - Created new template - Contact Style 3<br />
                        - Created new template - Contact Style 4<br />
                        - Created new template - Contact Style 5<br />
                        - Created new template - Contact Style 6<br />
                        - Created new template - New Blog Style 1<br />
                        - Created new template - New Blog Style 2<br />
                        - Created new template - New Blog Style 3<br />
                        - Created new template - New Gallery Style 1<br />
                        - Created new template - New Gallery Style 2<br />
                        - Created new template - New Gallery Style 3<br />
                        - Fixed the style bug on Home 5 (MacBook Pro 13)<br/>
                    </p>
                    <b><i>Version 2.5 - 29.10.2014</i></b><br />
                    <p class="greycolor">
                        - Created new template - About Style 4<br />
                        - Created new template - About Style 5<br />
                        - Created new template - About Style 6<br />
                        - Translated the theme in Polish language<br />
                        - Translated the theme in Portuguese language<br />
                        - Translated the theme in Turkish language<br />
                        - Updated all languages files<br />
                    </p>
                    <b><i>Version 2.4 - 20.10.2014</i></b><br />
                    <p class="greycolor">
                        - Added new sidebar - Home Left Sidebar<br />
                        - Added new widget - Testimonial Slider<br />
                        - Added new widget - Facebook Like Box <br />
                        - Styled Recent Tweets Widget<br />
                        - Integrated the TGM script for required and recommended plugins<br/>
                        - Created new template - New Home Style 1<br />
                        - Created new Template - New Home Style 2<br />
                        - Created new Template - New Home Style 3<br />
                        - Created new Template - New Home Style 4<br />
                        - Created new Template - New Home Style 5<br />
                        - WooCommerce 2.2.6 Ready<br />
                        - Fixed the issue with "Welcome" box<br />
                    </p>
                    <b><i>Version 2.3 - 17.09.2014</i></b><br />
                    <p class="greycolor">
                        - WordPress 4.0 Ready<br >
                        - Fixed the issue with masonry script<br >
                        - Fixed some style issues on shop item page<br >
                        - Updated the Italian .po & .mo lang files<br >
                    </p>
                    <b><i>Version 2.2 - 22.04.2014</i></b><br />
                    <p class="greycolor">
                        - WordPress 3.9 Ready<br />
                        - Fixed the Shortcode tinymce icon issue<br />
                    </p>
                    <b><i>Version 2.1 - 04.03.2014</i></b><br />
                    <p class="greycolor">
                        - WooCommerce 2.1.+ Ready<br>
                        - Fixed the issue with Gallery items titles on Mobile devices<br>
                        - Fixed the issue with top header on inner page for iPad version<br>
                    </p>
                    <b><i>Version 2.0 - 08.02.2014</i></b><br />
                    <p class="greycolor">
                        - WordPress 3.8.1 Ready<br>
                        - Added new section in Admin panel - Online Docs<br>
                        - Fixed the issue with google font external url<br>
                        - Fixed the link issue in the testimonial shortcode<br>
                        - Added option to select the Google Analytics code between Classic and Universal<br>
                        - Fixed the issue with " > " in Custom CSS field in theme options panel<br>
                        - Added option to insert links for About style 3 page Toggle section<br>
                        - Fixed the issue with Hide Blocks from Default Home page to hide bottom boxes<br>
                        - Added option for Gallery slider to support Captions for images in slider<br>
                        - Added option to show the languages switcher in the top and possibility to paste custom code<br>
                    </p>
                    <b><i>Version 1.9 - 05.01.2014</i></b><br />
                    <p class="greycolor">
                        - Created new section in Admin Panel called Theme Information<br>
                        - WordPress 3.8 Support Ready<br>
                        - Fixed the issue with post type icons in Admin Panel (replaced with font as other icons in WP v.3.8)<br>
                        - Fixed the issue with admin logo size on the Login page in WP v.3.8<br>
                        - Fixed youtube video embed (black box) on the video post type page<br>
                        - Updated Custom scroll plugin - jquery.nicescroll.js to v.3.5.4<br>
                        - Added option on About type 1 template to support shortcodes in the second column<br>
                        - Added new fields in Typography Theme Options Section for extended attributes for Google fonts loading<br>
                        - Fixed the typo in Home style 4 in word Welcome<br>
                        - Added wpml-config.xml file for multilingual for better WPML Support<br>
                        - Fixed toggle shortcode issue with height. <br>
                        - Included logo.psd file for easier creating a custom one.<br>
                        - Fixed the horizontal scroll caused by Color Selector box<br>
                        - Added an Upload Link (for images) and text specification in Gallery Box on Admin Panel<br>
                        - Fixed the issue with caption images. Now images with captions are responsive too<br>
                        - Fixed the issue with image resizing in the Home page slider (Nivo Slider).<br>
                        - Added a new field for slider slug in Theme Options. One is for Template Home Default, the second is for Home Template Advanced<br>
                        - Added option for uploading custom preloader animation image in theme options.<br>
                        - Fixed Child Theme support issue with css styles problems <br>
                        - Added RLT Support. Now the theme is fully compatible with Right-to-Left languages.<br>
                        - Updated lang .po files. Added new words from new templates<br>
                    </p>
                    <b><i>Version 1.8 - 19.10.2013</i></b><br />
                    <p class="greycolor">
                        - Fixed child theme support. Added a child theme template.<br>
                        - Fixed bug with activation on PHP 5.4 servers<br>
                        - Fixed bugs with navigation section on PHP 5.4<br>
                        - Optimized source js, css and php files<br>
                        - Fixed bug with single inspiration post when no images in slider.<br>
                        - Fixed inspiration sorting by date and Attributes order. (If no Attributes order (0), is sorting by date)<br>
                        - Fixed press sorting by date and Attributes order. (If no Attributes order(0), is sorting by date)<br>
                        - Fixed video sorting by date and Attributes order. (If no Attributes order(0), is sorting by date)<br>
                        - Fixed gallery sorting by date and Attributes order. (If no Attributes order(0), is sorting by date)<br>
                        - Updated Left Navigation style and fixed some menu bugs<br>
                        - Fixed Responsive Default Home page on MacBook's 13 inch. The iPad Home version shows on screen smaller than 1120px (old value was 1300px).<br>
                        - Fixed bug in windows Safari with sidebars and content area width.<br>
                        - Removed old inactive Twitter Widget<br>
                        - Updated all widgets styles<br>
                        - Added a custom CSS field for each page. (Sometimes when you upload a custom background for page, you may need to add a custom code such as "background-size:cover;")<br>
                        - Updated 404 error page style<br>
                        - Added Right and left sidebar for custom pages as About and Contact.<br>
                        - Added options to enable or dissable sidebars on pages as About and Contact.<br>
                        - Fixed Responsive Columns Shortcode<br>
                        - Updated button shortcode styles<br>
                        - Added Divider shortcode<br>
                        - Added Team shortcode<br>
                        - Added Testimonial shortcode<br>
                        - Added Services shortcode<br>
                        - Added Partners shortcode<br>
                        - Added Google Maps shortcode<br>
                        - Added new page, Blog Full Width Centered<br>
                        - Added 3 new Color Schemes (Green Sea Color, Nephritis Color, Asbestos Color)<br>
                        - Added new page template: About Us three.<br>
                        - Added Left and Right sidebars for Shop page. When WooCommerce is activated, sidabars will appear on your widgets page.<br>
                        - Added a Shop and Woocommerce Support<br>
                        - Added new color selector on demo site<br>
                        - Added new Documentation file<br>
                        - Added new demo xml file to inport demo data<br>
                        - Added sidebars on responsive pages (added sidebas on mobile version)<br>
                        - Other small fixes<br>
                    </p>
                    <b><i>Version 1.7 - 01.06.2013</i></b><br />
                    <p class="greycolor">
                        - Fixed bug with gallery category pagination.<br>
                        - Fixed bug with two column on press page.<br>
                        - Fixed bug with drop down menu on ipad vertion.<br>
                        - Fixed bug with resize of featured image on sigle post on window resize.<br>
                        - Fixed bug with nicescroll on windows 8 mobile devices.<br>
                        - Added an option to enable or disable custom scrollbar from theme options.<br>
                        - Fixed bug on Home style 3 blogpost columns<br>
                    </p>
                    <b><i>Version 1.6 - 16.04.2013</i></b><br />
                    <p class="greycolor">
                        - Upgraded custom background from Theme Options.<br>
                        - Upgraded fonts select option in Theme Options.<br>
                        - Added option to change body font, style, color and size.<br>
                        - Added option to change H1-H6 font, style, color and size.<br>
                        - Updated Theme Option page style.<br>
                        - Optimized code. Load Facebook api only on pages where it used.<br>
                        - Fixed the search button style in sidebar.<br>
                        - Fixed bug on Gallery Categories with masonry boxes.<br>
                        - Fixed bug with scroll on About page after opening the video box.<br>
                        - Added option to enable left or right sidebars on Custom pages.<br>
                        - Added option to show full width or static slider on Home Page style one.<br>
                        - Fixed Order by attribute on Gallery,Press,Inspirations,Video and Testimonials archive page.<br>
                        - Fixed issue with big vertical images in gallery slider.<br>
                        - Fixed some widget styles<br>
                        - Translated in Spain<br>
                        - Translated in German<br>
                        - Translated in Italian<br>
                        - Translated in French<br>
                        - Created video tutorial, the link is in the description.<br>
                    </p>
                    <b><i>Version 1.5 - 28.03.2013</i></b><br />
                    <p class="greycolor">
                        - Fixed .Po file and added new words that can be translated.<br>
                        - Added new social icons an Follow Box - Flickr, Dribble, Instagram, Linked in, Picassa.<br>
                        - Added an option to show or hide Social icons profiles.<br>
                        - Added an option to support html on About box Home Page.<br>
                        - Added an option to support html on copyrights.<br>
                        - Added an option to hide Top Box with Categories and search on Blog pages.<br>
                        - Added an option to hide Top Box with Categories on Gallery pages.<br>
                        - Fixed checkbox, radio and input styles bugs.<br>
                        - Added an option to replace Three bottom boxes on Home Style one to Page content.<br>
                        - Added an option to show "open" or "close" video toggle on About page style one.<br>
                        - Added an option to change the site font. Available all Google Fonts.<br>
                        - Fixed list styles on About page<br>
                        - Added option to show Gallery, Blog posts, Page Content on Home Style One.<br>
                        - Translated the Theme in Russian Language.<br>
                        - Translated the theme in Romania Language.<br>
                    </p>
                    <b><i>Version 1.4 - 18.03.2013</i></b><br />
                    <p class="greycolor">
                        - Created new page Contact Style 2<br>
                        - Created new page About Style 2<br>
                        - Added an option to show or gallery posts or blog post or textarea content on Home Page Style Two<br>
                        - Added an option to show on category posts on Home PAge Style Two<br>
                        - Added an option to insert how many posts to show on Home Page Style Two<br>
                        - Fixed Styles on iPad and iPhone<br>
                        - Added an option to enable or disable slider on bout Style One page<br>
                        - Added an option to select category when you create a custom blog page archive.<br>
                        - Added an option to select category when you create a custom gallery archive page.<br>
                        - Fixed bug with Slider shortcode and updated slider styles.<br>
                        - Fixed the bug with Password protected Gallery when slider was shown.<br>
                        - Created a color selector to preview all color schemes.<br>
                        - Updated Documentation.<br>
                        - Added new color scheme, Purple.<br>
                        - Added an option to upload custom background on each page separatly.<br>
                    </p>
                    <b><i>Version 1.3 - 12.03.2013</i></b><br />
                    <p class="greycolor">
                        - Added Column Shortcode<br>
                        - Added Button Shortcode<br>
                        - Added Alert Shortcode<br>
                        - Aded Tabs Shortcode<br>
                        - Added Toggle Shortcode<br>
                        - Fixed bug with home page<br>
                        - Fixed bug with All link in single gallery page<br>
                        - Fixed Home Slider, if no title or description, the white space doesn't appear.<br>
                        - Fixed bug with slider on Home page. If you deleted the default Sneak Peek and create other, you can change the option and put the new slug to get the new slider.<br>
                        - Fixed bug with sidebar on pages gallery with filter and gallery with pagination<br>
                        - Created full width Blog page<br>
                        - Created 2 columns Blog page with standard thumbnails<br>
                        - Created 2 columns Blog page with masonry thumbnails<br>
                        - Created 3 columns Blog page with standard thumbnails<br>
                        - Created 3 columns Blog page with masonry thumbnails<br>
                        - Changed gallery single page carousel position<br>
                        - Changed Twitter widget design (new design)<br>
                        - Changed Tags widget design (new design)<br>
                        - Updated Flikr widget. (Fixed the design)<br>
                        - Updated Recent Posts widget (Fixed the design)<br>
                        - Updated standard Archive Widget<br>
                        - Created new Home page style<br>
                        - Updated page 404 error<br>
                    </p>
                    <b><i>Version 1.2 - 07.03.2013</i></b><br />
                    <p class="greycolor">
                        - Optimized JavaScripts and loads only necessary files on specific pages.<br>
                        - Fixed bug to show video, gallery, images preview on category, author, search and archive pages.<br>
                        - Fixed bug with right sidebar on search, category, author and archive pages.<br>
                        - Created new page Gallery with filter 2 Columns, standard thumbnails.<br>
                        - Created new page Gallery with filter 3 Columns, standard thumbnails.<br>
                        - Created new page Gallery with filter 4 Columns, standard thumbnails.<br>
                        - Created new page Gallery with filter 2 Columns, masonry thumbnails.<br>
                        - Created new page Gallery with filter 3 Columns, masonry thumbnails.<br>
                        - Created new page Gallery with filter 4 Columns, masonry thumbnails.<br>
                        - Created new page Gallery with pagination 2 Columns, standard thumbnails.<br>
                        - Created new page Gallery with pagination 3 Columns, standard thumbnails.<br>
                        - Created new page Gallery with pagination 4 Columns, standard thumbnails.<br>
                        - Created new page Gallery with pagination 2 Columns, masonry thumbnails.<br>
                        - Created new page Gallery with pagination 3 Columns, masonry thumbnails.<br>
                        - Created new page Gallery with pagination 4 Columns, masonry thumbnails.<br>
                        - Single Gallery Page: added automatic slide show and added a loop to slider.<br>
                        - Update some elements design in the single gallery page.<br>
                        - Added a theme option to put custom css.<br>
                        - Added an option to uload custom favicon icon.<br>
                        - Added an option to upload custom background.<br>
                    </p>
                    <b><i>Version 1.1.2 - 05.03.2013</i></b><br />
                    <p class="greycolor">
                        - Fixed bug with Right Sidebar on Blog page<br>
                        - Added an option to show or hide Featured Image on Single pages<br>
                        - Added an option to show on home page three recent posts<br>
                    </p>
                    <b><i>Version 1.1.1 - 05.03.2013</i></b><br />
                    <p class="greycolor">
                        - Fixed CSS Styles
                    </p>
                    <b><i>Version 1.1 - 05.03.2013</i></b><br />
                    <p class="greycolor">
                        - Added an option that help you to enable or disable the Right Menu box on Home Page.<br>
                        - Added an option to hide or show the RSS icon on site.<br>
                        - Added Pinterest to social buttons<br>
                        - Added Youtube to social buttons<br>
                        - Changed social buttons position. Added scroll.<br>
                        - Added an option to enable or disable site preLoader.<br>
                        - Updated Theme Options page visual usability.<br>
                        - Press Post type pages now support comments. You can enable or disable comments on Press page in Theme Options.<br>
                        - Gallery Post type page now support comments. You can enable or disable comments on Gallery page in Theme Options.<br>
                        - Video Post type page now support comments. You can enable or disable comments on Video page in Theme Options.<br>
                        - Added "Go Back" button on single blog,press,inspiration,video,gallery pages.<br>
                        - Upgraded the design of inspiration single page.<br>
                        - You can choose different comments style to different Post Types page, for example on Press page you can enable FaceBook Comments, on Video page you can enable Socha Comments e.t.c.<br>
                        - Fixed the speed on "TOP" button<br>
                        - Upgraded the Inspiration blog post type.<br>
                        - Add option to hide bottom boxes on home page, to show custom 3 boxes or to show 3 blog posts by default, recent, most commented and most voted.<br>
                        - Fixed the home page logo position on small devices.<br>
                        - Add Title, Link, Description and Html to Home Page Slider.<br>
                        - Added new Post formats: Vide, Image, Quote and upgraded old formats Gallery and Standart.<br>
                        - Upgraded blog style and made all post formats by own style.<br>
                        - Updated single posts pages for each post format.<br>
                        - Fixed bug in post gallery by resizing small images. Now images are in original size.<br>
                        - Created Sidebars to each Post Type section.<br>
                        - Add option to show show or hide sidebar on different post types pages.<br>
                        - Created Right Sidebar and option to hide or show on different Post Types.<br>
                        - Upgraded Testimonial post type page<br>
                        - Upgraded Press post type page<br>
                        - Upgraded Widget Last Twittes<br>
                        - Upgraded Widget Tags<br>
                        - Upgraded Widget Search<br>
                    </p>
                    <b><i>Version 1.0 - 27.02.2013</i></b><br />
                    <p class="greycolor">
                        - Initial Release
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php }