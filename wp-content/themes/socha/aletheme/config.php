<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function aletheme_get_options() {
	$comments_style = array(
		'wp'  => 'Socha Comments',
		'fb'  => 'Facebook Comments',
		'dq'  => 'DISQUS',
		'lf'  => 'Livefyre',
        'ws'  => 'WordPress Default',
		'off' => 'Disable All Comments',
	);

    $background_defaults = array(
        'color' => '',
        'image' => get_template_directory_uri().'/css/images/patterns/bg.jpg',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );

    $analytics = array(
        'classic'  => 'Classic Analytics',
        'universal'  => 'Universal Analytics',
    );

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $color_style = array(
        'orange' => 'Orange Color',
        'green' => 'Green Color',
        'black' => 'Black Color',
        'red' => 'Red Color',
        'blue' => 'Blue Color',
        'purple' => 'Purple Color',
        'sea' => 'Green Sea Color',
        'nephritis' => 'Nephritis Color',
        'asbestos' => 'Asbestos Color'
    );

    $home_bottom = array(
        'blogposts' => 'Blog Posts',
        'recentposts' => '3 Recent Blog Posts',
        'customboxes' => 'Custom Boxes',
        'customcontent' => 'Page Content',
        'hideboxes' => 'Hide Blocks (About left box too)'
    );

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();
		
	$options[] = array("name" => "Theme",
						"type" => "heading");

    $options[] = array( "name" => "Site Logo",
                        "desc" => "Upload or put the site logo link (Default logo size: 158-101px)",
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Color Style",
                        "desc" => "Select color:",
                        "id" => "ale_site_color",
                        "std" => "orange",
                        "type" => "select",
                        "options" => $color_style);

    $options[] = array( 'name' => "Manage Background",
                        'desc' => "Select the background color, or upload a custom background image. For example you can take backgrounds here - <a href=\"http://subtlepatterns.com/\">http://subtlepatterns.com/</a>.",
                        'id' => 'ale_background',
                        'std' => $background_defaults,
                        'type' => 'background');

    $options[] = array( "name" => "Uplaod a favicon icon",
                        "desc" => "Upload or put the link of your favicon icon",
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Uplaod a custom animation image",
                        "desc" => "Upload or put the link of your custom animation gif image.",
                        "id" => "ale_cusanimimg",
                        "std" => "",
                        "type" => "upload");

	$options[] = array( "name" => "Comments Style",
						"desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
						"id" => "ale_comments_style",
						"std" => "wp",
						"type" => "select",
						"options" => $comments_style);

	$options[] = array( "name" => "AJAX Comments",
						"desc" => "Use AJAX on comments posting (works only with Socha Comments selected).",
						"id" => "ale_ajax_comments",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Social Sharing",
						"desc" => "Enable social sharing for posts.",
						"id" => "ale_social_sharing",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Copyrights",
						"desc" => "Your copyright message.",
						"id" => "ale_copyrights",
						"std" => "",
						"type" => "editor");

    $options[] = array( "name" => "Custom Languages Switcher",
                        "desc" => "Hide or Show the Language Switcher in the Top of the Site. Put your switcher code in the file - /partials/switcher.php",
                        "id" => "ale_switcher",
                        "std" => "0",
                        "type" => "checkbox");



    $options[] = array( "name" => "Typography",
                        "type" => "heading");

    $options[] = array( "name" => "Select the Heading Font from Google Library",
                        "desc" => "The default Font is - Oswald",
                        "id" => "ale_headerfont",
                        "std" => "Oswald",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Insert the Heading Extended Font attributes",
                        "desc" => "The default - 700,400,300",
                        "id" => "ale_headerfontex",
                        "std" => "700,400,300",
                        "type" => "text");

    $options[] = array( "name" => "Select the Body Font from Google Library",
                        "desc" => "The default Font is - Arial",
                        "id" => "ale_bodyfont",
                        "std" => "Arial",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Insert the Body Extended Font attributes",
                        "desc" => "The default - empty",
                        "id" => "ale_bodyfontex",
                        "std" => "",
                        "type" => "text");

    $options[] = array( 'name' => "H1 Style",
                        'desc' => "Change the h1 style",
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '18px','face' => 'Oswald','style' => 'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H2 Style",
                        'desc' => "Change the h2 style",
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '16px','face' => 'Oswald','style' => 'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H3 Style",
                        'desc' => "Change the h3 style",
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '14px','face' => 'Oswald','style' => 'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H4 Style",
                        'desc' => "Change the h4 style",
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '13px','face' => 'Oswald','style' => 'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H5 Style",
                        'desc' => "Change the h5 style",
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '12px','face' => 'Oswald','style' => 'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H6 Style",
                        'desc' => "Change the h6 style",
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '11px','face' => 'Oswald','style' => 'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => "Body Style",
                        'desc' => "Change the body font style",
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '12px','face' => 'Arial','style' => 'normal','color' => '#707070'),
                        'type' => 'typography');

    $options[] = array( "name" => "Home",
                        "type" => "heading");

    $options[] = array( "name" => "Home Page Right Menu",
                        "desc" => "Enable right box menu on Home Page",
                        "id" => "ale_righthomemenu",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Right menu Image #1",
                        "desc" => "Upload or insert image URL (first item) - size: 225px-92px.",
                        "id" => "ale_right_first_image",
                        "class" => "hidden",
                        "type" => "upload");

    $options[] = array( "name" => "Right menu Title #1",
                        "desc" => "Insert the title (first item)",
                        "id" => "ale_right_first_title",
                        "class" => "hidden",
                        "type" => "text");

    $options[] = array( "name" => "Right menu Description #1",
                        "desc" => "Insert the description (first item)",
                        "id" => "ale_right_first_desc",
                        "class" => "hidden",
                        "type" => "text");

    $options[] = array( "name" => "Right menu Link #1",
                        "desc" => "Insert the link (first item)",
                        "id" => "ale_right_first_link",
                        "class" => "hidden",
                        "type" => "text");

    $options[] = array( "name" => "Right menu Image #2",
                        "desc" => "Upload or insert image URL (second item) - size: 225px-92px.",
                        "id" => "ale_right_second_image",
                        "class" => "hidden",
                        "type" => "upload");

    $options[] = array( "name" => "Right menu Title #2",
                        "desc" => "Insert the title (second item)",
                        "id" => "ale_right_second_title",
                        "class" => "hidden",
                        "type" => "text");

    $options[] = array( "name" => "Right menu Description #2",
                        "desc" => "Insert the description (second item)",
                        "id" => "ale_right_second_desc",
                        "class" => "hidden",
                        "type" => "text");

    $options[] = array( "name" => "Right menu Link #2",
                        "desc" => "Insert the link (second item)",
                        "id" => "ale_right_second_link",
                        "class" => "hidden",
                        "type" => "text");

    $options[] = array( "name" => "Right menu Image #3",
                        "desc" => "Upload or insert image URL (third item) - size: 225px-92px.",
                        "id" => "ale_right_third_image",
                        "class" => "hidden",
                        "type" => "upload");

    $options[] = array( "name" => "Right menu Title #3",
                        "desc" => "Insert the title (third item)",
                        "id" => "ale_right_third_title",
                        "class" => "hidden",
                        "type" => "text");

    $options[] = array( "name" => "Right menu Description #3",
                        "desc" => "Insert the description (third item)",
                        "id" => "ale_right_third_desc",
                        "class" => "hidden",
                        "type" => "text");

    $options[] = array( "name" => "Right menu Link #3",
                        "desc" => "Insert the link (third item)",
                        "id" => "ale_right_third_link",
                        "class" => "hidden",
                        "type" => "text");

    $options[] = array( "name" => "About title (box on main page)",
                        "desc" => "Insert the title",
                        "id" => "ale_mainpageabouttitle",
                        "type" => "text");

    $options[] = array( "name" => "About text (box on main page)",
                        "desc" => "Insert the text",
                        "id" => "ale_mainpageabouttext",
                        "type" => "editor");

	$options[] = array( "name" => "Social",
						"type" => "heading");

    $options[] = array( "name" => "Show Social Profiles",
                        "desc" => "Check if you want to show the social icons profiles on your site",
                        "id" => "ale_showsocialicon",
                        "std" => "1",
                        "type" => "checkbox");
	
	$options[] = array( "name" => "Facebook",
						"desc" => "Your facebook profile URL.",
						"id" => "ale_fb",
						"std" => "",
						"type" => "text");
    $options[] = array( "name" => "Twitter",
                        "desc" => "Your twitter username.",
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Google+",
                        "desc" => "Your google+ profile URL.",
                        "id" => "ale_gog",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Pinterest",
                        "desc" => "Your pinterest profile URL.",
                        "id" => "ale_pint",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "You Tube",
                        "desc" => "Your youtube profile URL.",
                        "id" => "ale_youtube",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Vimeo",
                        "desc" => "Your vimeo profile URL.",
                        "id" => "ale_vim",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Flickr",
                        "desc" => "Your flickr profile URL.",
                        "id" => "ale_flickr",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Dribble",
                        "desc" => "Your dribble profile URL.",
                        "id" => "ale_dri",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Instagram",
                        "desc" => "Your instagram profile URL.",
                        "id" => "ale_inta",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Linked in",
                        "desc" => "Your linked in profile URL.",
                        "id" => "ale_liin",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Picassa",
                        "desc" => "Your picassa profile URL.",
                        "id" => "ale_pica",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Show RSS",
                        "desc" => "Check if you want to show the RSS icon on your site",
                        "id" => "ale_rssicon",
                        "std" => "1",
                        "type" => "checkbox");

	
	$options[] = array( "name" => "Facebook Application ID",
						"desc" => "If you have Application ID you can connect the blog to your Facebook Profile and monitor statistics there.",
						"id" => "ale_fb_id",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Enable Open Graph",
						"desc" => "The <a href=\"http://www.ogp.me/\">Open Graph</a> protocol enables any web page to become a rich object in a social graph.",
						"id" => "ale_og_enabled",
						"std" => "",
						"type" => "checkbox");


	
	$options[] = array( "name" => "Advanced Settings",
						"type" => "heading");

    $options[] = array( "name" => "Show Top Box (Category and Search) on Blog pages",
                        "desc" => "Check if you want to show the top box.",
                        "id" => "ale_topblogbox",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Top Box (Category) on Gallery pages",
                        "desc" => "Check if you want to show the top box.",
                        "id" => "ale_topgallerybox",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Google Analytics Type",
                        "desc" => "Select the google analytics code type. Universal or Classic (The difference between versions you will find in google)",
                        "id" => "ale_analyticstype",
                        "std" => "classic",
                        "type" => "select",
                        "options" => $analytics);
	
	$options[] = array( "name" => "Google Analytics",
						"desc" => "Please insert your Google Analytics code here. Example: <strong>UA-22231623-1</strong>",
						"id" => "ale_ga",
						"std" => "",
						"type" => "text");

    $options[] = array( "name" => "Home page Slider slug (for Default template)",
                        "desc" => "If you delete the default slider Sneak Peek, and create other, insert here the new slug. The slug you can get in \"Edit Slider\"",
                        "id" => "ale_sliderslug",
                        "std" => "sneak-peek",
                        "type" => "text");

    $options[] = array( "name" => "Home page Slider slug (for Advanced template)",
                        "desc" => "Insert here the new slug. The slug you can get in \"Edit Slider\"",
                        "id" => "ale_sliderslug2",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Shop Slider slug",
                        "desc" => "Insert here the new slug. The slug you can get in \"Edit Slider\"",
                        "id" => "ale_shopslider",
                        "std" => "",
                        "type" => "text");
	
	$options[] = array( "name" => "Footer Code",
						"desc" => "If you have anything else to add in the footer - please add it here.",
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => "Custom CSS Styles",
                        "desc" => "You can add here your styles. ex. .boxclass { padding:10px; }",
                        "id" => "ale_customcsscode",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Site PreLoader",
                        "desc" => "Check if you want to enable the site preloader. (We recommend to enable this option. All scripts will be loaded, and only after this, the site will appear and all options would working well.)",
                        "id" => "ale_preloader",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Comments form on Press Blog",
                        "desc" => "Check if you want to show the comments form on Press Blog pages.",
                        "id" => "ale_commentonpress",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Comments Style on Press page",
                        "desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
                        "id" => "ale_presscomments_style",
                        "std" => "wp",
                        "class" => "hidden",
                        "type" => "select",
                        "options" => $comments_style);

    $options[] = array( "name" => "Comments form on Gallery Blog",
                        "desc" => "Check if you want to show the comments form on Gallery Blog pages.",
                        "id" => "ale_commentongallery",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Comments Style on Gallery page",
                        "desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
                        "id" => "ale_gallerycomments_style",
                        "std" => "wp",
                        "class" => "hidden",
                        "type" => "select",
                        "options" => $comments_style);

    $options[] = array( "name" => "Comments form on Video Blog",
                        "desc" => "Check if you want to show the comments form on Video Blog pages.",
                        "id" => "ale_commentonvideo",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Comments Style on Video Blog",
                        "desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
                        "id" => "ale_videocomments_style",
                        "std" => "wp",
                        "class" => "hidden",
                        "type" => "select",
                        "options" => $comments_style);

    $options[] = array( "name" => "Comments form on Inspiration Blog",
                        "desc" => "Check if you want to show the comments form on Inspiration Blog pages.",
                        "id" => "ale_commentoninspiration",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Comments Style on Inspiration page",
                        "desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
                        "id" => "ale_inspirationcomments_style",
                        "std" => "wp",
                        "class" => "hidden",
                        "type" => "select",
                        "options" => $comments_style);

    $options[] = array( "name" => "Choose Home Page Bottom",
                        "desc" => "If you want to show 3 posts from blog (RECENT WORK, LET'S DISCUSS, MOST VOTED POST) choose the option Blog Posts, else if you want to make three custom boxes, choose the option Custom Boxes.",
                        "id" => "ale_homepagebottom",
                        "std" => "blogposts",
                        "type" => "select",
                        "options" => $home_bottom);

    $options[] = array( "name" => "First Block Title",
                        "desc" => "The block title. ex. Recent Post",
                        "id" => "ale_firstbottomblocktitle",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Second Block Title",
                        "desc" => "The block title. ex. Let's Discuss",
                        "id" => "ale_secondbottomblocktitle",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Third Block Title",
                        "desc" => "The block title. ex. Most Voted",
                        "id" => "ale_thirdbottomblocktitle",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "First Item Title",
                        "desc" => "The item title.",
                        "id" => "ale_firstbottomitemtitle",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Second Item Title",
                        "desc" => "The item title.",
                        "id" => "ale_secondbottomitemtitle",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Third Item Title",
                        "desc" => "The item title.",
                        "id" => "ale_thirdbottomitemtitle",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "First Item Image",
                        "desc" => "Upload or insert the link (Size 320-220px)",
                        "id" => "ale_firstbottomitemimage",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Second Item Image",
                        "desc" => "Upload or insert the link (Size 320-220px)",
                        "id" => "ale_secondbottomitemimage",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Third Item image",
                        "desc" => "Upload or insert the link (Size 320-220px)",
                        "id" => "ale_thirdbottomitemimage",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "First Item Link",
                        "desc" => "Insert the link",
                        "id" => "ale_firstbottomitemlink",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Second Item Link",
                        "desc" => "Insert the link",
                        "id" => "ale_secondbottomitemlink",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Third Item Link",
                        "desc" => "Insert the link",
                        "id" => "ale_thirdbottomitemlink",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "First Item Category",
                        "desc" => "Insert the category",
                        "id" => "ale_firstbottomitemcategory",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Second Item Category",
                        "desc" => "Insert the category",
                        "id" => "ale_secondbottomitemcategory",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Third Item Category",
                        "desc" => "Insert the category",
                        "id" => "ale_thirdbottomitemcategory",
                        "class" => "hidden",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Show Color Select Preview",
                        "desc" => "Check if you want to show the color select preview",
                        "id" => "ale_siteselectcolorpreview",
                        "type" => "checkbox");

    $options[] = array( "name" => "Enable or Disable custom scrollbarr",
                        "desc" => "Check if you want to show the custom scrollbar",
                        "id" => "ale_sitecustomscrollbar",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Sidebars",
                        "type" => "heading");

    $options[] = array( "name" => "Show Left Sidebar on Blog Pages",
                        "desc" => "Check if you want to show the Left Sidebar on the Blog pages.",
                        "id" => "ale_leftsidebarblog",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Left Sidebar on Custom Pages",
                        "desc" => "Check if you want to show the Left Sidebar on Custom pages.",
                        "id" => "ale_leftsidebarcustom",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Left Sidebar on Gallery Pages",
                        "desc" => "Check if you want to show the Left Sidebar on the Gallery pages.",
                        "id" => "ale_leftsidebargallery",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Left Sidebar on Video Pages",
                        "desc" => "Check if you want to show the Left Sidebar on the Video pages.",
                        "id" => "ale_leftsidebarvideo",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Left Sidebar on Press Pages",
                        "desc" => "Check if you want to show the Left Sidebar on the Press pages.",
                        "id" => "ale_leftsidebarpress",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Left Sidebar on Inspiration Pages",
                        "desc" => "Check if you want to show the Left Sidebar on the Inspiration pages.",
                        "id" => "ale_leftsidebarinspiration",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Left Sidebar on Testimonial Pages",
                        "desc" => "Check if you want to show the Left Sidebar on the Testimonial pages.",
                        "id" => "ale_leftsidebartestimonial",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Left Sidebar on Shop Pages",
                        "desc" => "Check if you want to show the Left Sidebar on the Shop pages.",
                        "id" => "ale_leftsidebarshop",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Right Sidebar on Blog Pages",
                        "desc" => "Check if you want to show the Right Sidebar on the blog pages.",
                        "id" => "ale_rightsidebarblog",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Right Sidebar on Custom Pages",
                        "desc" => "Check if you want to show the Right Sidebar on Custom pages.",
                        "id" => "ale_rightsidebarcustom",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Right Sidebar on Gallery Pages",
                        "desc" => "Check if you want to show the Right Sidebar on the gallery pages.",
                        "id" => "ale_rightsidebargallery",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Right Sidebar on Video Pages",
                        "desc" => "Check if you want to show the Right Sidebar on the video pages.",
                        "id" => "ale_rightsidebarvideo",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Right Sidebar on Press Pages",
                        "desc" => "Check if you want to show the Right Sidebar on the press pages.",
                        "id" => "ale_rightsidebarpress",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Right Sidebar on Inspiration Pages",
                        "desc" => "Check if you want to show the Right Sidebar on the inspiration pages.",
                        "id" => "ale_rightsidebarinspiration",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Right Sidebar on Testimonial Pages",
                        "desc" => "Check if you want to show the Right Sidebar on the testimonial pages.",
                        "id" => "ale_rightsidebartestimonial",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Show Right Sidebar on Shop Pages",
                        "desc" => "Check if you want to show the Right Sidebar on the Shop pages.",
                        "id" => "ale_rightsidebarshop",
                        "std" => "1",
                        "type" => "checkbox");
	
	return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {

    jQuery('#ale_homepagebottom').change(function(){
        if(jQuery('#ale_homepagebottom option:selected').val() == 'customboxes') {
            jQuery('#section-ale_firstbottomblocktitle').show();
            jQuery('#section-ale_secondbottomblocktitle').show();
            jQuery('#section-ale_thirdbottomblocktitle').show();
            jQuery('#section-ale_thirdbottomitemtitle').show();
            jQuery('#section-ale_secondbottomitemimage').show();
            jQuery('#section-ale_firstbottomitemimage').show();
            jQuery('#section-ale_thirdbottomitemimage').show();
            jQuery('#section-ale_secondbottomitemtitle').show();
            jQuery('#section-ale_firstbottomitemtitle').show();
            jQuery('#section-ale_firstbottomitemcategory').show();
            jQuery('#section-ale_secondbottomitemcategory').show();
            jQuery('#section-ale_thirdbottomitemcategory').show();
            jQuery('#section-ale_firstbottomitemlink').show();
            jQuery('#section-ale_secondbottomitemlink').show();
            jQuery('#section-ale_thirdbottomitemlink').show();
        } else {
            jQuery('#section-ale_firstbottomblocktitle').hide();
            jQuery('#section-ale_secondbottomblocktitle').hide();
            jQuery('#section-ale_thirdbottomblocktitle').hide();
            jQuery('#section-ale_thirdbottomitemtitle').hide();
            jQuery('#section-ale_secondbottomitemimage').hide();
            jQuery('#section-ale_firstbottomitemimage').hide();
            jQuery('#section-ale_thirdbottomitemimage').hide();
            jQuery('#section-ale_secondbottomitemtitle').hide();
            jQuery('#section-ale_firstbottomitemtitle').hide();
            jQuery('#section-ale_firstbottomitemcategory').hide();
            jQuery('#section-ale_secondbottomitemcategory').hide();
            jQuery('#section-ale_thirdbottomitemcategory').hide();
            jQuery('#section-ale_firstbottomitemlink').hide();
            jQuery('#section-ale_secondbottomitemlink').hide();
            jQuery('#section-ale_thirdbottomitemlink').hide();
        }
    });

    if(jQuery('#ale_homepagebottom option:selected').val() == 'customboxes'){
        jQuery('#section-ale_firstbottomblocktitle').show();
        jQuery('#section-ale_secondbottomblocktitle').show();
        jQuery('#section-ale_thirdbottomblocktitle').show();
        jQuery('#section-ale_thirdbottomitemtitle').show();
        jQuery('#section-ale_secondbottomitemimage').show();
        jQuery('#section-ale_firstbottomitemimage').show();
        jQuery('#section-ale_thirdbottomitemimage').show();
        jQuery('#section-ale_secondbottomitemtitle').show();
        jQuery('#section-ale_firstbottomitemtitle').show();
        jQuery('#section-ale_firstbottomitemcategory').show();
        jQuery('#section-ale_secondbottomitemcategory').show();
        jQuery('#section-ale_thirdbottomitemcategory').show();
        jQuery('#section-ale_firstbottomitemlink').show();
        jQuery('#section-ale_secondbottomitemlink').show();
        jQuery('#section-ale_thirdbottomitemlink').show();
    }

	jQuery('#ale_righthomemenu').click(function() {
  		jQuery('#section-ale_right_first_image').fadeToggle(400);
		jQuery('#section-ale_right_first_title').fadeToggle(400);
        jQuery('#section-ale_right_first_desc').fadeToggle(400);
        jQuery('#section-ale_right_first_link').fadeToggle(400);
        jQuery('#section-ale_right_second_image').fadeToggle(400);
        jQuery('#section-ale_right_second_title').fadeToggle(400);
        jQuery('#section-ale_right_second_desc').fadeToggle(400);
        jQuery('#section-ale_right_second_link').fadeToggle(400);
        jQuery('#section-ale_right_third_image').fadeToggle(400);
        jQuery('#section-ale_right_third_title').fadeToggle(400);
        jQuery('#section-ale_right_third_desc').fadeToggle(400);
        jQuery('#section-ale_right_third_link').fadeToggle(400);
	});
	
	if (jQuery('#ale_righthomemenu:checked').val() !== undefined) {
        jQuery('#section-ale_right_first_image').show();
        jQuery('#section-ale_right_first_title').show();
        jQuery('#section-ale_right_first_desc').show();
        jQuery('#section-ale_right_first_link').show();
        jQuery('#section-ale_right_second_image').show();
        jQuery('#section-ale_right_second_title').show();
        jQuery('#section-ale_right_second_desc').show();
        jQuery('#section-ale_right_second_link').show();
        jQuery('#section-ale_right_third_image').show();
        jQuery('#section-ale_right_third_title').show();
        jQuery('#section-ale_right_third_desc').show();
        jQuery('#section-ale_right_third_link').show();
	}

    jQuery('#ale_commentonpress').click(function() {
        jQuery('#section-ale_presscomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentonpress:checked').val() !== undefined) {
        jQuery('#section-ale_presscomments_style').show();
    }

    jQuery('#ale_commentongallery').click(function() {
        jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
        jQuery('#section-ale_gallerycomments_style').show();
    }

    jQuery('#ale_commentonvideo').click(function() {
        jQuery('#section-ale_videocomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentonvideo:checked').val() !== undefined) {
        jQuery('#section-ale_videocomments_style').show();
    }

    jQuery('#ale_commentoninspiration').click(function() {
        jQuery('#section-ale_inspirationcomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentoninspiration:checked').val() !== undefined) {
        jQuery('#section-ale_inspirationcomments_style').show();
    }
});
</script>

<?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    /* Get Sliders List */
    $sl_args = array(
        'post_type' => '_aletheme_slider_',
        'post_parent'    => '0',
    );
    $ale_sliders = new WP_Query( $sl_args );
    if ( $ale_sliders->have_posts() ) {
        $slider_list = array();
        while ( $ale_sliders->have_posts() ) {
            $ale_sliders->the_post();
            $slider_list[]= array('name' => $ale_sliders->post->post_title, 'value' =>  $ale_sliders->post->post_name);
        }
    } else {
        $slider_list = array(
            array( 'name' => 'Create a Slider' , 'value' => '', ),
        );
    }

    /* Restore original Post Data */
    wp_reset_postdata();

    $prefix = "ale_";

    $meta_boxes[] = array(
        'id'         => 'gallery_page_metabox',
        'title'      => 'Gallery Metabox',
        'pages'      => array( 'gallery', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Location',
                'desc' => 'Insert the Location',
                'id'   => $prefix . 'location',
                'type' => 'text',
            ),
            array(
                'name' => 'Event Date',
                'desc' => 'Insert the Date',
                'id'   => $prefix . 'eventdate',
                'type' => 'text_date',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'video_page_metabox',
        'title'      => 'Video Metabox',
        'pages'      => array( 'video', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Video Link',
                'desc' => 'Insert the video link',
                'id'   => $prefix . 'videopagelink',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'custompage_page_metabox',
        'title'      => 'Custom background',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Custom background',
                'desc' => 'Upload your custom background',
                'id'   => $prefix . 'custompagebackground',
                'type' => 'file',
            ),
            array(
                'name' => 'Custom Page CSS',
                'desc' => 'Add your custom CSS for this page. (ex. background-size:cover;). Work with custom background uploaded.',
                'id'   => $prefix . 'custompagecss',
                'type' => 'textarea_code',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'sidebar_template_metabox',
        'title'      => 'Custom Templates Sidebar',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php','template-contact-two.php','template-contact-three.php','template-contact-four.php','template-contact-five.php','template-contact-six.php','template-about.php','template-about-two.php','template-about-three.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Show Left Sidebar',
                'desc' => 'Check to show the left Page Sidebar',
                'id'   => $prefix . 'leftsidebarcustom',
                'type' => 'checkbox',
            ),
            array(
                'name' => 'Show Right Sidebar',
                'desc' => 'Check to show the right Page Sidebar',
                'id'   => $prefix . 'rightsidebarcustom',
                'type' => 'checkbox',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'aboutthree_metabox',
        'title'      => 'About page options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about-three.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Right Toggle. Title #1',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'abtogtit1',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Link #1',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'abtoglink1',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Description #1',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'abtogdesc1',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Right Toggle. Image bg #1',
                'desc' => 'Insert your image bg',
                'id'   => $prefix . 'abtogimg1',
                'type' => 'file',
            ),

            array(
                'name' => 'Right Toggle. Title #2',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'abtogtit2',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Link #2',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'abtoglink2',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Description #2',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'abtogdesc2',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Right Toggle. Image bg #2',
                'desc' => 'Insert your image bg',
                'id'   => $prefix . 'abtogimg2',
                'type' => 'file',
            ),

            array(
                'name' => 'Right Toggle. Title #3',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'abtogtit3',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Link #3',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'abtoglink3',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Description #3',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'abtogdesc3',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Right Toggle. Image bg #3',
                'desc' => 'Insert your image bg',
                'id'   => $prefix . 'abtogimg3',
                'type' => 'file',
            ),

            array(
                'name' => 'Right Toggle. Title #4',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'abtogtit4',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Link #4',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'abtoglink4',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Description #4',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'abtogdesc4',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Right Toggle. Image bg #4',
                'desc' => 'Insert your image bg',
                'id'   => $prefix . 'abtogimg4',
                'type' => 'file',
            ),

            array(
                'name' => 'Right Toggle. Title #5',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'abtogtit5',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Link #5',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'abtoglink5',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Description #5',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'abtogdesc5',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Right Toggle. Image bg #5',
                'desc' => 'Insert your image bg',
                'id'   => $prefix . 'abtogimg5',
                'type' => 'file',
            ),

            array(
                'name' => 'Right Toggle. Title #6',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'abtogtit6',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Link #6',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'abtoglink6',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Description #6',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'abtogdesc6',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Right Toggle. Image bg #6',
                'desc' => 'Insert your image bg',
                'id'   => $prefix . 'abtogimg6',
                'type' => 'file',
            ),

            array(
                'name' => 'Right Toggle. Title #7',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'abtogtit7',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Link #7',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'abtoglink7',
                'type' => 'text',
            ),
            array(
                'name' => 'Right Toggle. Description #7',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'abtogdesc7',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Right Toggle. Image bg #7',
                'desc' => 'Insert your image bg',
                'id'   => $prefix . 'abtogimg7',
                'type' => 'file',
            ),

            array(
                'name' => 'Team box. Box title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'meetteamtitle',
                'type' => 'text',
            ),

            array(
                'name' => 'Team box. Member Photo #1',
                'desc' => 'Insert your photo',
                'id'   => $prefix . 'firstphotoperson',
                'type' => 'file',
            ),
            array(
                'name' => 'Team box. Member Photo #2',
                'desc' => 'Insert your photo',
                'id'   => $prefix . 'secondphotoperson',
                'type' => 'file',
            ),
            array(
                'name' => 'Team box. Member Photo #3',
                'desc' => 'Insert your photo',
                'id'   => $prefix . 'thirdphotoperson',
                'type' => 'file',
            ),

            array(
                'name' => 'Team box. Member Name #1',
                'desc' => 'Insert your name',
                'id'   => $prefix . 'firstnameperson',
                'type' => 'text',
            ),
            array(
                'name' => 'Team box. Member Name #2',
                'desc' => 'Insert your name',
                'id'   => $prefix . 'secondnameperson',
                'type' => 'text',
            ),
            array(
                'name' => 'Team box. Member Name #3',
                'desc' => 'Insert your name',
                'id'   => $prefix . 'thirdnameperson',
                'type' => 'text',
            ),

            array(
                'name' => 'Team box. Member Prof #1',
                'desc' => 'Insert your prof',
                'id'   => $prefix . 'firstprofperson',
                'type' => 'text',
            ),
            array(
                'name' => 'Team box. Member Prof #2',
                'desc' => 'Insert your prof',
                'id'   => $prefix . 'secondprofperson',
                'type' => 'text',
            ),
            array(
                'name' => 'Team box. Member Prof #3',
                'desc' => 'Insert your prof',
                'id'   => $prefix . 'thirdprofperson',
                'type' => 'text',
            ),

            array(
                'name' => 'Team box. Member Description #1',
                'desc' => 'Insert your Description',
                'id'   => $prefix . 'firstdescperson',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Team box. Member Description #2',
                'desc' => 'Insert your Description',
                'id'   => $prefix . 'seconddescperson',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Team box. Member Description #3',
                'desc' => 'Insert your Description',
                'id'   => $prefix . 'thirddescperson',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Team box. Member #1 Facebook Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'mb1fb',
                'type' => 'text',
            ),
            array(
                'name' => 'Team box. Member #1 Twitter Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'mb1twi',
                'type' => 'text',
            ),
            array(
                'name' => 'Team box. Member #1 Google Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'mb1g',
                'type' => 'text',
            ),
            array(
                'name' => 'Team box. Member #1 Pinterest Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'mb1pin',
                'type' => 'text',
            ),

            array(
                'name' => 'Team box. Member #2 Facebook Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'mb2fb',
                'type' => 'text',
            ),
            array(
                'name' => 'Team box. Member #2 Twitter Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'mb2twi',
                'type' => 'text',
            ),
            array(
                'name' => 'Team box. Member #2 Google Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'mb2g',
                'type' => 'text',
            ),
            array(
                'name' => 'Team box. Member #2 Pinterest Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'mb2pin',
                'type' => 'text',
            ),

            array(
                'name' => 'Team box. Member #3 Facebook Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'mb3fb',
                'type' => 'text',
            ),
            array(
                'name' => 'Team box. Member #3 Twitter Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'mb3twi',
                'type' => 'text',
            ),
            array(
                'name' => 'Team box. Member #3 Google Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'mb3g',
                'type' => 'text',
            ),
            array(
                'name' => 'Team box. Member #3 Pinterest Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'mb3pin',
                'type' => 'text',
            ),

            array(
                'name' => 'Skills box. Title box',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'ourskillstitle',
                'type' => 'text',
            ),
            array(
                'name' => 'Skills box. Skill 1 title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'pietit1',
                'type' => 'text',
            ),
            array(
                'name' => 'Skills box. Skill 1 percent',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'pieper1',
                'type' => 'text',
            ),
            array(
                'name' => 'Skills box. Skill 2 title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'pietit2',
                'type' => 'text',
            ),
            array(
                'name' => 'Skills box. Skill 2 percent',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'pieper2',
                'type' => 'text',
            ),
            array(
                'name' => 'Skills box. Skill 3 title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'pietit3',
                'type' => 'text',
            ),
            array(
                'name' => 'Skills box. Skill 3 percent',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'pieper3',
                'type' => 'text',
            ),
            array(
                'name' => 'Skills box. Skill 4 title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'pietit4',
                'type' => 'text',
            ),
            array(
                'name' => 'Skills box. Skill 4 percent',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'pieper4',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'about_four_metabox',
        'title'      => 'About 4 Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about-four.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Top Video Section',
                'desc' => 'Insert your info for video section',
                'id'   => $prefix . 'ab4title1',
                'type' => 'title',
            ),
            array(
                'name' => 'The Background',
                'desc' => 'Check if you want to show the colored background.',
                'id'   => $prefix . 'a4-bg-option',
                'std'   => '',
                'type'    => 'checkbox',
            ),
            array(
                'name' => 'Video Link',
                'desc' => 'Insert your video link here',
                'id'   => $prefix . 'a4-video-link',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Video Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'a4-video-title',
                'std'   => 'Socha <span>adventures</span>',
                'type'    => 'text',
            ),
            array(
                'name' => 'Video Description',
                'desc' => 'Insert your description here',
                'id'   => $prefix . 'a4-video-desc',
                'std'   => 'Short video presentation',
                'type'    => 'text',
            ),
            array(
                'name' => 'Video Background image',
                'desc' => 'Insert your image here. <b style="color:#ff0000;">Size - 470px-323px</b>',
                'id'   => $prefix . 'a4-video-image',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Presentation subTitle',
                'desc' => 'Insert the subtitle',
                'id'   => $prefix . 'a4-videopre-subtitle',
                'std'   => 'Lorem Ipsum is simply dummy text of the',
                'type'    => 'text',
            ),
            array(
                'name' => 'Presentation Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'a4-videopre-title',
                'std'   => 'printing and typesetting industry',
                'type'    => 'text',
            ),
            array(
                'name' => 'Presentation Column #1 Text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'a4-videopre-text1',
                'std'   => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised',
                'type'    => 'text',
            ),
            array(
                'name' => 'Presentation Column #2 Text',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'a4-videopre-text2',
                'std'   => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners Box',
                'desc' => 'Insert your info for partners box',
                'id'   => $prefix . 'ab4title3',
                'type' => 'title',
            ),
            array(
                'name' => 'Partners Box Title',
                'desc' => 'Insert your title. Let it empty, to disable the box.',
                'id'   => $prefix . 'about-4partner-title',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Partners Box Description',
                'desc' => 'Insert your sort description',
                'id'   => $prefix . 'about-4partner-desc',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration<br /> in some form, by injected humour, or randomised words which dont look even slig',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Partner #1 Image',
                'desc' => 'Insert partner image',
                'id'   => $prefix . 'about-4partner-image1',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Partner #1 Link',
                'desc' => 'Insert partner link',
                'id'   => $prefix . 'about-4partner-link1',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Partner #2 Image',
                'desc' => 'Insert partner image',
                'id'   => $prefix . 'about-4partner-image2',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Partner #2 Link',
                'desc' => 'Insert partner link',
                'id'   => $prefix . 'about-4partner-link2',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Partner #3 Image',
                'desc' => 'Insert partner image',
                'id'   => $prefix . 'about-4partner-image3',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Partner #3 Link',
                'desc' => 'Insert partner link',
                'id'   => $prefix . 'about-4partner-link3',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Partner #4 Image',
                'desc' => 'Insert partner image',
                'id'   => $prefix . 'about-4partner-image4',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Partner #4 Link',
                'desc' => 'Insert partner link',
                'id'   => $prefix . 'about-4partner-link4',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'About toggles',
                'desc' => 'Insert your info for video section',
                'id'   => $prefix . 'ab4title4',
                'type' => 'title',
            ),
            array(
                'name' => 'Section subTitle',
                'desc' => 'Insert the subtitle',
                'id'   => $prefix . 'about-4toggle-subtitle',
                'std'  => 'Contrary to popular belief, Lorem Ipsumis not simply random text<br />It has roots in a piece of classical Latin ',
                'type' => 'text',
            ),
            array(
                'name' => 'Toggle Image',
                'desc' => 'Insert the image. Size 470px-151px',
                'id'   => $prefix . 'about-4toggle-image',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Toggle #1 Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'about-4toggle-title1',
                'std'  => 'Lorem Ipsum passages, and more recently with desktop',
                'type' => 'text',
            ),
            array(
                'name' => 'Toggle #1 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'about-4toggle-desc1',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to ',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Toggle #2 Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'about-4toggle-title2',
                'std'  => 'There are many variations of passages of Lorem many variations passages',
                'type' => 'text',
            ),
            array(
                'name' => 'Toggle #2 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'about-4toggle-desc2',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to ',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Toggle #3 Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'about-4toggle-title3',
                'std'  => 'Lorem Ipsum passages, and more recently with desktop',
                'type' => 'text',
            ),
            array(
                'name' => 'Toggle #3 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'about-4toggle-desc3',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to ',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Toggle #4 Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'about-4toggle-title4',
                'std'  => 'All the Lorem Ipsum generators on the Internet tend',
                'type' => 'text',
            ),
            array(
                'name' => 'Toggle #4 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'about-4toggle-desc4',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to ',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Services Section',
                'desc' => 'Insert your info for services section',
                'id'   => $prefix . 'ab4title5',
                'type' => 'title',
            ),
            array(
                'name' => 'Service #1 Icon',
                'desc' => 'Insert the icon',
                'id'   => $prefix . 'about-4serv-icon1',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #1 Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'about-4serv-title1',
                'std'  => 'Lorem Ipsum',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #1 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'about-4serv-desc1',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in ',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Service #2 Icon',
                'desc' => 'Insert the icon',
                'id'   => $prefix . 'about-4serv-icon2',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #2 Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'about-4serv-title2',
                'std'  => 'Lorem Ipsum',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #2 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'about-4serv-desc2',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in ',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Service #3 Icon',
                'desc' => 'Insert the icon',
                'id'   => $prefix . 'about-4serv-icon3',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #3 Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'about-4serv-title3',
                'std'  => 'Lorem Ipsum',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #3 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'about-4serv-desc3',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in ',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Service #4 Icon',
                'desc' => 'Insert the icon',
                'id'   => $prefix . 'about-4serv-icon4',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #4 Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'about-4serv-title4',
                'std'  => 'Lorem Ipsum',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #4 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'about-4serv-desc4',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in ',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Service #5 Icon',
                'desc' => 'Insert the icon',
                'id'   => $prefix . 'about-4serv-icon5',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #5 Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'about-4serv-title5',
                'std'  => 'Lorem Ipsum',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #5 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'about-4serv-desc5',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in ',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Service #6 Icon',
                'desc' => 'Insert the icon',
                'id'   => $prefix . 'about-4serv-icon6',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Service #6 Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'about-4serv-title6',
                'std'  => 'Lorem Ipsum',
                'type' => 'text',
            ),
            array(
                'name' => 'Service #6 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'about-4serv-desc6',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in ',
                'type' => 'textarea_code',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'about_five_metabox',
        'title'      => 'About 5 Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about-five.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => '3 Top Boxes',
                'desc' => 'Insert your info for 3 top boxes',
                'id'   => $prefix . 'ab5title1',
                'type' => 'title',
            ),
            array(
                'name' => 'Box title #1',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-3box-title1',
                'std'  => 'Advanced technology',
                'type' => 'text',
            ),
            array(
                'name' => 'Box description #1',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'about-3box-desc1',
                'std'  => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, printer took a galley.  of type ',
                'type' => 'text',
            ),
            array(
                'name' => 'Box link #1',
                'desc' => 'Insert your link. Let it empty if you dont need a link',
                'id'   => $prefix . 'about-3box-link1',
                'type' => 'text',
            ),
            array(
                'name' => 'Box icon #1',
                'desc' => 'Insert your icon (size: 32px-32px)',
                'id'   => $prefix . 'about-3box-icon1',
                'type' => 'file',
            ),
            array(
                'name' => 'Box title #2',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-3box-title2',
                'std'  => 'Healthcare solutions',
                'type' => 'text',
            ),
            array(
                'name' => 'Box description #2',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'about-3box-desc2',
                'std'  => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, printer took a galley.  of type ',
                'type' => 'text',
            ),
            array(
                'name' => 'Box link #2',
                'desc' => 'Insert your link. Let it empty if you dont need a link',
                'id'   => $prefix . 'about-3box-link2',
                'type' => 'text',
            ),
            array(
                'name' => 'Box icon #2',
                'desc' => 'Insert your icon (size: 32px-32px)',
                'id'   => $prefix . 'about-3box-icon2',
                'type' => 'file',
            ),
            array(
                'name' => 'Box title #3',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-3box-title3',
                'std'  => '24/7 Availability',
                'type' => 'text',
            ),
            array(
                'name' => 'Box description #3',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'about-3box-desc3',
                'std'  => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, printer took a galley.  of type ',
                'type' => 'text',
            ),
            array(
                'name' => 'Box link #3',
                'desc' => 'Insert your link. Let it empty if you dont need a link',
                'id'   => $prefix . 'about-3box-link3',
                'type' => 'text',
            ),
            array(
                'name' => 'Box icon #3',
                'desc' => 'Insert your icon (size: 32px-32px)',
                'id'   => $prefix . 'about-3box-icon3',
                'type' => 'file',
            ),
            array(
                'name' => 'Management Box',
                'desc' => 'Insert your info for Management Box',
                'id'   => $prefix . 'ab5title2',
                'type' => 'title',
            ),
            array(
                'name' => 'Management Box Title',
                'desc' => 'Insert your title. Let it empty to disable the box.',
                'id'   => $prefix . 'about-man-boxtitle',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #1 Photo',
                'desc' => 'Insert member photo. Size - 240px-305px',
                'id'   => $prefix . 'about-man-image1',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Member #1 Name',
                'desc' => 'Insert member name',
                'id'   => $prefix . 'about-man-name1',
                'std'  => 'Adrian Steve',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #1 Work',
                'desc' => 'Insert member work',
                'id'   => $prefix . 'about-man-work1',
                'std'  => 'Founder',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #1 Short Description',
                'desc' => 'Insert member short description',
                'id'   => $prefix . 'about-man-desc1',
                'std'  => 'Mauris ac gravida tellus. Vestibulum adipiscing laoreet arcu in egestas. ',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #1 Twitter link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'about-man-twitter1',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #1 Facebook link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'about-man-facebook1',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #1 Pinterest link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'about-man-pinterest1',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #2 Photo',
                'desc' => 'Insert member photo. Size - 240px-305px',
                'id'   => $prefix . 'about-man-image2',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Member #2 Name',
                'desc' => 'Insert member name',
                'id'   => $prefix . 'about-man-name2',
                'std'  => 'Adrian Steve',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #2 Work',
                'desc' => 'Insert member work',
                'id'   => $prefix . 'about-man-work2',
                'std'  => 'Founder',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #2 Short Description',
                'desc' => 'Insert member short description',
                'id'   => $prefix . 'about-man-desc2',
                'std'  => 'Mauris ac gravida tellus. Vestibulum adipiscing laoreet arcu in egestas. ',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #2 Twitter link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'about-man-twitter2',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #2 Facebook link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'about-man-facebook2',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #2 Pinterest link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'about-man-pinterest2',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #3 Photo',
                'desc' => 'Insert member photo. Size - 240px-305px',
                'id'   => $prefix . 'about-man-image3',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Member #3 Name',
                'desc' => 'Insert member name',
                'id'   => $prefix . 'about-man-name3',
                'std'  => 'Adrian Steve',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #3 Work',
                'desc' => 'Insert member work',
                'id'   => $prefix . 'about-man-work3',
                'std'  => 'Founder',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #3 Short Description',
                'desc' => 'Insert member short description',
                'id'   => $prefix . 'about-man-desc3',
                'std'  => 'Mauris ac gravida tellus. Vestibulum adipiscing laoreet arcu in egestas. ',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #3 Twitter link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'about-man-twitter3',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #3 Facebook link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'about-man-facebook3',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #3 Pinterest link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'about-man-pinterest3',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #4 Photo',
                'desc' => 'Insert member photo. Size - 240px-305px',
                'id'   => $prefix . 'about-man-image4',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Member #4 Name',
                'desc' => 'Insert member name',
                'id'   => $prefix . 'about-man-name4',
                'std'  => 'Adrian Steve',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #4 Work',
                'desc' => 'Insert member work',
                'id'   => $prefix . 'about-man-work4',
                'std'  => 'Founder',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #4 Short Description',
                'desc' => 'Insert member short description',
                'id'   => $prefix . 'about-man-desc4',
                'std'  => 'Mauris ac gravida tellus. Vestibulum adipiscing laoreet arcu in egestas. ',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #4 Twitter link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'about-man-twitter4',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #4 Facebook link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'about-man-facebook4',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Member #4 Pinterest link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'about-man-pinterest4',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Organization Box',
                'desc' => 'Insert your info for Organization Box',
                'id'   => $prefix . 'ab5title3',
                'type' => 'title',
            ),
            array(
                'name' => 'Organization Box Title',
                'desc' => 'Insert your title. Let it empty to disable the box.',
                'id'   => $prefix . 'about-org-boxtitle',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Organization Post #1 Title',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'about-org-posttitle1',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Organization Post #1 Description',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'about-org-postdesc1',
                'std'  => '',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Organization Post #1 Link',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'about-org-postlink1',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Organization Post #2 Title',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'about-org-posttitle2',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Organization Post #2 Description',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'about-org-postdesc2',
                'std'  => '',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Organization Post #2 Link',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'about-org-postlink2',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Organization Post #3 Title',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'about-org-posttitle3',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Organization Post #3 Description',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'about-org-postdesc3',
                'std'  => '',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Organization Post #3 Link',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'about-org-postlink3',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Organization Post #4 Title',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'about-org-posttitle4',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Organization Post #4 Description',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'about-org-postdesc4',
                'std'  => '',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Organization Post #4 Link',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'about-org-postlink4',
                'std'  => '',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'about_six_metabox',
        'title'      => 'About 6 Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about-six.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'About subtitle',
                'desc' => 'Insert your subtitle',
                'id'   => $prefix . 'about-6-subtitle',
                'std'  => 'There are many variations of passages<br />of Lorem Ipsum available',
                'type' => 'text',
            ),
            array(
                'name' => '3 Top Boxes',
                'desc' => 'Insert your info for 3 top boxes',
                'id'   => $prefix . 'ab6title1',
                'type' => 'title',
            ),
            array(
                'name' => 'Box #1 Icon',
                'desc' => 'Insert your icon. Max size: 33px-33px',
                'id'   => $prefix . 'about-6box-icon1',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Box #1 Title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-6box-title1',
                'std'  => 'Lorem Ipsum',
                'type' => 'text',
            ),
            array(
                'name' => 'Box #1 Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'about-6box-link1',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Box #1 Description',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'about-6box-desc1',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in ',
                'type' => 'text',
            ),
            array(
                'name' => 'Box #2 Icon',
                'desc' => 'Insert your icon. Max size: 33px-33px',
                'id'   => $prefix . 'about-6box-icon2',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Box #2 Title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-6box-title2',
                'std'  => 'Lorem Ipsum',
                'type' => 'text',
            ),
            array(
                'name' => 'Box #2 Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'about-6box-link2',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Box #2 Description',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'about-6box-desc2',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in ',
                'type' => 'text',
            ),
            array(
                'name' => 'Box #3 Icon',
                'desc' => 'Insert your icon. Max size: 33px-33px',
                'id'   => $prefix . 'about-6box-icon3',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Box #3 Title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-6box-title3',
                'std'  => 'Lorem Ipsum',
                'type' => 'text',
            ),
            array(
                'name' => 'Box #3 Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'about-6box-link3',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Box #3 Description',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'about-6box-desc3',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in ',
                'type' => 'text',
            ),
            array(
                'name' => 'About image. Map',
                'desc' => 'Insert your image. Recommended size: 905px-516px',
                'id'   => $prefix . 'about-6box-mapimage',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Places Boxes',
                'desc' => 'Insert your info for places boxes',
                'id'   => $prefix . 'ab6title2',
                'type' => 'title',
            ),
            array(
                'name' => 'Place #1 image',
                'desc' => 'Insert your image. Recommended size: 460px-230px',
                'id'   => $prefix . 'about-6place-image1',
                'type' => 'file',
            ),
            array(
                'name' => 'Place #1 Title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-6place-title1',
                'std'  => 'Newtown Square, PA',
                'type' => 'text',
            ),
            array(
                'name' => 'Place #1 Description',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'about-6place-desc1',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Place #1 Toogle #1 Title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-6place-togle1-title',
                'std'  => 'There are many variations of passages?',
                'type' => 'text',
            ),
            array(
                'name' => 'Place #1 Toogle #1 Description',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'about-6place-togle1-desc',
                'std'  => 'Pellentesque auctor posuere enim, eget molestie arcu viverra ac. Praesent porttitor dictum elementum. Cras faucibus lacus lectus',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Place #1 Toogle #2 Title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-6place-togle2-title',
                'std'  => 'There are many variations of passages?',
                'type' => 'text',
            ),
            array(
                'name' => 'Place #1 Toogle #2 Description',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-6place-togle2-desc',
                'std'  => 'Pellentesque auctor posuere enim, eget molestie arcu viverra ac. Praesent porttitor dictum elementum. Cras faucibus lacus lectus',
                'type' => 'textarea_code',
            ),

            array(
                'name' => 'Place #2 image',
                'desc' => 'Insert your image. Recommended size: 460px-230px',
                'id'   => $prefix . 'about-6place-image2',
                'type' => 'file',
            ),
            array(
                'name' => 'Place #2 Title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-6place-title2',
                'std'  => 'Newtown Square, PA',
                'type' => 'text',
            ),
            array(
                'name' => 'Place #2 Description',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'about-6place-desc2',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Place #2 Toogle #1 Title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-6place-togle3-title',
                'std'  => 'There are many variations of passages?',
                'type' => 'text',
            ),
            array(
                'name' => 'Place #2 Toogle #1 Description',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'about-6place-togle3-desc',
                'std'  => 'Pellentesque auctor posuere enim, eget molestie arcu viverra ac. Praesent porttitor dictum elementum. Cras faucibus lacus lectus',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Place #2 Toogle #2 Title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-6place-togle4-title',
                'std'  => 'There are many variations of passages?',
                'type' => 'text',
            ),
            array(
                'name' => 'Place #2 Toogle #2 Description',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'about-6place-togle4-desc',
                'std'  => 'Pellentesque auctor posuere enim, eget molestie arcu viverra ac. Praesent porttitor dictum elementum. Cras faucibus lacus lectus',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Partners Box',
                'desc' => 'Insert your info for partners box',
                'id'   => $prefix . 'ab6title3',
                'type' => 'title',
            ),
            array(
                'name' => 'Partners Box Title',
                'desc' => 'Insert your title. Let it empty, to disable the box.',
                'id'   => $prefix . 'about-6partner-title',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Partners Box Description',
                'desc' => 'Insert your sort description',
                'id'   => $prefix . 'about-6partner-desc',
                'std'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration<br /> in some form, by injected humour, or randomised words which dont look even slig',
                'type' => 'textarea_code',
            ),
            array(
                'name' => 'Partner #1 Image',
                'desc' => 'Insert partner image',
                'id'   => $prefix . 'about-6partner-image1',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Partner #1 Link',
                'desc' => 'Insert partner link',
                'id'   => $prefix . 'about-6partner-link1',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Partner #2 Image',
                'desc' => 'Insert partner image',
                'id'   => $prefix . 'about-6partner-image2',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Partner #2 Link',
                'desc' => 'Insert partner link',
                'id'   => $prefix . 'about-6partner-link2',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Partner #3 Image',
                'desc' => 'Insert partner image',
                'id'   => $prefix . 'about-6partner-image3',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Partner #3 Link',
                'desc' => 'Insert partner link',
                'id'   => $prefix . 'about-6partner-link3',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Partner #4 Image',
                'desc' => 'Insert partner image',
                'id'   => $prefix . 'about-6partner-image4',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Partner #4 Link',
                'desc' => 'Insert partner link',
                'id'   => $prefix . 'about-6partner-link4',
                'std'  => '',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'contact_page_metabox',
        'title'      => 'Contact Metabox',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Map Code',
                'desc' => 'Insert your Google Map Code or other...',
                'id'   => $prefix . 'mapcontact',
                'type' => 'textarea_code',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'contacttwo_page_metabox',
        'title'      => 'Contact Metabox',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact-two.php'), ), // Specific post templates to display this metabox
        'fields' => array(

            array(
                'name' => 'Adress',
                'desc' => 'Insert your Adress',
                'id'   => $prefix . 'adresstwo',
                'type'    => 'wysiwyg',
                'options' => array(    'textarea_rows' => 5, ),
            ),
            array(
                'name' => 'Email',
                'desc' => 'Insert your email...',
                'id'   => $prefix . 'conemailtwo',
                'type' => 'text',
            ),
            array(
                'name' => 'Phone',
                'desc' => 'Insert your phone number...',
                'id'   => $prefix . 'conphonetwo',
                'type' => 'text',
            ),
            array(
                'name' => 'Map Code',
                'desc' => 'Insert your Google Map Code or other...',
                'id'   => $prefix . 'mapcontacttwo',
                'type' => 'textarea_code',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'contact_three_metabox',
        'title'      => 'Contact 3 Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact-three.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Form Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact3-form-title',
                'std'  => 'Contact Form',
                'type' => 'text',
            ),
            array(
                'name' => 'Phone Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact3-photo-title',
                'std'  => 'Phone:',
                'type' => 'text',
            ),
            array(
                'name' => 'Phone Number',
                'desc' => 'Insert the number',
                'id'   => $prefix . 'contact3-photo-number',
                'std'  => '8 800 346 10 79',
                'type' => 'text',
            ),
            array(
                'name' => 'Address Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact3-address-title',
                'std'  => 'Address:',
                'type' => 'text',
            ),
            array(
                'name' => 'Address',
                'desc' => 'Insert the address',
                'id'   => $prefix . 'contact3-address',
                'std'  => 'France, Nancy, Rue de Serre 15',
                'type' => 'text',
            ),
            array(
                'name' => 'Email Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact3-email-title',
                'std'  => 'Email:',
                'type' => 'text',
            ),
            array(
                'name' => 'Email Address',
                'desc' => 'Insert the email',
                'id'   => $prefix . 'contact3-email-address',
                'std'  => 'mail@website.com',
                'type' => 'text',
            ),

            array(
                'name' => 'Map Address',
                'desc' => 'Insert your Address (for Map). Let it empty to disable the map.',
                'id'   => $prefix . 'contact3-map-address',
                'std'  => 'France, Nancy, Rue de Serre 15',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'contact_four_metabox',
        'title'      => 'Contact 4 Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact-four.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Form Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact4-form-title',
                'std'  => 'Send us a message',
                'type' => 'text',
            ),
            array(
                'name' => 'Phone Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact4-photo-title',
                'std'  => 'Phone:',
                'type' => 'text',
            ),
            array(
                'name' => 'Phone Number',
                'desc' => 'Insert the number',
                'id'   => $prefix . 'contact4-photo-number',
                'std'  => '8 800 346 10 79',
                'type' => 'text',
            ),
            array(
                'name' => 'Address Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact4-address-title',
                'std'  => 'Address:',
                'type' => 'text',
            ),
            array(
                'name' => 'Address',
                'desc' => 'Insert the address',
                'id'   => $prefix . 'contact4-address',
                'std'  => 'France, Nancy, Rue de Serre 15',
                'type' => 'text',
            ),
            array(
                'name' => 'Email Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact4-email-title',
                'std'  => 'Email:',
                'type' => 'text',
            ),
            array(
                'name' => 'Email Address',
                'desc' => 'Insert the email',
                'id'   => $prefix . 'contact4-email-address',
                'std'  => 'mail@website.com',
                'type' => 'text',
            ),

            array(
                'name' => 'Map Address',
                'desc' => 'Insert your Address (for Map). Let it empty to disable the map.',
                'id'   => $prefix . 'contact4-map-address',
                'std'  => 'France, Nancy, Rue de Serre 15',
                'type' => 'text',
            ),
            array(
                'name' => 'Social Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact4-social-title',
                'std'  => 'We in social networks:',
                'type' => 'text',
            ),
            array(
                'name' => 'Twitter Link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'contact4-social-twitter',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Instagram Link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'contact4-social-instagram',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Facebook Link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'contact4-social-facebook',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Pinterest Link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'contact4-social-pinterest',
                'std'  => '',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'contact_five_metabox',
        'title'      => 'Contact 5 Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact-five.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Form Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact5-form-title',
                'std'  => 'Contact Us',
                'type' => 'text',
            ),
            array(
                'name' => 'Phone Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact5-photo-title',
                'std'  => 'Phone:',
                'type' => 'text',
            ),
            array(
                'name' => 'Phone Number',
                'desc' => 'Insert the number',
                'id'   => $prefix . 'contact5-photo-number',
                'std'  => '8 800 346 10 79',
                'type' => 'text',
            ),
            array(
                'name' => 'Address Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact5-address-title',
                'std'  => 'Address:',
                'type' => 'text',
            ),
            array(
                'name' => 'Address',
                'desc' => 'Insert the address',
                'id'   => $prefix . 'contact5-address',
                'std'  => 'France, Nancy, Rue de Serre 15',
                'type' => 'text',
            ),
            array(
                'name' => 'Email Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact5-email-title',
                'std'  => 'Email:',
                'type' => 'text',
            ),
            array(
                'name' => 'Email Address',
                'desc' => 'Insert the email',
                'id'   => $prefix . 'contact5-email-address',
                'std'  => 'mail@website.com',
                'type' => 'text',
            ),
            array(
                'name' => 'Map Address',
                'desc' => 'Insert your Address (for Map). Let it empty to disable the map.',
                'id'   => $prefix . 'contact5-map-address',
                'std'  => 'France, Nancy, Rue de Serre 15',
                'type' => 'text',
            ),
            array(
                'name' => 'Contact Image',
                'desc' => 'Insert your image. Recomended size - 1032px-170px',
                'id'   => $prefix . 'contact5-image',
                'std'  => '',
                'type' => 'file',
            ),

        )
    );

    $meta_boxes[] = array(
        'id'         => 'contact_six_metabox',
        'title'      => 'Contact 6 Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact-six.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Form Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact6-form-title',
                'std'  => 'Contact form',
                'type' => 'text',
            ),
            array(
                'name' => 'Phone Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact6-photo-title',
                'std'  => 'Phone:',
                'type' => 'text',
            ),
            array(
                'name' => 'Phone Number',
                'desc' => 'Insert the number',
                'id'   => $prefix . 'contact6-photo-number',
                'std'  => '8 800 346 10 79',
                'type' => 'text',
            ),
            array(
                'name' => 'Address Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact6-address-title',
                'std'  => 'Address:',
                'type' => 'text',
            ),
            array(
                'name' => 'Address',
                'desc' => 'Insert the address',
                'id'   => $prefix . 'contact6-address',
                'std'  => 'France, Nancy, Rue de Serre 15',
                'type' => 'text',
            ),
            array(
                'name' => 'Email Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contact6-email-title',
                'std'  => 'Email:',
                'type' => 'text',
            ),
            array(
                'name' => 'Email Address',
                'desc' => 'Insert the email',
                'id'   => $prefix . 'contact6-email-address',
                'std'  => 'mail@website.com',
                'type' => 'text',
            ),
            array(
                'name' => 'Map Address',
                'desc' => 'Insert your Address (for Map). Let it empty to disable the map.',
                'id'   => $prefix . 'contact6-map-address',
                'std'  => 'France, Nancy, Rue de Serre 15',
                'type' => 'text',
            ),
            array(
                'name' => 'Contact Image',
                'desc' => 'Insert your image. Recomended size - 1032px-265px',
                'id'   => $prefix . 'contact6-image',
                'std'  => '',
                'type' => 'file',
            ),

        )
    );

    $meta_boxes[] = array(
        'id'         => 'about_page_metabox',
        'title'      => 'About Metabox',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Second column',
                'desc' => 'Insert your info...',
                'id'   => $prefix . 'aboutinfo',
                'type'    => 'wysiwyg',
                'options' => array(    'textarea_rows' => 5, ),
            ),

            array(
                'name' => 'Quote info',
                'desc' => 'Insert your info...',
                'id'   => $prefix . 'aboutquote',
                'type'    => 'textarea_code',
            ),

            array(
                'name' => 'Video',
                'desc' => 'Insert your video link...',
                'id'   => $prefix . 'aboutvideo',
                'type'    => 'text',
            ),
            array(
                'name' => 'Close or Open Video Toogle box',
                'desc' => 'Select an option',
                'id'   => $prefix . 'aboutvideotog',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Close', 'value' => 'close', ),
                    array( 'name' => 'Open', 'value' => 'open', ),
                ),
            ),
            array(
                'name' => 'Enable or Disable Slider',
                'desc' => 'To show the slider, enable it and upload images as page attachments, default WordPress images upload.',
                'id'   => $prefix . 'aboutslideon',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Enable', 'value' => 'on', ),
                    array( 'name' => 'Disable', 'value' => 'off', ),
                ),
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'abouttwo_page_metabox',
        'title'      => 'About Metabox',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about-two.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Skills box Title',
                'desc' => 'Insert your box title...',
                'id'   => $prefix . 'abouttwoskills',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill One Title',
                'desc' => 'Insert your first skill title...',
                'id'   => $prefix . 'firstskill',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill One Percent',
                'desc' => 'Insert your first skill procent... ex. 80',
                'id'   => $prefix . 'firstskillper',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Two Title',
                'desc' => 'Insert your second skill title...',
                'id'   => $prefix . 'secondskill',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Two Percent',
                'desc' => 'Insert your second skill procent... ex. 80',
                'id'   => $prefix . 'secondskillper',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Three Title',
                'desc' => 'Insert your third skill title...',
                'id'   => $prefix . 'thirdskill',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Three Percent',
                'desc' => 'Insert your third skill procent... ex. 80',
                'id'   => $prefix . 'thirdskillper',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Four Title',
                'desc' => 'Insert your fourth skill title...',
                'id'   => $prefix . 'fourthskill',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Four Percent',
                'desc' => 'Insert your fourth skill procent... ex. 80',
                'id'   => $prefix . 'fourthskillper',
                'type'    => 'text',
            ),
            array(
                'name' => 'Team box title',
                'desc' => 'Insert your team box title',
                'id'   => $prefix . 'meetteamtitle',
                'type'    => 'text',
            ),
            array(
                'name' => 'First Person Photo',
                'desc' => 'Upload first photo',
                'id'   => $prefix . 'firstphotoperson',
                'type'    => 'file',
            ),
            array(
                'name' => 'First Person Name',
                'desc' => 'Insert first person name',
                'id'   => $prefix . 'firstnameperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'First Person Profession',
                'desc' => 'Insert first person profession',
                'id'   => $prefix . 'firstprofperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'First Person Facebook link',
                'desc' => 'Insert first person Facebook link',
                'id'   => $prefix . 'firstfbperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'First Person Twitter link',
                'desc' => 'Insert first person Twitter link',
                'id'   => $prefix . 'firsttwiperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'First Person Email',
                'desc' => 'Insert first person email',
                'id'   => $prefix . 'firstemailperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second Person Photo',
                'desc' => 'Upload second photo',
                'id'   => $prefix . 'secondphotoperson',
                'type'    => 'file',
            ),
            array(
                'name' => 'Second Person Name',
                'desc' => 'Insert second person name',
                'id'   => $prefix . 'secondnameperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second Person Profession',
                'desc' => 'Insert second person profession',
                'id'   => $prefix . 'secondprofperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second Person Facebook link',
                'desc' => 'Insert second person Facebook link',
                'id'   => $prefix . 'secondfbperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second Person Twitter link',
                'desc' => 'Insert second person Twitter link',
                'id'   => $prefix . 'secondtwiperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second Person Email',
                'desc' => 'Insert second person email',
                'id'   => $prefix . 'secondemailperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third Person Photo',
                'desc' => 'Upload third photo',
                'id'   => $prefix . 'thirdphotoperson',
                'type'    => 'file',
            ),
            array(
                'name' => 'Third Person Name',
                'desc' => 'Insert third person name',
                'id'   => $prefix . 'thirdnameperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third Person Profession',
                'desc' => 'Insert third person profession',
                'id'   => $prefix . 'thirdprofperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third Person Facebook link',
                'desc' => 'Insert third person Facebook link',
                'id'   => $prefix . 'thirdfbperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'third Person Twitter link',
                'desc' => 'Insert third person Twitter link',
                'id'   => $prefix . 'thirdtwiperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third Person Email',
                'desc' => 'Insert third person email',
                'id'   => $prefix . 'thirdemailperson',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'oneblog_page_metabox',
        'title'      => 'Blog Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-blog.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Select Grid Style',
                'desc' => 'Select Grid Style',
                'id'   => $prefix . 'tumbsblogstylepag',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Standard Thumbnails', 'value' => 'standtumbs', ),
                    array( 'name' => 'Masonry Thumbnails', 'value' => 'masontumbs', ),
                ),
            ),

            array(
                'name' => 'Select Numbers of Columns',
                'desc' => 'Select Columns',
                'id'   => $prefix . 'blogcolumnsnumpag',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Full Width', 'value' => 'fullwidth', ),
                    array( 'name' => 'Two Columns', 'value' => 'twocol', ),
                    array( 'name' => 'Three Columns', 'value' => 'threecol', ),
                ),
            ),

            array(
                'name' => 'Items per page',
                'desc' => 'Type the numbers of items per page',
                'id'   => $prefix . 'itemblogpage',
                'std'   => '9',
                'type'    => 'text',
            ),

            array(
                'name' => 'Show one category',
                'desc' => 'Insert the ID of the category you want to show. Empty field will show all categories.',
                'id'   => $prefix . 'itemblogcategory',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'fullblog_metabox',
        'title'      => 'Blog Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-blog-centered.php','template-blog-1.php','template-blog-2.php','template-blog-3.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Items per page',
                'desc' => 'Type the numbers of items per page',
                'id'   => $prefix . 'itemblogpage',
                'std'   => '9',
                'type'    => 'text',
            ),

            array(
                'name' => 'Show one category',
                'desc' => 'Insert the ID of the category you want to show. Empty field will show all categories.',
                'id'   => $prefix . 'itemblogcategory',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'new_gallery_metabox',
        'title'      => 'New Gallery Styles Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-gallery-1.php','template-gallery-2.php','template-gallery-3.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Items per page',
                'desc' => 'Type the numbers of items per page',
                'id'   => $prefix . 'itemgalpage',
                'std'   => '9',
                'type'    => 'text',
            ),

            array(
                'name' => 'Show one category',
                'desc' => 'Insert the ID of the category you want to show. Empty field will show all categories.',
                'id'   => $prefix . 'itemgalcategory',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'onegallery_page_metabox',
        'title'      => 'Gallery Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-gallery-pagination.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Select Grid Style',
                'desc' => 'Select Grid Style',
                'id'   => $prefix . 'tumbsgallerystylepag',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Standard Thumbnails', 'value' => 'standtumbs', ),
                    array( 'name' => 'Masonry Thumbnails', 'value' => 'masontumbs', ),
                ),
            ),

            array(
                'name' => 'Select Numbers of Columns',
                'desc' => 'Select Columns',
                'id'   => $prefix . 'galcolumnsnumpag',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Two Columns', 'value' => 'twocol', ),
                    array( 'name' => 'Three Columns', 'value' => 'threecol', ),
                    array( 'name' => 'Four Columns', 'value' => 'fourcol', ),
                ),
            ),

            array(
                'name' => 'Items per page',
                'desc' => 'Type the numbers of items per page',
                'id'   => $prefix . 'itemgalpage',
                'std'   => '9',
                'type'    => 'text',
            ),

            array(
                'name' => 'Show one category',
                'desc' => 'Insert the ID of the category you want to show. Empty field will show all categories.',
                'id'   => $prefix . 'itemgalcategory',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'twogallery_page_metabox',
        'title'      => 'Gallery Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-gallery-filter.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Select Grid Style',
                'desc' => 'Select Grid Style',
                'id'   => $prefix . 'tumbsgallerystyle',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Standard Thumbnails', 'value' => 'standtumbs', ),
                    array( 'name' => 'Masonry Thumbnails', 'value' => 'masontumbs', ),
                ),
            ),

            array(
                'name' => 'Select Numbers of Columns',
                'desc' => 'Select Columns',
                'id'   => $prefix . 'galcolumnsnum',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Two Columns', 'value' => 'twocol', ),
                    array( 'name' => 'Three Columns', 'value' => 'threecol', ),
                    array( 'name' => 'Four Columns', 'value' => 'fourcol', ),
                ),
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'homeone_page_metabox',
        'title'      => 'Home page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-one.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Slider effect',
                'desc' => 'Select the slider effect',
                'id'   => $prefix . 'slidereffect',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'sliceDown', 'value' => 'sliceDown', ),
                    array( 'name' => 'sliceDownLeft', 'value' => 'sliceDownLeft', ),
                    array( 'name' => 'sliceUp', 'value' => 'sliceUp', ),
                    array( 'name' => 'sliceUpLeft', 'value' => 'sliceUpLeft', ),
                    array( 'name' => 'sliceUpDown', 'value' => 'sliceUpDown', ),
                    array( 'name' => 'sliceUpDownLeft', 'value' => 'sliceUpDownLeft', ),
                    array( 'name' => 'fold', 'value' => 'fold', ),
                    array( 'name' => 'fade', 'value' => 'fade', ),
                    array( 'name' => 'random', 'value' => 'random', ),
                    array( 'name' => 'slideInRight', 'value' => 'slideInRight', ),
                    array( 'name' => 'slideInLeft', 'value' => 'slideInLeft', ),
                    array( 'name' => 'boxRandom', 'value' => 'boxRandom', ),
                    array( 'name' => 'boxRain', 'value' => 'boxRain', ),
                    array( 'name' => 'boxRainReverse', 'value' => 'boxRainReverse', ),
                    array( 'name' => 'boxRainGrow', 'value' => 'boxRainGrow', ),
                    array( 'name' => 'boxRainGrowReverse', 'value' => 'boxRainGrowReverse', ),
                ),
            ),
            array(
                'name' => 'Show Blog Posts or Gallery',
                'desc' => 'Select what you want to show on home page',
                'id'   => $prefix . 'showtypehome',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Gallery', 'value' => 'gallery', ),
                    array( 'name' => 'Blog Posts', 'value' => 'post', ),
                    array( 'name' => 'Show Content', 'value' => 'content', ),
                ),
            ),

            array(
                'name' => 'Show only one category',
                'desc' => 'Insert the ID of the category',
                'id'   => $prefix . 'showcathome',
                'type'    => 'text',

            ),

            array(
                'name' => 'Posts per page',
                'desc' => 'Insert the number of posts per page. Empty Field will show all posts.',
                'id'   => $prefix . 'shownumpostshome',
                'type'    => 'text',
            ),

        )
    );

    $meta_boxes[] = array(
        'id'         => 'home_page_metabox',
        'title'      => 'Home Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('page-home.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Slider style',
                'desc' => 'Select the slider style',
                'id'   => $prefix . 'sliderstylefull',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Full Width', 'value' => 'full', ),
                    array( 'name' => 'Static Width', 'value' => 'static', ),
                ),
            ),

            array(
                'name' => 'Show Blog Posts or Gallery',
                'desc' => 'Select what you want to show on home page',
                'id'   => $prefix . 'showtypehome',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Gallery', 'value' => 'gallery', ),
                    array( 'name' => 'Blog Posts', 'value' => 'post', ),
                    array( 'name' => 'Show Content', 'value' => 'content', ),
                    array( 'name' => 'Close', 'value' => 'close', ),
                ),
            ),

            array(
                'name' => 'Show only one category',
                'desc' => 'Insert the ID of the category',
                'id'   => $prefix . 'showcathome',
                'type'    => 'text',

            ),

            array(
                'name' => 'Posts per page',
                'desc' => 'Insert the number of posts per page. Empty Field will show all posts.',
                'id'   => $prefix . 'shownumpostshome',
                'type'    => 'text',
            ),

        )
    );

    $meta_boxes[] = array(
        'id'         => 'inspiration_page_metabox',
        'title'      => 'Inspiration Metabox',
        'pages'      => array( 'inspiration', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Place',
                'desc' => 'Inspiration place',
                'id'   => $prefix . 'inspirationplace',
                'type'    => 'text',
            ),

            array(
                'name' => 'Date',
                'desc' => 'Insert the date',
                'id'   => $prefix . 'inspirationdate',
                'type'    => 'text_date',
            ),

            array(
                'name' => 'Impression & Feelings',
                'desc' => 'Insert a few words',
                'id'   => $prefix . 'impress',
                'type'    => 'text',
            ),

            array(
                'name' => 'Map Icon',
                'desc' => 'Upload an image for Inspirations Slider used on New Home (variant 3) - Recomended size - 340px-205px',
                'id'   => $prefix . 'ins-map-icon',
                'type'    => 'file',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'testimonials_page_metabox',
        'title'      => 'Testimonials Metabox',
        'pages'      => array( 'testimonials', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Testimonial Author',
                'desc' => 'The author',
                'id'   => $prefix . 'testimauthor',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'post_page_metabox',
        'title'      => 'Post Data',
        'pages'      => array( 'post', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Video Link',
                'desc' => 'You can put here the links from youtube.com, vimeo.com, blip.tv, dailymotion.com, flickr.com, smugmug.com, hulu.com, viddler.com, qik.com, revision3.com, photobucket.com, scribd.com, wordpress.tv, polldaddy.com, funnyordie.com, twitter.com, soundcloud.com, slideshare.net, instagram.com',
                'id'   => $prefix . 'videopostlink',
                'type'    => 'text',
            ),
            array(
                'name' => 'Enable or Disable Featured image on Single post page. (Only Standard or Quote Type Post)',
                'desc' => 'Check if you want to show the Featured image on Single post.',
                'id'   => $prefix . 'featuredonsigle',
                'type'    => 'checkbox',
            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'press_page_metabox',
        'title'      => 'Press Options',
        'pages'      => array( 'press', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Online Press Link',
                'desc' => 'Is the Press is Online, put here the External Link',
                'id'   => $prefix . 'pressexternallink',
                'type'    => 'text',
            ),
        )
    );

    /* New Home Pages added in v. 2.4 */

    $meta_boxes[] = array(
        'id'         => 'new_home_one_page_metabox',
        'title'      => 'New Home 1 Metaboxes',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-1.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Select a Slider',
                'desc' => 'Select one slider to show on your home page. If you don\'t have sliders go to <a href="'. admin_url('themes.php?page=aletheme_sliders') .'">Slider Section</a> and create. (<b style="color:#ff0000;">Recommended size: 1050px-555px</b>)',
                'id'   => $prefix . 'new-hone-slider',
                'type'    => 'select',
                'options' => $slider_list,
            ),
            array(
                'name' => 'Home page subtitle',
                'desc' => 'Insert your subtitle here',
                'id'   => $prefix . 'home1-subtitle',
                'std'   => 'There are many variations of passages',
                'type'    => 'text',
            ),
            array(
                'name' => 'Home page title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'home1-title',
                'std'   => 'Many desktop publishing packages and web page editors now use Lorem Ipsum',
                'type'    => 'text',
            ),
            array(
                'name' => 'Home page Box 1 Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'ho1-box-title1',
                'std'   => 'page editors now use Lorem Ipsum',
                'type'    => 'text',
            ),
            array(
                'name' => 'Home page Box 1 Description',
                'desc' => 'Insert your description here',
                'id'   => $prefix . 'ho1-box-desc1',
                'std'   => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of ',
                'type'    => 'textarea',
            ),
            array(
                'name' => 'Home page Box 2 Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'ho1-box-title2',
                'std'   => 'page editors now use Lorem Ipsum',
                'type'    => 'text',
            ),
            array(
                'name' => 'Home page Box 2 Description',
                'desc' => 'Insert your description here',
                'id'   => $prefix . 'ho1-box-desc2',
                'std'   => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of ',
                'type'    => 'textarea',
            ),
            array(
                'name' => 'Home page Box 3 Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'ho1-box-title3',
                'std'   => 'page editors now use Lorem Ipsum',
                'type'    => 'text',
            ),
            array(
                'name' => 'Home page Box 3 Description',
                'desc' => 'Insert your description here',
                'id'   => $prefix . 'ho1-box-desc3',
                'std'   => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of ',
                'type'    => 'textarea',
            ),
            array(
                'name' => 'Home page Bottom About Image',
                'desc' => 'Insert your image link here (Recommended size - 390px-367px)',
                'id'   => $prefix . 'bottom-photo-link',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Home page Bottom About Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'bottom-about-title',
                'std'   => 'Socha Responsive theme',
                'type'    => 'text',
            ),
            array(
                'name' => 'Home page Bottom About Description',
                'desc' => 'Insert your description here',
                'id'   => $prefix . 'bottom-about-desc',
                'std'   => '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p><p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>',
                'type'    => 'textarea_code',
            ),
            array(
                'name' => 'Home page Bottom About Link',
                'desc' => 'Insert your link here',
                'id'   => $prefix . 'bottom-about-link',
                'std'   => '',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'new_home_two_page_metabox',
        'title'      => 'New Home 2 Metaboxes',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-2.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Top 3 Boxes',
                'desc' => 'Insert data for 3 top boxes',
                'id'   => $prefix . 'title-home-2',
                'type'    => 'title',
            ),
            array(
                'name' => 'Box 1 Image',
                'desc' => 'Insert your image here. <b style="color:#ff0000;">Size - 344px-555px</b>',
                'id'   => $prefix . 'h2-box-1-image',
                'type'    => 'file',
            ),
            array(
                'name' => 'Box 1 title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'h2-box-1-title',
                'std'   => 'Inspiration',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 1 Short Description',
                'desc' => 'Insert your description here',
                'id'   => $prefix . 'h2-box-1-desc',
                'std'   => 'Short description',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 1 Link',
                'desc' => 'Insert your link here',
                'id'   => $prefix . 'h2-box-1-link',
                'std'   => '',
                'type'    => 'text',
            ),

            array(
                'name' => 'Box 2 Image',
                'desc' => 'Insert your image here. <b style="color:#ff0000;">Size - 344px-555px</b>',
                'id'   => $prefix . 'h2-box-2-image',
                'type'    => 'file',
            ),
            array(
                'name' => 'Box 2 title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'h2-box-2-title',
                'std'   => 'Videos',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 2 Short Description',
                'desc' => 'Insert your description here',
                'id'   => $prefix . 'h2-box-2-desc',
                'std'   => 'Short description',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 2 Link',
                'desc' => 'Insert your link here',
                'id'   => $prefix . 'h2-box-2-link',
                'std'   => '',
                'type'    => 'text',
            ),

            array(
                'name' => 'Box 3 Image',
                'desc' => 'Insert your image here. <b style="color:#ff0000;">Size - 344px-555px</b>',
                'id'   => $prefix . 'h2-box-3-image',
                'type'    => 'file',
            ),
            array(
                'name' => 'Box 3 title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'h2-box-3-title',
                'std'   => 'Shop',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 3 Short Description',
                'desc' => 'Insert your description here',
                'id'   => $prefix . 'h2-box-3-desc',
                'std'   => 'Short description',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 3 Link',
                'desc' => 'Insert your link here',
                'id'   => $prefix . 'h2-box-3-link',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'About Us Box',
                'desc' => 'Insert data for about box',
                'id'   => $prefix . 'title-home-2-about',
                'type'    => 'title',
            ),
            array(
                'name' => 'Number 1',
                'desc' => 'Insert your number here',
                'id'   => $prefix . 'h2-about-1-num',
                'std'   => '58',
                'type'    => 'text',
            ),
            array(
                'name' => 'Number 1 Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'h2-about-1-title',
                'std'   => 'Photo Collections',
                'type'    => 'text',
            ),
            array(
                'name' => 'Number 2',
                'desc' => 'Insert your number here',
                'id'   => $prefix . 'h2-about-2-num',
                'std'   => '20',
                'type'    => 'text',
            ),
            array(
                'name' => 'Number 2 Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'h2-about-2-title',
                'std'   => 'Visited countries',
                'type'    => 'text',
            ),
            array(
                'name' => 'Number 3',
                'desc' => 'Insert your number here',
                'id'   => $prefix . 'h2-about-3-num',
                'std'   => '61',
                'type'    => 'text',
            ),
            array(
                'name' => 'Number 3 Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'h2-about-3-title',
                'std'   => 'Articles',
                'type'    => 'text',
            ),
            array(
                'name' => 'About Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'h2-about-title',
                'std'   => 'Socha Responsive theme',
                'type'    => 'text',
            ),
            array(
                'name' => 'About description',
                'desc' => 'Insert your description here',
                'id'   => $prefix . 'h2-about-desc',
                'std'   => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum',
                'type'    => 'text',
            ),
            array(
                'name' => 'About Link',
                'desc' => 'Insert your link here',
                'id'   => $prefix . 'h2-about-link',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Video Presentation',
                'desc' => 'Insert data for video box',
                'id'   => $prefix . 'title-home-2-video',
                'type'    => 'title',
            ),
            array(
                'name' => 'Video Link',
                'desc' => 'Insert your video link here',
                'id'   => $prefix . 'h2-video-link',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Video Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'h2-video-title',
                'std'   => 'Socha <span>adventures</span>',
                'type'    => 'text',
            ),
            array(
                'name' => 'Video Description',
                'desc' => 'Insert your description here',
                'id'   => $prefix . 'h2-video-desc',
                'std'   => 'Short video presentation',
                'type'    => 'text',
            ),
            array(
                'name' => 'Video Background image',
                'desc' => 'Insert your image here. <b style="color:#ff0000;">Size - 534px-343px</b>',
                'id'   => $prefix . 'h2-video-image',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Collections Box',
                'desc' => 'Insert data for collections box',
                'id'   => $prefix . 'title-home-2-collection',
                'type'    => 'title',
            ),
            array(
                'name' => 'Section title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'h2-col-title',
                'std'   => 'Collections',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 1 Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'h2-box1-title',
                'std'   => 'Milford Sound',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 1 Location',
                'desc' => 'Insert your text here',
                'id'   => $prefix . 'h2-box1-loc',
                'std'   => 'New Zealand',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 1 Link',
                'desc' => 'Insert your link here',
                'id'   => $prefix . 'h2-box1-link',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 1 Description',
                'desc' => 'Insert your description here',
                'id'   => $prefix . 'h2-box1-desc',
                'std'   => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected ',
                'type'    => 'textarea_code',
            ),
            array(
                'name' => 'Box 1 Image',
                'desc' => 'Insert your image here. <b style="color:#ff0000;">Size - 359px-759px</b>',
                'id'   => $prefix . 'h2-box1-image',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Box 2 Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'h2-box2-title',
                'std'   => 'Milford Sound',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 2 Location',
                'desc' => 'Insert your text here',
                'id'   => $prefix . 'h2-box2-loc',
                'std'   => 'New Zealand',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 2 Link',
                'desc' => 'Insert your link here',
                'id'   => $prefix . 'h2-box2-link',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 2 Description',
                'desc' => 'Insert your description here',
                'id'   => $prefix . 'h2-box2-desc',
                'std'   => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected ',
                'type'    => 'textarea_code',
            ),
            array(
                'name' => 'Box 2 Image',
                'desc' => 'Insert your image here. <b style="color:#ff0000;">Size - 901px-370px</b>',
                'id'   => $prefix . 'h2-box2-image',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Box 3 Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'h2-box3-title',
                'std'   => 'Beautiful Ha Long Bay View',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 3 Location',
                'desc' => 'Insert your text here',
                'id'   => $prefix . 'h2-box3-loc',
                'std'   => 'taiwan',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 3 Link',
                'desc' => 'Insert your link here',
                'id'   => $prefix . 'h2-box3-link',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 3 Image',
                'desc' => 'Insert your image here. <b style="color:#ff0000;">Size - 440px-370px</b>',
                'id'   => $prefix . 'h2-box3-image',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Box 4 Title',
                'desc' => 'Insert your title here',
                'id'   => $prefix . 'h2-box4-title',
                'std'   => 'Beautiful Ha Long Bay View',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 4 Location',
                'desc' => 'Insert your text here',
                'id'   => $prefix . 'h2-box4-loc',
                'std'   => 'taiwan',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 4 Link',
                'desc' => 'Insert your link here',
                'id'   => $prefix . 'h2-box4-link',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Box 4 Image',
                'desc' => 'Insert your image here. <b style="color:#ff0000;">Size - 440px-370px</b>',
                'id'   => $prefix . 'h2-box4-image',
                'std'   => '',
                'type'    => 'file',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'new_home_three_page_metabox',
        'title'      => 'New Home 3 Metaboxes',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-3.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Select a Slider',
                'desc' => 'Select one slider to show on your home page. If you don\'t have sliders go to <a href="'. admin_url('themes.php?page=aletheme_sliders') .'">Slider Section</a> and create. (<b style="color:#ff0000;">Recommended size: 1920px-1160px</b>)',
                'id'   => $prefix . 'new-hone3-slider',
                'type'    => 'select',
                'options' => $slider_list,
            ),
            array(
                'name' => 'Inspirations Slider',
                'desc' => 'Insert info for the inspirations box',
                'id'   => $prefix . 'h3-inspirations-title',
                'type'    => 'title',
            ),
            array(
                'name' => 'Box Background',
                'desc' => 'Insert your image here. <b style="color:#ff0000;">Size - 1280px-575px</b>',
                'id'   => $prefix . 'h3-ins-bg',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Inspirations posts in Slider',
                'desc' => 'Insert the count. By default 3',
                'id'   => $prefix . 'h3-ins-slider-count',
                'std'   => '3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Subscribe Box',
                'desc' => 'Insert info for the Subscribe box',
                'id'   => $prefix . 'h3-subscribe-title',
                'type'    => 'title',
            ),
            array(
                'name' => 'Subscribe Plugin',
                'desc' => 'Check if the <b>MailChimp for WordPress</b> plugin is installed.<br><br><b style="color:red;">Important Settings:</b><br>Go to <a href="'.admin_url('admin.php?page=mc4wp-lite-form-settings').'" target="_blank">Forms Settings</a> and select <u>NO</u> to <u>Load form styles (CSS)?</u><br>And in <u>Form mark-up</u> add that code: &lt;input type="email" id="mc4wp_email" name="EMAIL" placeholder="Your email address" required /&gt&lt;input type="submit" value="Subscribe" /&gt',
                'id'   => $prefix . 'h3-subscribe-option',
                'std'   => '',
                'type'    => 'checkbox',
            ),
            array(
                'name' => 'Partners Box',
                'desc' => 'Insert info for the Partners box',
                'id'   => $prefix . 'h3-partners',
                'type'    => 'title',
            ),
            array(
                'name' => 'Partners Section Title',
                'desc' => 'Insert the title. Make it empty if you want to hide the Partners Box.',
                'id'   => $prefix . 'h3-partners-title',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partner Item 1',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'h3-partner-1img',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partner Item 1 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'h3-partner-1link',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partner Item 2',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'h3-partner-2img',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partner Item 2 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'h3-partner-2link',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partner Item 3',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'h3-partner-3img',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partner Item 3 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'h3-partner-3link',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partner Item 4',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'h3-partner-4img',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partner Item 4 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'h3-partner-4link',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partner Item 5',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'h3-partner-5img',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partner Item 5 link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'h3-partner-5link',
                'std'   => '',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'new_home_four_page_metabox',
        'title'      => 'New Home 4 Metaboxes',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-4.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Adventures Box',
                'desc' => 'Insert info for the adventures box',
                'id'   => $prefix . 'h4-adventures-title',
                'type'    => 'title',
            ),
            array(
                'name' => 'Adventures Box Title',
                'desc' => 'Insert your title. If the field is empty, the box will be disabled.',
                'id'   => $prefix . 'h4-adventures-title',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Adventures Map Address',
                'desc' => 'Insert your address.',
                'id'   => $prefix . 'h4-adventures-address',
                'std'   => 'Moldova, Chisinau, Stefan cel Mare 90',
                'type'    => 'text',
            ),
            array(
                'name' => 'Adventures Info Background',
                'desc' => 'Insert your image.<b style="color:#ff0000;">Size - 640px-605px</b>',
                'id'   => $prefix . 'h4-adventures-bg',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Adventures Info Title',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'h4-adventures-infotitle',
                'std'   => 'This book is a treatise<br />on the theory of ethics',
                'type'    => 'text',
            ),
            array(
                'name' => 'Adventures Info Description',
                'desc' => 'Insert your description.',
                'id'   => $prefix . 'h4-adventures-infodesc',
                'std'   => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.',
                'type'    => 'text',
            ),
            array(
                'name' => 'Adventures Info Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'h4-adventures-infolink',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Our Team Box',
                'desc' => 'Insert info for the team box',
                'id'   => $prefix . 'h4-team-box',
                'type'    => 'title',
            ),
            array(
                'name' => 'Our Team Title',
                'desc' => 'Insert the title. Let it empty to disable Our Team box.',
                'id'   => $prefix . 'h4-team-title',
                'type'    => 'text',
            ),
            array(
                'name' => 'Member 1 Photo',
                'desc' => 'Insert member photo',
                'id'   => $prefix . 'h4-team-photo1',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Member 1 Name',
                'desc' => 'Insert member name',
                'id'   => $prefix . 'h4-team-name1',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Member 1 Type',
                'desc' => 'Insert member type',
                'id'   => $prefix . 'h4-team-type1',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Member 2 Photo',
                'desc' => 'Insert member photo',
                'id'   => $prefix . 'h4-team-photo2',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Member 2 Name',
                'desc' => 'Insert member name',
                'id'   => $prefix . 'h4-team-name2',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Member 2 Type',
                'desc' => 'Insert member type',
                'id'   => $prefix . 'h4-team-type2',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Member 3 Photo',
                'desc' => 'Insert member photo',
                'id'   => $prefix . 'h4-team-photo3',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Member 3 Name',
                'desc' => 'Insert member name',
                'id'   => $prefix . 'h4-team-name3',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Member 3 Type',
                'desc' => 'Insert member type',
                'id'   => $prefix . 'h4-team-type3',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Member 4 Photo',
                'desc' => 'Insert member photo',
                'id'   => $prefix . 'h4-team-photo4',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Member 4 Name',
                'desc' => 'Insert member name',
                'id'   => $prefix . 'h4-team-name4',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Member 4 Type',
                'desc' => 'Insert member type',
                'id'   => $prefix . 'h4-team-type4',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Member 5 Photo',
                'desc' => 'Insert member photo',
                'id'   => $prefix . 'h4-team-photo5',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Member 5 Name',
                'desc' => 'Insert member name',
                'id'   => $prefix . 'h4-team-name5',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Member 5 Type',
                'desc' => 'Insert member type',
                'id'   => $prefix . 'h4-team-type5',
                'std'   => '',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'new_home_five_page_metabox',
        'title'      => 'New Home 5 Metaboxes',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-5.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Select a Slider',
                'desc' => 'Select one slider to show on your home page. If you don\'t have sliders go to <a href="'. admin_url('themes.php?page=aletheme_sliders') .'">Slider Section</a> and create. (<b style="color:#ff0000;">Recommended size: 790px-555px</b>)',
                'id'   => $prefix . 'new-hone5-slider',
                'type'    => 'select',
                'options' => $slider_list,
            ),
            array(
                'name' => 'Photo Session Box',
                'desc' => 'Insert info for the photo session box',
                'id'   => $prefix . 'h5-photosession',
                'type'    => 'title',
            ),
            array(
                'name' => 'Photo Session Image',
                'desc' => 'Insert your image. <b style="color:#ff0000;">Size - 243px-361px</b>',
                'id'   => $prefix . 'h5-photosession-image',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Photo Session Title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'h5-photosession-title',
                'std'   => 'New summer<br />photosession',
                'type'    => 'text',
            ),
            array(
                'name' => 'Photo Session Description',
                'desc' => 'Insert your description',
                'id'   => $prefix . 'h5-photosession-desc',
                'std'   => 'Lorem Ipsum has been the industrys standard dummy text ',
                'type'    => 'text',
            ),
            array(
                'name' => 'Photo Session Link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'h5-photosession-link',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Inspire Box',
                'desc' => 'Insert info for the inspire box.',
                'id'   => $prefix . 'h5-inspire',
                'type'    => 'title',
            ),
            array(
                'name' => 'Inspire Box Title',
                'desc' => 'Insert your title. Let it empty to dissable the box.',
                'id'   => $prefix . 'h5-inspire-title',
                'std'   => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Inspire Block 1 Title',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'h5-inspire-title1',
                'std'   => 'This book is a treatise<br />on the theory of ethics',
                'type'    => 'text',
            ),
            array(
                'name' => 'Inspire Block 1 Description',
                'desc' => 'Insert your description.',
                'id'   => $prefix . 'h5-inspire-desc1',
                'std'   => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
                'type'    => 'text',
            ),
            array(
                'name' => 'Inspire Block 2 Title',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'h5-inspire-title2',
                'std'   => 'The generated Lorem <br />Ipsum is therefore',
                'type'    => 'text',
            ),
            array(
                'name' => 'Inspire Block 2 Description',
                'desc' => 'Insert your description.',
                'id'   => $prefix . 'h5-inspire-desc2',
                'std'   => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
                'type'    => 'text',
            ),
            array(
                'name' => 'Inspire Block 3 Title',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'h5-inspire-title3',
                'std'   => 'There are many<br /> variations of passagesf ',
                'type'    => 'text',
            ),
            array(
                'name' => 'Inspire Block 3 Description',
                'desc' => 'Insert your description.',
                'id'   => $prefix . 'h5-inspire-desc3',
                'std'   => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
                'type'    => 'text',
            ),
            array(
                'name' => 'Inspire Block 4 Title',
                'desc' => 'Insert your title.',
                'id'   => $prefix . 'h5-inspire-title4',
                'std'   => 'This book is a treatise<br />on the theory of ethics',
                'type'    => 'text',
            ),
            array(
                'name' => 'Inspire Block 4 Description',
                'desc' => 'Insert your description.',
                'id'   => $prefix . 'h5-inspire-desc4',
                'std'   => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
                'type'    => 'text',
            ),
            array(
                'name' => 'Inspire Block background',
                'desc' => 'Insert your image. <b style="color:#ff0000;">Size- 353px-548px</b>',
                'id'   => $prefix . 'h5-inspire-bg',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Pop up Images',
                'desc' => 'Insert info for the photo session box',
                'id'   => $prefix . 'h5-popupimages',
                'type'    => 'title',
            ),
            array(
                'name' => 'Image 1 Thumb',
                'desc' => 'Insert your image. <b style="color:#ff0000;">Size- 320px-168px</b>',
                'id'   => $prefix . 'h5-popimg-min1',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Image 1 Big',
                'desc' => 'Insert your image. <b style="color:#ff0000;">Size- 1200px-900px</b>',
                'id'   => $prefix . 'h5-popimg-max1',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Image 2 Thumb',
                'desc' => 'Insert your image. <b style="color:#ff0000;">Size- 320px-168px</b>',
                'id'   => $prefix . 'h5-popimg-min2',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Image 2 Big',
                'desc' => 'Insert your image. <b style="color:#ff0000;">Size- 1200px-900px</b>',
                'id'   => $prefix . 'h5-popimg-max2',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Image 3 Thumb',
                'desc' => 'Insert your image. <b style="color:#ff0000;">Size- 320px-168px</b>',
                'id'   => $prefix . 'h5-popimg-min3',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Image 3 Big',
                'desc' => 'Insert your image. <b style="color:#ff0000;">Size- 1200px-900px</b>',
                'id'   => $prefix . 'h5-popimg-max3',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Image 4 Thumb',
                'desc' => 'Insert your image. <b style="color:#ff0000;">Size- 320px-168px</b>',
                'id'   => $prefix . 'h5-popimg-min4',
                'std'   => '',
                'type'    => 'file',
            ),
            array(
                'name' => 'Image 4 Big',
                'desc' => 'Insert your image. <b style="color:#ff0000;">Size- 1200px-900px</b>',
                'id'   => $prefix . 'h5-popimg-max4',
                'std'   => '',
                'type'    => 'file',
            ),
        )
    );
	
	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function aletheme_get_images_sizes() {
	return array(

        'page' => array(
            array(
                'name'        => 'page-slider',
                'width'        => 460,
                'height'    => 205,
                'crop'        => true,
            ),

        ),

        'press' => array(
            array(
                'name'        => 'press-poster',
                'width'        => 320,
                'height'    => 9999,
                'crop'        => false,
            ),
            array(
                'name'        => 'press-online',
                'width'        => 230,
                'height'    => 185,
                'crop'        => true,
            ),
        ),

        'inspiration' => array(
            array(
                'name'        => 'inspiration-poster',
                'width'        => 330,
                'height'    => 212,
                'crop'        => true,
            ),
            array(
                'name'        => 'inspiration-slider',
                'width'        => 9999,
                'height'    => 370,
                'crop'        => false,
            ),
        ),

        'video' => array(
            array(
                'name'        => 'video-poster',
                'width'        => 320,
                'height'    => 9999,
                'crop'        => false,
            ),
        ),

        'testimonials' => array(
            array(
                'name'        => 'testimonials-avatar',
                'width'        => 330,
                'height'    => 212,
                'crop'        => true,
            ),
            array(
                'name'        => 'testimonials-slider',
                'width'        => 105,
                'height'    => 105,
                'crop'        => true,
            ),
        ),

        'gallery' => array(
            array(
                'name'        => 'gallery-slider',
                'width'        => 1000,
                'height'    => 9999,
                'crop'        => false,
            ),
            array(
                'name'        => 'gallery-tumba',
                'width'        => 320,
                'height'    => 9999,
                'crop'        => false,
            ),

            array(
                'name'        => 'gallery-three',
                'width'        => 330,
                'height'    => 212,
                'crop'        => true,
            ),

            array(
                'name'        => 'gallery-two',
                'width'        => 500,
                'height'    => 320,
                'crop'        => true,
            ),

            array(
                'name'        => 'gallery-four',
                'width'        => 245,
                'height'    => 160,
                'crop'        => true,
            ),

            array(
                'name'        => 'gallery-three-mason',
                'width'        => 330,
                'height'    => 9999,
                'crop'        => false,
            ),

            array(
                'name'        => 'gallery-two-mason',
                'width'        => 500,
                'height'    => 9999,
                'crop'        => false,
            ),

            array(
                'name'        => 'gallery-four-mason',
                'width'        => 245,
                'height'    => 9999,
                'crop'        => false,
            ),

            array(
                'name'        => 'gallery-minitumba',
                'width'        => 150,
                'height'    => 110,
                'crop'        => true,
            ),

            array(
                'name'        => 'gallery-newstylethumb',
                'width'        => 330,
                'height'    => 330,
                'crop'        => true,
            ),

            array(
                'name'        => 'gallery-bigitemthumb',
                'width'        => 1032,
                'height'    => 370,
                'crop'        => true,
            ),

            array(
                'name'        => 'gallery-smallitemthumb',
                'width'        => 505,
                'height'    => 370,
                'crop'        => true,
            ),

            array(
                'name'        => 'gallery-newthumb',
                'width'        => 344,
                'height'    => 555,
                'crop'        => true,
            ),
        ),

        'post' => array(
            array(
                'name'        => 'post-mostcommented',
                'width'        => 200,
                'height'    => 145,
                'crop'        => true,
            ),
            array(
                'name'        => 'post-tumba',
                'width'        => 320,
                'height'    => 220,
                'crop'        => true,
            ),
            array(
                'name'        => 'post-poster',
                'width'        => 320,
                'height'    => 9999,
                'crop'        => false,
            ),
            array(
                'name'        => 'post-flex',
                'width'        => 320,
                'height'    => 210,
                'crop'        => true,
            ),
            array(
                'name'        => 'post-paper',
                'width'        => 1000,
                'height'    => 9999,
                'crop'        => false,
            ),
            array(
                'name'        => 'post-fullwidth',
                'width'        => 1000,
                'height'    => 400,
                'crop'        => true,
            ),
            array(
                'name'        => 'post-two',
                'width'        => 500,
                'height'    => 320,
                'crop'        => true,
            ),
            array(
                'name'        => 'post-two-mini',
                'width'        => 237,
                'height'    => 320,
                'crop'        => true,
            ),
            array(
                'name'        => 'post-two-mason',
                'width'        => 500,
                'height'    => 9999,
                'crop'        => false,
            ),
            array(
                'name'        => 'post-new-home',
                'width'        => 258,
                'height'    => 278,
                'crop'        => true,
            ),
        ),
    );
}

/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function aletheme_get_post_types() {
	return array(
        'gallery' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'rewrite' => array('slug' => 'galleries'),
                'supports'=> array(
                    'title',
                    'comments',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Gallery',
            'multiple' => 'Galleries',
            'columns'    => array(
                'first_image',
            )
        ),

        'inspiration' => array(
            'config' => array(
                'public' => true,
                'exclude_from_search' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'comments',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Inspiration',
            'multiple' => 'Inspirations',
            'columns'    => array(
                'first_image',
            )
        ),

        'press' => array(
            'config' => array(
                'public' => true,
                'exclude_from_search' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'comments',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Press',
            'multiple' => 'Press',
        ),

        'video' => array(
            'config' => array(
                'public' => true,
                'exclude_from_search' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'comments',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Video',
            'multiple' => 'Videos',
        ),

        'testimonials' => array(
            'config' => array(
                'public' => true,
                'exclude_from_search' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'comments',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Testimonial',
            'multiple' => 'Testimonials',
        ),
    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function aletheme_get_taxonomies() {
	return array(

        'gallery-category'    => array(
            'for'        => array('gallery'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Gallery Category',
            'multiple'    => 'Gallery Categories',
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function aletheme_get_post_formats() {
	return array(
        'gallery','image','video','quote'
    );
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function aletheme_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function aletheme_get_post_types_with_gallery() {
	return array('post','gallery','inspiration');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
	return array();
}